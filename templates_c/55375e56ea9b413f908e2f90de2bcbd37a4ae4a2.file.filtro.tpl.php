<?php /* Smarty version Smarty-3.1.15, created on 2014-12-24 13:20:58
         compiled from "./templates/filtro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169067379549b121a4fee00-28098608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55375e56ea9b413f908e2f90de2bcbd37a4ae4a2' => 
    array (
      0 => './templates/filtro.tpl',
      1 => 1385678181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169067379549b121a4fee00-28098608',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_549b121a590e95_39102151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549b121a590e95_39102151')) {function content_549b121a590e95_39102151($_smarty_tpl) {?>
		<html>
		<head>
			<title>Welcome</title>
			<script type='text/javascript'>
				function register(){
					var x = new Array();
					x[0] = document.getElementById('campo01').value;
					x[1] = document.getElementById('campo02').value;
					x[2] = document.getElementById('campo03').value;
					x[3] = document.getElementById('campo04').value;
					x[4] = document.getElementById('campo05').value;

					//Mensaje de error
					var h = new Array();
					h[0] = "<span style='color:red'>&#9746; Sin Filtro</span>";
					h[1] = "<span style='color:red'>&#9746; Sin Filtro</span>";
					h[2] = "<span style='color:red'>&#9746; Sin Filtro</span>";
					h[3] = "<span style='color:red'>&#9746; Sin Filtro</span>";
					h[4] = "<span style='color:red'>&#9746; Sin Filtro</span>";
					
					//checa capturados y no
					var divs = new Array('mcampo01', 'mcampo02', 'mcampo03', 'mcampo04' ,'mcampo05');
					for(i in x){
						var error = h[i];
						var div = divs[i];
						if(x[i]==''){
							document.getElementById(div).innerHTML = error;
						}else{
							document.getElementById(div).innerHTML = '';
						}
					}
				}
			</script>
		</head>
		<body>
			<h3>Buscador</h3>
			<form ENCTYPE='multipart/form-data' method='post' action='filtrar.php' />
				<div id='div3'>
				<table />
					<tr>
					  <td >Folio </td>
					  <td ><input type='text' name='campo01' maxlength='30' id='campo01' onKeyUp='register()' />&nbsp;+</td><td><div id='mcampo01'></div></td></tr>
					<tr>
					  <td >Campo 2 </td>
					  <td ><input type='text' name='campo02' maxlength='30' id='campo02' onKeyUp='register()' />&nbsp;+</td><td><div id='mcampo02'></div></td></tr>
					<tr>
					  <td >Fecha transaccion </td>
					  <td ><input type='text' name='campo03' maxlength='30' id='campo03' onKeyUp='register()' />&nbsp;+</td><td><div id='mcampo03'></div></td></tr>
					<tr>
					  <td >Tipo de Actividad </td>
					  <td ><input type='text' name='campo04' maxlength='30' id='campo04' onKeyUp='register()' />&nbsp;+</td><td><div id='mcampo04'></div></td></tr>			
					<tr>
						<td >RFC</td>
						<td ><input type='text' name='campo05' maxlength='8' id='campo05' onKeyUp='register()' />&nbsp;+</td><td><div id='mcampo05'></div></td></tr>
					<tr>
						<td >Modo de despliegue</td>
						<td ><select name='jerarquia'>
						  <option value='asc'>Ascendente</option>
						  <option value='desc'>Descendente</option>
							</select>
						</td>
						</td>
					</tr>			
				</table>
				</div><!---end of div-->
				<center><input type='submit' name='submit' value='Filtrar' style ='border: 1px solid #006; background: #9cf;'/></center>
			</form>
		</body>
		</html><?php }} ?>
