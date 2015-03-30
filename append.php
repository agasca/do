<?php
ob_start();
/*******
*SCIAG.*
*2013  *
*******/
	require_once('Smarty/libs/Smarty.class.php');
	
	session_start();
	
	if(!isset($_SESSION['name'])){
		echo ".Access denied #ap1.";
		exit;
	}else{
		include("session.php");
		//ini.agb
		$_SESSION['tipoActividad'] = null;		//mandatorio catalogo
		$_SESSION['nombre_1'] = null;					//Razon Social
		$_SESSION['nombreAlterno'] = null;		//folio
		$_SESSION['tipoCliente'] = null;			//fecha expedicion
		$_SESSION['empFactura'] = null;				//fecha cobor/pago
		$_SESSION['mRnMnR'] = null;						//RFC
		$_SESSION['nuevoMD'] = null;					//importe IVA default 0
		$_SESSION['medio'] = null;						//tipoIva ingreso
		$_SESSION['especialidad']  = null;		//Iva ret default 0
		$_SESSION['ciclo'] = null;						//Isr ret default 0
		$_SESSION['mostroI'] = null;					//total IVA ingreso default 0 valor 
		$_SESSION['otro'] = null;							//tipoIvaE egreso
		$_SESSION['comentarios'] = null;			//total IVA Egreso default 0 valor 
		$_SESSION['uVendidas'] = null;				//Isr ret egreso default 0
		$_SESSION['zfEdos'] = null;						//tipoD egreso
		//fin.agb			
		$smart = new Smarty();
		$smart->display("append.tpl");
		}
ob_end_flush();
?>