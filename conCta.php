<?php
ob_start();
	include("conectar.php");
	
	$funciones = new funciones();	//creamos un objeto de nuestra clase funciones
	$funciones->conectarA();		//invocamos la funcion conectar

	//$query = mysql_query("SELECT * FROM cuentas a, movimientos b where a.rfc = b.comentario and a.rfc = 'merc2010707dp9'");
	$query = mysql_query("insert into cuentas (tipoMov, rfc) SELECT distinct mobile, comentario FROM movimientos where comentario not in (SELECT rfc FROM cuentas)");
		mysql_close();
	echo "Listo, revisar Editar cuenta";
ob_end_flush();	
?>				

