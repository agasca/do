<h3>Choose an Id to edit:</h3><p>
<table width="90%" align=center border=2>
	<tr>
		<td width="10%" align=center bgcolor="#69B4ED">Id</td>
		<td width="10%" align=center bgcolor="#69B4ED">Usuario</td>
		<td width="10%" align=center bgcolor="#69B4ED">CuentaSubcuenta</td>
		<td width="4%" align=center bgcolor="#69B4ED">Param</td>
		<td width="15%" align=center bgcolor="#69B4ED">Raz&oacute;n social</td>
		<td width="30%" align=center bgcolor="#69B4ED">Direcci&oacute;n fiscal</td>
	</tr>


	{foreach name=outer from=$datos key=k item=dato}
	{* se utiliza el ciclo foreach para imprimir el contenido de nuestro arreglo datos pasandolo como valor a la variable from *}
		<tr>
			<td align=center><a href="editU.php?ids={$dato[0]}&names={$dato[1]}&emails={$dato[3]}&datos={$dato[2]}">{$dato[0]}</a></td>
			<td>{$dato[1]}</td>
			<td>{$dato[2]}</td>
			<td>{$dato[3]}</td>
			<td>{$dato[4]}</td>
			<td>{$dato[5]}</td>
		</tr>
	{/foreach}
</table>