<?php
ob_start();
/*******
*SCIAG.*
*2013  *
*******/
	require_once('Smarty/libs/Smarty.class.php');

	session_start();
	
	if(!isset($_SESSION['name'])){
		echo "Acceso no permitido #f1.";
		exit;
	}else{
		include("session.php");
	
		$smart = new Smarty();
		$smart->display("filtro.tpl");
	}
ob_end_flush();
?>