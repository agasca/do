<?php
ob_start();
/*******
*SCIAG.*
*2013  *
*******/
	require_once('Smarty/libs/Smarty.class.php');

	session_start();
	
	if(!isset($_SESSION['name'])){
		echo "Acceso no permitido #v1.";
		exit;
	}else{
		include("session.php");
		
		include('DB.mysql.php');
		
		$smart = new Smarty();
		$db = new DB_Sql();			
		
		//pagination
		$per_page = 6;	

		//execute a mysql query to retrieve count of total users in table
		//$pages_query = mysql_query("select count('id') from movimientos");
		if (($_SESSION['param'])=='m'){
			$query = "select * from movimientos";
		}else{
			$filtrarU = $_SESSION['name'];
			$query = "select * from movimientos WHERE designation = '$filtrarU'";
		}
		$db->query($query);
		$db->num_rows();
		$pages_query = $db->num_rows();
		//echo $pages_query;


		//get total number of pages to be shown from  total result
		$pages = ceil($pages_query/$per_page);
		//get current page from URL ,if not present set it to 1
		$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
		//calculate actual start page with respect to Mysql 
		$start = ($page - 1) * $per_page;
		

		if (($_SESSION['param'])=='m'){
			$query = "select * from movimientos LIMIT $start, $per_page";
			
		}else{
			$query = "select * from movimientos WHERE designation = '$filtrarU' LIMIT $start, $per_page";
			
		}

		//ini.smarty
		//$db=new DB_Sql();													//instanciamos el objeto
		$db->query($query);												//ejecuta la consulta con el metodo query.
			if($db->num_rows()>0){										//si hay algun resultado pasamos a recorrer el array
				while($db->next_record()){								//mientras que recorre el array, como se ve es mucho mas simple que el fetch
					//echo $db->f('ename');								//mostrar el dato correspondiente al campo llamado titulo gracias al metodo f
					$id=$db->f('id');									//sacamos el valor id que será único y él será el indice de un array con la noticia correspondiente
					/*Creamos un array que las claves serán los nombres de los campos y los valores serán los correspondientes a los diferentes ids*/
					$datos_usuarios[$id]= array(
												't_campo00'=>$db->f('id'),
												't_campo01'=>$db->f('ename'),
												't_campo02'=>$db->f('uploading'),
												't_campo03'=>$db->f('phone'),
												't_campo04'=>$db->f('mobile'),
												't_campo05'=>$db->f('designation'),
												't_campo06'=>$db->f('department'),
												't_campo07'=>$db->f('transporte'),
												't_campo08'=>$db->f('po'),
												't_campo09'=>$db->f('inv'),
												't_campo10'=>$db->f('modifico'),
												't_campo11'=>$db->f('comentario'),
												't_campo12'=>$db->f('orden'),
												't_campo13'=>$db->f('nPedido'),
												't_campo14'=>$db->f('fechaPo'),
												't_campo15'=>$db->f('guia')
												);
				}
				//print_r($datos_usuarios);
			}		
			//fin.smarty		
		$smart->assign('t_datos_usuarios',$datos_usuarios);
		$smart->display("update.tpl");	

		
		//pagination
		//$result = mysql_query("select * from users");	CHG00
		
		//while($row=mysql_fetch_array($result)){	//CHG00
/*		while($row=mysql_fetch_assoc($query)){	//pagination
			$id=$row['id'];
			$campo01=$row['ename'];
			$campo02=$row['uploading'];
			$campo03=$row['phone'];			
			$campo04=$row['mobile'];
			$campo05=$row[''];
			$campo06=$row[''];
			$campo07=$row[''];	//IVA
			$campo08=$row[''];
			$campo09=$row[''];
			$campo10=$row[''];
			$campo11=$row[''];
			$campo12=$row[''];
			$campo13=$row[''];
			$campo14=$row[''];
			$campo15=$row[''];
			$campo16=$row[''];
			$campo17=$row[''];
			/*
			
			
			$campo18=$row['comentarioLog'];
			$campo19=$row['numSalida'];
			$campo20=$row['fechaCapt'];
			$campo21=$row['tAct'];
			$campo22=$row['logComentario'];
			$campo23=$row['congNombre'];
			$campo24=$row['congLugar'];
			*/
/*			if($campo04=='I'){
				echo $campo07;
			}else{
				echo $campo16;
			};
		}
*/
		//pagination
		$prev = $page - 1;
		$next = $page + 1;
		echo "<center>";
		if(!($page<=1)){
			echo "<a href='update.php?page=$prev'>Previo</a> ";	
		}
		if($pages>=1){
			for($x=1;$x<=$pages;$x++){
				//echo '<a href="?page='.$x.'">'.$x.'</a> ';
				echo ($x == $page) ? '<b><a href="?page='.$x.'">'.$x.'</a></b> ' : '<a href="?page='.$x.'">'.$x.'</a> ';
			}
		}
		if(!($page>=$pages)){
			echo "<a href='update.php?page=$next'>Siguiente</a> ";
		}	
		echo "</center>";
		//pagination
	}
ob_end_flush();
?>