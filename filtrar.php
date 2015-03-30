<?php
ob_start();
/*******
*SCIAG.*
*2013  *
*******/
	require_once('Smarty/libs/Smarty.class.php');

	session_start();
	
	if(!isset($_SESSION['name'])){
		echo "Acceso no permitido #f2.";
		exit;
	}else{
		include("session.php");
		include("conectar.php");		//incluimos nuestra clase con la conexión a la base de datos

		$smarty = new Smarty();			//creamos un objeto de tipo smarty para acceder a todas sus funciones
		
		$funciones = new funciones();	//creamos un objeto de nuestra clase funciones
		$funciones->conectarA();		//invocamos la funcion conectar
										//http://www.thesmartbuzz.com/tecnologia/como-mostrar-los-registros-de-una-bd-usando-php-y-smarty#codesyntax_2


										//mysql_connect("localhost", "root", "") or die ("We couldn't connect!");
										//mysql_select_db("datos");
		//datos para filtro
		$qryCampo01 = mysql_real_escape_string($_POST['campo01']);
		$qryCampo02 = mysql_real_escape_string($_POST['campo02']);
		$qryCampo03 = mysql_real_escape_string($_POST['campo03']);
		$qryCampo04 = mysql_real_escape_string($_POST['campo04']);
		$qryCampo05 = mysql_real_escape_string($_POST['campo05']);
		$jerarquia = mysql_real_escape_string($_POST['jerarquia']);
		
		//pagination
		$per_page = 6000;	
		$pages_query = mysql_query("select count('id') from movimientos");
		$pages = ceil(mysql_result($pages_query, 0) / $per_page);
		$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
		$start = ($page - 1) * $per_page;

		//Prepara query
		$query = "id > 0 ";	//utilizar el usuario para acotar las consultas
		if ($qryCampo01){$query .= " and " . "ename like '%$qryCampo01%'";}
		if ($qryCampo02){$query .= " and " . "uploading like '%$qryCampo02%'";}
		if ($qryCampo03){$query .= " and " . "phone like '%$qryCampo03%'";}
		if ($qryCampo04){$query .= " and " . "mobile like '%$qryCampo04%'";}
		if ($qryCampo05){$query .= " and " . "comentario like '%$qryCampo05%'";}


		$query = mysql_query("Select * from movimientos where " . $query . " order by id " . $jerarquia ." LIMIT $start, $per_page");		
		$numrows = mysql_num_rows($query);


		if($numrows>0){
			//smarty
			$i=0;
			while($col=mysql_fetch_array($query)){		//creamos un ciclo el cual guardara en un arreglo los datos extraidos de la base de datos
				$datos[$i]=array($col['id'],
								 $col['ename'], 
								 $col['uploading'],
								 $col['phone'],
								 $col['mobile'],
								 $col['designation'],
								 $col['department'],
								 $col['transporte'],
								 $col['po'],
								 $col['inv'],
								 $col['modifico'],
								 $col['comentario'],
								 $col['orden'],
								 $col['nPedido'],
								 $col['fechaPo'],
								 $col['guia']
					);									//se guardan los datos en un arreglo
				$i++;
			}


			$smarty->assign('datos',$datos);			// mandamos el arreglo datos a la plantilla
			$smarty->display('filtar.tpl');				// desplegamos la plantilla indicando su nombre
		mysql_close();
		}else{
			echo $numrows." Registros";
		}
	}
ob_end_flush();
?>