<?php
ob_start();
/*******
*SCIAG.*
*2013  *
*******/
	session_start();
	
	if(!isset($_SESSION['name'])){
		echo "Acceso no permitido #i1.";
		exit;
	}else{
		include("session.php");

		include("conectar.php");		//incluimos nuestra clase con la conexión a la base de datos

		$funciones = new funciones();	//creamos un objeto de nuestra clase funciones
		$funciones->conectarB();		//invocamos la funcion conectar

		$name = mysql_real_escape_string($_POST['name']);
		$nombre = mysql_real_escape_string($_POST['nombre']);
		$aPaterno = mysql_real_escape_string($_POST['aPaterno']);
		$aMaterno = mysql_real_escape_string($_POST['aMaterno']);
		$password = mysql_real_escape_string($_POST['password']);
		$jerarquia = mysql_real_escape_string($_POST['jerarquia']);
		if($name && $password){
			if(strlen($password)>3){
				//mysql_connect("localhost", "root", "") or die ("We couldn't connect!");
				//mysql_select_db("usuarios");
				$username = mysql_query("select usuario from usuarios where usuario = '$name'");	//confirm exist only one
				$count = mysql_num_rows($username); //confirm exist only one
				if($count!=0){	//confirm exist only one
					//include("links.php"); //confirm exist only one
					//die("ERROR: Duplicates are not allowed!"); //confirm exist only one
					echo "Usuario ya existe!";
				}else{
					$passwordmd5 = md5($password);
					mysql_query("insert into usuarios (usuario,nombre,paterno,materno,password,dato,param) values ('$name','$nombre','$aPaterno','$aMaterno','$passwordmd5','0000','$jerarquia')");
					$registered = mysql_affected_rows();
					mysql_close();
					echo "Listo, el usuario se ha registrado!<br />Estado: Filas a&ntilde;adidas: ".$registered.".";
				}	
			}else{
				echo "Password entre 4 y 8 caract&eacute;res.";
			}
		}else{
			echo "Advertencia en el MENU AGREGAR USUARIO:<br />Por favor, agregue el usuario y llene los campos vacios.<br />Utilice la tecla regresar para continuar.";
		}
	}
ob_end_flush();
?>