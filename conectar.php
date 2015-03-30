<?php
ob_start();
/*******
*SCIAG.*
*2013  *
*******/
	class funciones {										//funcion para conectar a la Base de datos
		function conectarA(){								//abrimos la conexión a la base de datos indicando el hostname, usuario y contraseña
			$mysql_id=mysql_connect('Localhost','doasappl_root','mexico1');
			mysql_select_db('doasappl_datos',$mysql_id);				//indicamos el nombre de la base de datos
		}


		function conectarB(){								// abrimos la conexión a la base de datos indicando el hostname, usuario y contraseña
			$mysql_id=mysql_connect('Localhost','doasappl_root','mexico1');
			mysql_select_db('doasappl_usuarios',$mysql_id);			// indicamos el nombre de la base de datos
		}
	}
ob_end_flush();
?>