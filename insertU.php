<?php
ob_start();
/*******
*SCIAG.*
*2013  *
*******/
	require_once('Smarty/libs/Smarty.class.php');

	if(isset($_COOKIE['testsite'])){
		header('Location: enter.php');
		}else{
		$smart = new Smarty();
		$smart->display("insertU.tpl");

		include("conectar.php");		//incluimos nuestra clase con la conexión a la base de datos

		$funciones = new funciones();	//creamos un objeto de nuestra clase funciones
		$funciones->conectarB();		//invocamos la funcion conectar

		
$name = mysql_real_escape_string($_POST['name']);
$email = mysql_real_escape_string($_POST['email']);
$password = mysql_real_escape_string($_POST['password']);
$cpassword = mysql_real_escape_string($_POST['cpassword']);
$razonSoc = mysql_real_escape_string($_POST['razonSoc']);
$dirFis = mysql_real_escape_string($_POST['dirFis']);
		
		if($name && $email && $password && $cpassword &&$razonSoc && $dirFis){
	if(preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
		if(strlen($password)>3){
			if ($password == $cpassword){
						//mysql_connect("localhost", "root", "") or die ("We couldn't connect!");
						//mysql_select_db("usuarios");
				$username = mysql_query("select usuario from usuarios where usuario = '$name'");	//confirm exist only one
				$count = mysql_num_rows($username); //confirm exist only one
				$remail = mysql_query("select email from usuarios where email = '$email'");
				$checkemail = mysql_num_rows($remail);
				if($checkemail!=0){
					echo "La cuenta de correo electr&oacute;nico ya existe";
				}else{
					if($count!=0){	//confirm exist only one
						echo "El RFC ya existe!";
					}else{
						$passwordmd5 = md5($password);
						mysql_query("insert into usuarios (usuario,email,password,nombre,paterno) values ('$name','$email','$passwordmd5','$razonSoc','$dirFis')");
						$registered = mysql_affected_rows();
mysql_close();
						echo "La cuenta ha sido agregada!<br/>Registros: ".$registered."<br/><a href='home.php'>Login?</a>";
					}
				}
			}else{
				echo "Clave secreta no coincide.";
			}
		}else{
			echo "Longitud de la clave secreta Password entre 4 y 8 caracteres.";
		}
	}else{
		echo "Por favor, digite una cuenta de correo electronico donde lo contactaremos";
	}
}else{
	echo "Presione ATRAS y llene los campos vacios.";
		}
}
ob_end_flush();
?>