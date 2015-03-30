<h3>Actividades registradas:</h3><br/>
<div id='div2'>
	<table >
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
	</tr>
	
</div>	
	{foreach name=lista from=$t_datos_usuarios key =k item=tabla}
	<tr>
		{if $smarty.foreach.lista.iteration%2==0}
			<td style="background:#E0ECB0;">{$tabla.t_campo00}</td>
			<td style="background:#E0ECB0;">{$tabla.t_campo01}</td>
			<td style="background:#E0ECB0;">{$tabla.t_campo02}</td>
			<td style="background:#E0ECB0;">{$tabla.t_campo03}</td>	
			<td style="background:#E0ECB0;">{$tabla.t_campo04}</td>
			<td style="background:#E0ECB0;">{$tabla.t_campo05}</td>
			<td style="background:#E0ECB0;">{$tabla.t_campo06}</td>
			<td style="background:#E0ECB0;">{$tabla.t_campo08}</td>	
			<td style="background:#E0ECB0;">{$tabla.t_campo09}</td>
			<td style="background:#E0ECB0;">{$tabla.t_campo10}</td>
			<td style="background:#E0ECB0;">{$tabla.t_campo11}</td>
			<td style="background:#E0ECB0;">{$tabla.t_campo12}</td>
			<td style="background:#E0ECB0;">{$tabla.t_campo13}</td>
			<td style="background:#E0ECB0;">{$tabla.t_campo07}</td>
			<td style="background:#E0ECB0;">{$tabla.t_campo14}</td>
			<td style="background:#E0ECB0;">{$tabla.t_campo15}</td>
			<td style="background:#E0ECB0;"></td>
			<td style="background:#E0ECB0;">N/A&nbsp;</td>
			<td style="background:#E0ECB0;">N/A&nbsp;</td>
		{else}
			
			<td style="background:#AFC1EB;">{$tabla.t_campo00}</td>
			<td style="background:#AFC1EB;">{$tabla.t_campo01}</td>
			<td style="background:#AFC1EB;">{$tabla.t_campo02}</td>
			<td style="background:#AFC1EB;">{$tabla.t_campo03}</td>	
			<td style="background:#AFC1EB;">{$tabla.t_campo04}</td>
			<td style="background:#AFC1EB;">{$tabla.t_campo05}</td>
			<td style="background:#AFC1EB;">{$tabla.t_campo06}</td>
			<td style="background:#AFC1EB;">{$tabla.t_campo08}</td>
			<td style="background:#AFC1EB;">{$tabla.t_campo09}</td>
			<td style="background:#AFC1EB;">{$tabla.t_campo10}</td>
			<td style="background:#AFC1EB;">{$tabla.t_campo11}</td>
			<td style="background:#AFC1EB;">{$tabla.t_campo12}</td>	
			<td style="background:#AFC1EB;">{$tabla.t_campo13}</td>
			<td style="background:#AFC1EB;">{$tabla.t_campo07}</td>
			<td style="background:#AFC1EB;">{$tabla.t_campo14}</td>
			<td style="background:#AFC1EB;">{$tabla.t_campo15}</td>
			<td style="background:#AFC1EB;"></td>
			<td style="background:#AFC1EB;">N-A&nbsp;</td>
			<td style="background:#AFC1EB;">N-A&nbsp;</td>		
		{/if}	
	</tr>
	{/foreach}
</table >