<?php
ob_start();
/*******
*SCIAG.*
*2013  *
*******/
	session_start();
	
	if (isset($_POST['submit'])) {
		include("session.php");

		include("conectar.php");		//incluimos nuestra clase con la conexión a la base de datos

		$funciones = new funciones();	//creamos un objeto de nuestra clase funciones
		$funciones->conectarA();		//invocamos la funcion conectar


		$id = $_REQUEST['id'];
		$nuevoDato01 = mysql_real_escape_string($_REQUEST['newData01']);
		$nuevoDato02 = mysql_real_escape_string($_REQUEST['newData02']);
		$nuevoDato03 = mysql_real_escape_string($_REQUEST['newData03']);
		if ($nuevoDato01 && $nuevoDato02 && $nuevoDato03){
			//mysql_connect("localhost", "root", "") or die("problem with connection...");
			//mysql_select_db("usuarios");
			mysql_query("UPDATE cuentas SET ctaSubCta='$nuevoDato01', descripcionCtaSubCta='$nuevoDato02', tipoMov='$nuevoDato03' WHERE id='$id'");
			echo "Datos procesados.";
		}else{
			echo "Por favor llene los datos del formulario!";
		}
	}else {
		echo "Access not allowed!";
	}
ob_end_flush();
?>