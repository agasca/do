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
		$smart->display("home.tpl");
}
$ip = $_SERVER['REMOTE_ADDR'];
print ('<center>'.$ip.'</center>');
ob_end_flush();
?>