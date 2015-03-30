<?php
ob_start();
/*******
*SCIAG.*
*2013  *
*******/
	session_start();
	if(isset($_SESSION['name']) || isset($_COOKIE['testsite'])){
		include('session.php');
	}else{
		echo "Acceso no permitido #a2.";
		//ok
	}
ob_end_flush();
?>