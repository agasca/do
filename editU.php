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
		
		$smart = new Smarty();
		$smart->display("editU.tpl");
	}
?>