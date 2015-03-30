<?php
ob_start();
/*******
*SCIAG.*
*2013  *
*******/
	//require_once('Smarty/libs/Smarty.class.php');
session_start();

if(!isset($_SESSION['name'])){
	echo "Acceso no permitido #af1.";
	exit;
}else{
	include("session.php");
		
		include('DB.mysql.php');

		//mysql_connect("localhost", "root", "") or die ("We couldn't connect!");
		//mysql_select_db("datos");		

		//$smart = new Smarty();
		$db = new DB_Sql();

	echo "#..";
	//$buttonName = $_POST['boton'];
	echo ".";
	if ( isset($_POST['txtCampo0'])  && !empty($_POST['txtCampo0']) ){
		$_SESSION['tipoActividad'] = $_POST['catalogo09']; //mandatorio
		$_SESSION['nombre_1'] = strtoupper(mysql_real_escape_string($_POST['txtCampo0']));		//Razon Social
		$_SESSION['nombreAlterno'] = mysql_real_escape_string($_POST['txtCampo1']);				//
		$_SESSION['tipoCliente'] = mysql_real_escape_string($_POST['fec01']);					//
		$_SESSION['empFactura'] = mysql_real_escape_string($_POST['fec02']);					//
		$_SESSION['mRnMnR'] = strtoupper(mysql_real_escape_string($_POST['txtCampo4']));		//ahora a quien factura
		$_SESSION['nuevoMD'] = mysql_real_escape_string($_POST['txtCampo5']);					//
		$_SESSION['medio'] = mysql_real_escape_string($_POST['tipoIva']);						//
		$_SESSION['especialidad'] = mysql_real_escape_string($_POST['txtCampo6']);				//
		$_SESSION['ciclo'] = mysql_real_escape_string($_POST['txtCampo7']);						//
		$_SESSION['mostroI'] = mysql_real_escape_string($_POST['txtCampo8']);					//Total IVA ingreso
		$_SESSION['otro'] = mysql_real_escape_string($_POST['tipoIvaE']);						//
		$_SESSION['comentarios'] = mysql_real_escape_string($_POST['txtCampo81']);				//Total IVA egreso
		//$_SESSION['uVendidas'] = mysql_real_escape_string($_POST['txtCampo9']);							//
		$_SESSION['zfEdos'] = mysql_real_escape_string($_POST['tipoD']);						//

		//ini.agb
		$_SESSION['capcha'] = $_POST['Variable'];
	
		$upLoading = 'X';
		
		$epoch = time(); 
		$dt = new DateTime("@$epoch");  // convert UNIX timestamp to PHP DateTime
		$a = $dt->format('Y-m-d');
		$weekNumber = date("W");
	
		$a01 = $_SESSION['name'].$_SESSION['capcha'];
		//$a	
		$a03 = $_SESSION['tipoActividad'];
		$a04 = $_SESSION['name'];
		$a05 = $_SESSION['nombre_1'];
		$a06 = $_SESSION['nombreAlterno'];
		$a07 = $_SESSION['tipoCliente'];	//fecha
		$a08 = $_SESSION['empFactura'];		//fecha
		$a09 = $_SESSION['mRnMnR'];
		$a10 = str_replace(',', '', $_SESSION['nuevoMD']);
		
		if($a03=='I'){
			$a11 = $_SESSION['medio'];
			$a12 = str_replace(',', '', $_SESSION['especialidad']);
			$a13 = str_replace(',', '', $_SESSION['ciclo']);		
			$a14 = str_replace(',', '', $_SESSION['mostroI']);
			$a15 = '';
		}else{
			$a11 = $_SESSION['otro'];
			$a12 = 0;
			//$a13 = str_replace(',', '', $_SESSION['uVendidas']);
			$a13 = 0;
			$a14 = str_replace(',', '', $_SESSION['comentarios']);
			$a15 = $_SESSION['zfEdos'];
		};
		
			//mysql_query("insert into movimientos (eName, phone, mobile, designation, department, po, inv, modifico, comentario, orden, nPedido, fechaPo, Guia,transporte,comentarioVts) values ('$a01'        ,'$a'          ,'$a03' , '$a04'       ,      '$a05' ,'$a06'      ,'$a07'  ,'$a08',  '$a09'  , $a10         , '$a11'   ,  $a12 ,$a13,$a14, '$a15')");
			$query = "insert into movimientos (eName, phone, mobile, designation, department, po, inv, modifico, comentario, orden, nPedido, fechaPo, Guia,transporte,comentarioVts) values ('$a01'        ,'$a'          ,'$a03' , '$a04'       ,      '$a05' ,'$a06'      ,'$a07'  ,'$a08',  '$a09'  , $a10         , '$a11'   ,  $a12 ,$a13,$a14, '$a15')";
			$db->query($query);		
		echo "<br /><span class='Estilo7'>1.- Esta venta se cierra automaticamente.<br />2.- Fecha de la transacci&oacute;n: " . $a . "<br />3.- Conserve # de  la transacci&oacute;n: </span>" . $_SESSION['name'] . $_SESSION['capcha'] . '<br />';
		echo "<span class='Estilo7'>5.- Utilice los filtros para confirmar su operaci&oacute;n.<br />6.-Para un nuevo registro, Clic en Men&uacute;.</span><br />"; 
		
			echo "<script type='text/javascript'>setTimeout('self.close()',3500);</script>";
		//fin.agb
	}else{
		echo "La Raz&oacute;n social es necesario";
	}
	mysql_close();
	echo ".e.";
}
ob_end_flush();
?>