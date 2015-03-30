<h3>Actividades filtradas:</h3><p>
<div id='div2'>
<table />
	<tr>
		<td align="center" bgcolor="#7D9EC0"><font face="verdana" size="1"
		color="#FFFFFF"><b>ID</b></font></td>
		<td bgcolor="#7D9EC0" align="center"><font face="verdana" size="1"
		color="#FFFFFF"><b>Folio</b></font></td>
		<td bgcolor="#7D9EC0" align="center"><font face="verdana" size="1"
		color="#FFFFFF"><b>.</b></font></td>
		<td bgcolor="#7D9EC0" align="center"><font face="verdana" size="1"
		color="#FFFFFF"><b>Fecha de captura</b></font></td>
		<td bgcolor="#7D9EC0" align="center"><font face="verdana" size="1"
		color="#FFFFFF"><b>(I)ngreso / (E)greso </b></font></td>
		<td bgcolor="#7D9EC0" align="center"><font face="verdana" size="1"
		color="#FFFFFF"><b>Usuario</b></font></td>
		<td bgcolor="#7D9EC0" align="center"><font face="verdana" size="1"
		color="#FFFFFF"><b>Razon Social </b></font></td>
		<td bgcolor="#7D9EC0" align="center"><font face="verdana" size="1"
		color="#FFFFFF"><b>Numero factura</b></font></td>
		<td bgcolor="#7D9EC0" align="center"><font face="verdana" size="1"
		color="#FFFFFF"><b>Fecha expedici&oacute;n</b></font></td>
		<td bgcolor="#7D9EC0" align="center"><font face="verdana" size="1"
		color="#FFFFFF"><b>Fecha cobro </b></font></td>
		<td bgcolor="#7D9EC0" align="center"><font face="verdana" size="1"
		color="#FFFFFF"><b>RFC</b></font></td>
		<td bgcolor="#7D9EC0" align="center"><font face="verdana" size="1"
		color="#FFFFFF"><b>Importe</b></font></td>
		<td bgcolor="#7D9EC0" align="center"><font face="verdana" size="1"
		color="#FFFFFF"><b>Tipo IVA </b></font></td>
		<td bgcolor="#7D9EC0" align="center"><font face="verdana" size="1"
		color="#FFFFFF"><b>I V A</b></font></td>
		<td bgcolor="#7D9EC0" align="center"><font face="verdana" size="1"
		color="#FFFFFF"><b>Retencion IVA </b></font></td>
		<td bgcolor="#7D9EC0" align="center"><font face="verdana" size="1"
		color="#FFFFFF"><b>Retencion ISR </b></font></td>
		<td bgcolor="#7D9EC0" align="center"><font face="verdana" size="1"
		color="#FFFFFF"><b>Tipo de deducci&oacute;n</b></font></td>
		<td bgcolor="#7D9EC0" align="center"><font face="verdana" size="1"
		color="#FFFFFF"><b> Observacion B</b></font></td>
		<td bgcolor="#7D9EC0" align="center"><font face="verdana" size="1"
		color="#FFFFFF"><b>Dato encriptado&nbsp;</b></font></td>
	</tr></div><!---end of div2-->


   {* se utiliza el ciclo foreach para imprimir el contenido de nuestro arreglo datos
      pasandolo como valor a la variable from *}

   {foreach name=outer from=$datos key=k item=dato}
      <tr>
		<td>{$dato[0]}</td>
		<td>{$dato[1]}</td>
		<td>&nbsp;</td>
		<td>{$dato[3]}</td>
		<td>{$dato[4]}</td>
		<td>{$dato[5]}</td>
		<td>{$dato[6]}</td>
		<td>{$dato[8]}</td>
		<td>{$dato[9]}</td>
		<td>{$dato[10]}</td>
		<td>{$dato[11]}</td>
		<td>{$dato[12]}</td>
		<td>{$dato[13]}</td>
		<td>{$dato[14]}</td>
		<td>{$dato[15]}</td>
		<td>{$dato[7]}</td>
		<td>&nbsp;</td>
		<td>N/A&nbsp;</td>
		<td>N/A&nbsp;</td>
	</tr>
      </tr>
   {/foreach}
</table>