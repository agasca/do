<?php
/*******
*SCIAG.*
*2013  *
*******/
	require_once('Smarty/libs/Smarty.class.php');

	session_start();
	
	if(!isset($_SESSION['name'])){
		echo "Access not allowed.";
		exit;
	}else{
		include("session.php");
		
		include("conectar.php");					//incluimos nuestra clase con la conexión a la base de datos


		$smarty = new Smarty();						//creamos un objeto de tipo smarty para acceder a todas sus funciones
		
		$funciones = new funciones();				//creamos un objeto de nuestra clase funciones
		$funciones->conectarB();					//invocamos la funcion conectar
		//mysql_connect("localhost", "root", "") or die ("We couldn't connect!");
		//mysql_select_db("usuarios");


		//pagination
		$per_page = 6;	
		$pages_query = mysql_query("select count('id') from usuarios");
		$pages = ceil(mysql_result($pages_query, 0) / $per_page);
		$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
		$start = ($page - 1) * $per_page;
		$query = mysql_query("select * from usuarios  LIMIT $start, $per_page");
		//pagination


		//smarty
		$i=0;
		while($col=mysql_fetch_array($query)){		//creamos un ciclo el cual guardara en un arreglo los datos extraidos de la base de datos
			$datos[$i]=array($col['id'],
							 $col['usuario'], 
							 $col['dato'],
							 $col['param'],
							 $col['nombre'],
							 $col['paterno']
				);									//se guardan los datos en un arreglo
			$i++;
		}


		$smarty->assign('datos',$datos);			// mandamos el arreglo datos a la plantilla
		$smarty->display('updateU.tpl');				// desplegamos la plantilla indicando su nombre


		//pagination
		$prev = $page - 1;
		$next = $page + 1;
		echo "<center>";
		if(!($page<=1)){
			echo "<a href='updateU.php?page=$prev'>Previo</a> ";	
		}
		if($pages>=1){
			for($x=1;$x<=$pages;$x++){
				//echo '<a href="?page='.$x.'">'.$x.'</a> ';
				echo ($x == $page) ? '<b><a href="?page='.$x.'">'.$x.'</a></b> ' : '<a href="?page='.$x.'">'.$x.'</a> ';
			}
		}
		if(!($page>=$pages)){
			echo "<a href='updateU.php?page=$next'>Siguiente</a> ";
		}	
		echo "</center>";
		//pagination


		mysql_close();
	}
?>