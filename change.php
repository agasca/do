<?php
/*******
*SCIAG.*
*2013  *
*******/
	session_start();
	
	if (isset($_POST['submit'])) {
		include("session.php");

		include("conectar.php");		//incluimos nuestra clase con la conexión a la base de datos

		$funciones = new funciones();	//creamos un objeto de nuestra clase funciones
		$funciones->conectarB();		//invocamos la funcion conectar


		$id = $_REQUEST['id'];
		$newemail = mysql_real_escape_string($_REQUEST['newemail']);
		$newpassword = mysql_real_escape_string($_REQUEST['newpassword']);
		if ($newemail && $newpassword){
			//mysql_connect("localhost", "root", "") or die("problem with connection...");
			//mysql_select_db("usuarios");
			mysql_query("UPDATE usuarios SET param='$newemail', dato='$newpassword' WHERE id='$id'");
			echo "Datos procesados.";
		}else{
			echo "Por favor llene los datos del formulario!";
		}
	}else {
		echo "Access not allowed!";
	}
?>