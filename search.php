<?php
ob_start();
/*******
*SCIAG.*
*2013  *
*******/ 
	//http://www.ingenieroweb.com.co/generando-archivos-pdf-con-smarty
	session_start(); 
	
	include("session.php");
?>
<html>
<head>
	<title>Search</title>
</head>
<body>
	<center>
		<form method="GET" action="search.php">
			<input type="text" name="search">
			<input type="submit" name="submit" value="Search database">
		</form>
	</center>
	<hr>
	<u>Results:</u>
</body>
</html>
<?php
	if(!isset($_SESSION['name'])){
		echo "Access denied.";
		exit;
	}else{
		if(isset($_REQUEST['submit'])){	//the buttom was click
			//mysql_connect("localhost", "root", "") or die ("We couldn't connect!");
			//mysql_select_db("datos");
			include("conectar.php");		//incluimos nuestra clase con la conexión a la base de datos

			$funciones = new funciones();	//creamos un objeto de nuestra clase funciones
			$funciones->conectarA();		//invocamos la funcion conectar
			

			$search = mysql_real_escape_string($_GET['search']);	
			$terms = explode(" ", $search);	//makes an Array with words delimited
			$query = "select * from movimientos where ";
			$i = 0;
			foreach ($terms as $each) {
				$i++;
				if($i==1){

					$query .= "ename like '%$each%' ";
				}else{
					$query .= "or ename like '%$each%' ";
				}
			}

			$query = mysql_query($query);
			$num = mysql_num_rows($query);

			if($num>0 && $search !=""){
				echo "$num record(s) found for $search!";
				echo "<br />&nbsp;";
				while($row = mysql_fetch_assoc($query)){
					$id = $row['id'];
					$name = $row['ename'];
					$email = $row['phone'];
					$password = $row['mobile'];
					echo "<h3>Name: $name (id: $id)</h3>
						dato1: $email<hr width='3%' align='left'>
						dato2: $password<hr width='3%' align='left'><br/>";
				}
				mysql_close();
			}else{
				echo "No results found";
			}	
		}else{
			echo "Please type any word";
		}
	}
ob_end_flush();
?>