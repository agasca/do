<h3>Choose an Id to edit:</h3><p>
<table width="90%" align=center border=2>
	<tr>
		<td width="10%" align=center bgcolor="#69B4ED">Id</td>
		<td width="10%" align=center bgcolor="#69B4ED">CtaSubCuenta</td>
		<td width="20%" align=center bgcolor="#69B4ED">Descripcion de la CSCta</td>
		<td width="10%" align=center bgcolor="#69B4ED">RFC</td>
		<td width="04%" align=center bgcolor="#69B4ED">Tipo de movimiento</td>
	</tr>


	{foreach name=outer from=$datos key=k item=dato}
	{* se utiliza el ciclo foreach para imprimir el contenido de nuestro arreglo datos pasandolo como valor a la variable from *}
		<tr>
			{if $smarty.foreach.outer.iteration%2==0}
				<td style="background:#E0ECB0;" align=center><a href="editC.php?ids={$dato[0]}&d01s={$dato[1]}&d02s={$dato[2]}&d03s={$dato[3]}&d04s={$dato[4]}">{$dato[0]}</a></td>
				<td style="background:#E0ECB0;">{$dato[1]}</td>
				<td style="background:#E0ECB0;">{$dato[2]}</td>
				<td style="background:#E0ECB0;">{$dato[3]}</td>
				<td style="background:#E0ECB0;">{$dato[4]}</td>
			{else}
				<td style="background:#AFC1EB;" align=center><a href="editC.php?ids={$dato[0]}&d01s={$dato[1]}&d02s={$dato[2]}&d03s={$dato[3]}&d04s={$dato[4]}">{$dato[0]}</a></td>
				<td style="background:#AFC1EB;">{$dato[1]}</td>
				<td style="background:#AFC1EB;">{$dato[2]}</td>
				<td style="background:#AFC1EB;">{$dato[3]}</td>
				<td style="background:#AFC1EB;">{$dato[4]}</td>
			{/if}			
		</tr>
	{/foreach}
</table>