<html>
	<head>
		<title></title>
	</head>
	<body>
		# del registro:	{$smarty.request.ids}, {$smarty.request.d02s}
		<form ENCTYPE='multipart/form-data' method='POST' action='changeC.php'>
			<table>
				<tr><td>RFC: </td><td>{$smarty.request.d03s}</td></tr>
				<tr><td>Cuenta sub cuenta: </td><td>                  <input type='text' name='newData01' value='{$smarty.request.d01s}'> </td></tr>
				<tr><td>Descripcion de la Cuenta sub cuenta: </td><td><input type='text' name='newData02' value='{$smarty.request.d02s}'> </td></tr>
				<tr><td>Tipo del movimiento de la cuenta: </td><td>   <input type='text' name='newData03' value='{$smarty.request.d04s}'> </td></tr>
			</table>
			<input type='submit' name='submit' value='Guardar y actualizar' />
			<input type='hidden' name='id' value='{$smarty.request.ids}'>
		</form>
	</body>
</html>