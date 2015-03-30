<?php
ob_start();
/*******
*SCIAG.*
*2013  *
*******/
	require_once('Smarty/libs/Smarty.class.php');
	
	session_start();

	$smart = new Smarty();
	$smart->display("logout.tpl");	
	
	$expire = time()-86400;
	if(!(isset($_SESSION['name']))){
		session_destroy();
		echo "Session has been destroyed.<br/>Please wait a moment #a30.";			
	}else{
		setcookie('testsite', $_SESSION['name'], $expire);
		session_destroy();
		echo "Session and Cookies are destroyed.<br/>Please wait a moment #a31.";			
		}
	header("Refresh: 2; url=home.php");
ob_end_flush();
?>