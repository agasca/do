<?php
ob_start();
/*******
*SCIAG.*
*2013  *
*******/
	require_once('Smarty/libs/Smarty.class.php');

	include("conectar.php");		//incluimos nuestra clase con la conexión a la base de datos
	
session_start();

	$funciones = new funciones();	//creamos un objeto de nuestra clase funciones
	$funciones->conectarB();		//invocamos la funcion conectar

	$smart = new Smarty();
	$smart->display("login.tpl");
	
if($_POST){
	$_SESSION['name'] = mysql_real_escape_string($_POST['name']);
	$_SESSION['password'] = mysql_real_escape_string(md5($_POST['password']));	
	if($_SESSION['name'] && $_SESSION['password']){
			//mysql_connect("localhost", "root", "") or die ("We couldn't connect!");
			//mysql_select_db("usuarios");
		$query = mysql_query("select * from usuarios where usuario = '".$_SESSION['name']."'");
		$numrows = mysql_num_rows($query);
		if($numrows!=0){
			while($row = mysql_fetch_assoc($query)){
				$dbname = $row['usuario'];
				$dbpassword = $row['password'];
				$_SESSION['usuario'] = $row['nombre'];
				$_SESSION['param'] = $row['param'];
			}
			if($_SESSION['name']==$dbname){
				if($_SESSION['password']==$dbpassword){
					//echo "Welcome.";
					//header("location: users.php");	//session
					if(($_POST['remember']) == 'on'){
						$expire = time() + 86400;	//24 hrs
						setcookie('testsite', $_POST['name'], $expire);	//create cookie with the user name
					}
						header("location: enter.php");	
				}else{
					echo "Confirme password.";
				}
			}else{
				echo "Confirme usuario";
			}
		}else{
			echo "Usuario no registrado.";
		}
	mysql_close();
		}else{
			echo "Por favor registrar:<br/>Usuario y Password.";
		}
}else{	
	echo "Acceso no permitido #a1.";
	exit;
}
ob_end_flush();
?>