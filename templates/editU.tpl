<html>
	<head>
		<title></title>
	</head>
	<body>
		Usuario: {$smarty.request.names}
		<form ENCTYPE='multipart/form-data' method='POST' action='change.php'>
			<table>
				<tr><td ># del registro: </td><td>{$smarty.request.ids}</td></tr>
				<tr><td >Par&aacute;metro: </td><td><input type='text' name='newemail' value={$smarty.request.emails}> </td></tr>
				<tr><td >Nueva Cuenta Subcuenta: </td><td><input type='text' name='newpassword' value={$smarty.request.datos}> </td></tr>
			</table>
			<input type='submit' name='submit' value='Guardar y actualizar' />
			<input type='hidden' name='id' value={$smarty.request.ids}>
		</form>
	</body>
</html>