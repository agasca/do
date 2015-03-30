
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<title>Welcome</title>
	<link rel='stylesheet' type='text/css' media='all' href='jsDatePick_ltr.min.css' />
	<script type='text/javascript' src='jsDatePick.min.1.3.js'></script>
	<script type='text/javascript' src='formexp.js'></script>
	<script type='text/javascript' src='js/fn.js'></script>	
</head>
<body >
	<div id='div4'>
	<form name='formulario' method='POST' action='appForm.php' id='myFo' target='_blank'>
		<table width='900' >
			<tr>
				<td>
					<select name='catalogo09' style='background:#7D9EC0; color:white' onChange='expandir_formulario()'>
						<option value=''>Tipo de Actividad</option>
						<option value='I'>Ingreso</option>
						<option value='E'>Egreso</option>
					</select>
				</td>
				<td><button type='button' id='boton1'>Limpiar datos</button></td>
				<td><div align='right'><span class='Estilo8'>Raz&oacute;n social o Nombre del Cliente </span></div></td>
				<td>&nbsp;</td>
				<td><input type='text' name='txtCampo0' size='40' maxlength='40' style='background:#7D9EC0; color:white;' id='txtCampo0' onKeyUp='register()' /></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td><div id='mtxtCampo0'></div></td>
			</tr>
		</table>
		
		<!-- Capa 0 -->
		<div id='capaexpansion0'>
		<table width='900' >
			<tr>
				<td width='270' height='26'><div >N&uacute;mero de Factura </div></td>
				<td width='5'>&nbsp;</td>
				<td width='173'><p >Fecha de Expedici&oacute;n</p></td>
				<td width='1'>&nbsp;</td>
				<td width='105'><div >Fecha de</div></td>
				<Td width='22'>
				<Td colspan='3'><div align='left'>RFC</div></TD>
			</tr>
			<tr>
				<td height='26' ><div >o Folio fiscal </div></td>
				<td>&nbsp;</td>
				<td valign='top'> <div >(Informativo)</div></td>
				<td>&nbsp;</td>
				<td valign='top'><div id='mtxtFecha'></div></td>
				<TD>&nbsp;</Td>          
				<Td colspan='3' valign='top'><div id='mtxtCampo4'></div></Td>
			</tr>
			<tr>
				<td height='26'><input type='text' name='txtCampo1' id='txtCampo1' size='5' maxlength='5' onKeyUp='register()' /></td>
				<td>&nbsp;</td>
				<td><input type='text' name ='fec01' size='10' maxlength='10' id='inputField' /></td>
				<td>&nbsp;</td>
				<td><input type='text' name ='fec02' size='10' maxlength='10' id='inputField1' /></td>
				<Td>&nbsp;</TD>
				<Td colspan='3'><input type='text' name='txtCampo4' id='txtCampo4' size='14' maxlength='14' onKeyUp='register()' onChange='rfc(this.value);' /></TD>
			</tr>
			<tr>
				<td height='26'  ><div id='mtxtCampo1'></div></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<Td>&nbsp;</TD>
				<Td colspan='2' valign='top'  ><div align='left'>Importe sin IVA</div></TD>
				<Td width='182'  >&nbsp;</TD>
			</tr>
			<tr>
				<td rowspan='6'  ></td>
				<td rowspan='6'  ></td>
				<td rowspan='6'  ></td>
				<td rowspan='6'  ></td>
				<td rowspan='6'  ></td>
				<Td height='26'  >&nbsp;</TD>
				<Td colspan='3'  ><input type='text' name='txtCampo5'  value='0.00' size='15' maxlength='15' onBlur='this.value=formatCurrency(this.value);' onkeypress='return justNumbers(event);' onKeyUp='register()' id='txtCampo5' /></TD>
			</tr>
			<tr>
				<Td height='26'  >&nbsp;</TD>
				<Td colspan='3'  ><div id='mtxtCampo5'></div></TD>
			</tr>
			<tr>
				<Td height='21'>&nbsp;</TD>
				<Td width='36' valign='top'> IVA</TD>
				<Td colspan='2' valign='top'><div id='mtxtTlIva'></div></TD>
			</tr>
			<tr>
				<td height='0' ></td>
				<td></td>
				<td width='66'></td>
				<td></td>
			</tr>
		</table>
		</div>
		<!-- Capa 0 -->
		
		
		<!-- Capa 01 anexo -->
		<div id='capaexpansion01'>
		<table width='900' >
			<tr>
				<td width='351' height='26' valign='top'></td>
				<td width='210'>
					<select name='tipoIva' style='background:#7D9EC0; color:white' onChange='activa()'>
						<option value=''>Indique tasa de IVA</option>
						<option value='16'>IVA al 16%</option>
						<option value='0'>IVA al 0%</option>
						<option value='Exento'>IVA Exento (Doctores)</option>
					</select>
				</td>
				<td width='17' >&nbsp;</td>
				<td width='292' valign='top'><input type='text' name='txtCampo8'  value='0.00' size='15' maxlength='15' onBlur='this.value=formatCurrency(this.value);' onkeypress='return justNumbers(event);' /></td>
			</tr>
			<tr>
				<td height='26'>&nbsp;</td>
				<td valign='top'>Indique s&iacute; le retuvieron impuestos</td>
				<td>&nbsp;</td>
				<td valign='top'>
					<input name='rb' type='radio' value='S' onChange='activa()'>Si
					<input name='rb' type='radio' value='N' onChange='activa()' checked='true'>No 
				</td>
			</tr>
		</table>
		</div>	  
		<!-- Capa 01 anexo -->
		
		
		<!-- Capa 011 anexo -->
		<div id='capaexpansion11'>
		<table width='900' >
			<tr>
				<td width='372' height='26'></td>
				<td width='196' valign='top'>IVA retenido al contribuyente</td>
				<td width='20'>&nbsp;</td>
				<td width='292' valign='top'><input type='text' name='txtCampo6' value='0.00' size='15' maxlength='15' onBlur='this.value=formatCurrency(this.value);' onkeypress='return justNumbers(event);' /></td>
			</tr>
			<tr>
				<td height='26'></td>
				<td valign='top'>ISR retenido al contribuyente</td>
				<td>&nbsp;</td>          
				<td valign='top'><input type='text' name='txtCampo7'  value='0.00' size='15' maxlength='15' onBlur='this.value=formatCurrency(this.value);' onkeypress='return justNumbers(event);' /></td>          
			</tr>
		</table>
		</div>  
		<!-- Capa 011 anexo-->
		
		
		<!-- Capa 02 anexo -->
		<div id='capaexpansion02'>
		<table width='900' >
			<tr>
				<td width='1' valign='top' ><!---->&nbsp;</td>
				<td width='1' valign='top' ><!---->&nbsp;</td>
				<td width='350' height='24' ></td>
				<td width='207' valign='top' >
					<select name='tipoIvaE' style='background:#7D9EC0; color:white' onChange='activa()'>
						<option value=''>Tipo IVA</option>
						<option value='16'>IVA al 16%</option>
						<option value='0'>IVA al 0%</option>
						<option value='Exento'>IVA Exento (Doctores)</option>
					</select>
				</td>
				<td width='17' >&nbsp;</td>
				<td width='292' ><input type='text' name='txtCampo81' value='0.00' size='15' maxlength='15' onBlur='this.value=formatCurrency(this.value);' onkeypress='return justNumbers(event);' /></td>
			</tr>
			<tr>
				<td valign='top' ><!---->&nbsp;</td>
				<td valign='top' ><!---->&nbsp;</td>
				<td height='24' ></td>
				<td valign='top' >
					<select name='tipoD' style='background:#7D9EC0; color:white' onChange='activa()'>
						<option value=''>Tipo de deducciones</option>
						<option value='H'>Honorarios</option>
						<option value='A'>Arrendamiento</option>
						<option value='F'>Fletes</option>
						<option value='C'>Celular y telefono</option>
						<option value='G'>Gasolina</option>
						<option value='P'>Primas por seguros</option>
						<option value='I'>Impuesto estatal pagado en el mes (RTP Doctores)</option>
						<option value='B'>Biaticos y gastos de viaje</option>
					</select>									</td>
				<td >&nbsp;</td>
				<td ><!---->&nbsp;</td>
				</tr>
		</table>
		</div>	  
		<!-- Capa 02 anexo-->
		
		
		<!-- Capa 1 -->
		<div id='capaexpansion1'>
		<table width='285' height='101' >
			<tr>
				<TD height='39' colspan='3' >&nbsp;</TD>
			</TR>
			<tr>
				<TD width='99' height='44' >Confirmar datos</TD>
				<TD width='20' ><input type='checkbox' name='checkbox' value='checkbox' onClick='activa();'></TD>
				<TD width='84' ><input name='boton' type='submit' id='boton' value='Guardar' onClick='DrawCaptcha();' style ='border: 1px solid #006; background: #9cf;'></TD>
			</TR>
		</table>
		</div>	
		<!-- Capa 1 -->
		
		
		<!-- Capa 2 -->
		<div id='capaexpansion2'>
		<center>
			<p >
			<span class='Estilo7'>Nota:<br />							
			<span class='Estilo8'>Utilice interprete IE 10+, Chrome o Firefox para visualizar este formulario</span>.<br />
			<span class='Estilo7'>Permita ventanas emergentes o pop-ups</span><br />							
			</p>
			<span class='Estilo7'>Registro requerido con fondo <span class='Estilo8'>azul</span>. Proporcione la mayor cantidad de datos para realizar correctamente el </span>
			<span class='Estilo8'>registro contable</span>.<br />
			<span class='Estilo7'>Durante el registro de los datos, el sitio <span class='Estilo8'>no realizar&aacute; c&aacute;lculos aritm&eacute;ticos</span> para evitar situaciones de redondeo.</span>
		</center>
		</div>
		<!-- Capa 2 -->
		
		
		<input type='hidden' name='Variable' >
	</form>
	</div><!---end of div2-->
</body>
</html>