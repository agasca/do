<?php /* Smarty version Smarty-3.1.15, created on 2014-12-24 13:20:41
         compiled from "./templates/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1344306892549b1209bc8608-77795786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd18d73fcc59c370c420dd71ca2742ec1bae7ef4b' => 
    array (
      0 => './templates/update.tpl',
      1 => 1385678182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1344306892549b1209bc8608-77795786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    't_datos_usuarios' => 0,
    'tabla' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_549b1209d80550_66899277',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549b1209d80550_66899277')) {function content_549b1209d80550_66899277($_smarty_tpl) {?><h3>Actividades registradas:</h3><br/>
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
	<?php  $_smarty_tpl->tpl_vars['tabla'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tabla']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['t_datos_usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['lista']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['tabla']->key => $_smarty_tpl->tpl_vars['tabla']->value) {
$_smarty_tpl->tpl_vars['tabla']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['tabla']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['lista']['iteration']++;
?>
	<tr>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['lista']['iteration']%2==0) {?>
			<td style="background:#E0ECB0;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo00'];?>
</td>
			<td style="background:#E0ECB0;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo01'];?>
</td>
			<td style="background:#E0ECB0;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo02'];?>
</td>
			<td style="background:#E0ECB0;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo03'];?>
</td>	
			<td style="background:#E0ECB0;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo04'];?>
</td>
			<td style="background:#E0ECB0;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo05'];?>
</td>
			<td style="background:#E0ECB0;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo06'];?>
</td>
			<td style="background:#E0ECB0;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo08'];?>
</td>	
			<td style="background:#E0ECB0;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo09'];?>
</td>
			<td style="background:#E0ECB0;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo10'];?>
</td>
			<td style="background:#E0ECB0;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo11'];?>
</td>
			<td style="background:#E0ECB0;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo12'];?>
</td>
			<td style="background:#E0ECB0;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo13'];?>
</td>
			<td style="background:#E0ECB0;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo07'];?>
</td>
			<td style="background:#E0ECB0;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo14'];?>
</td>
			<td style="background:#E0ECB0;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo15'];?>
</td>
			<td style="background:#E0ECB0;"></td>
			<td style="background:#E0ECB0;">N/A&nbsp;</td>
			<td style="background:#E0ECB0;">N/A&nbsp;</td>
		<?php } else { ?>
			
			<td style="background:#AFC1EB;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo00'];?>
</td>
			<td style="background:#AFC1EB;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo01'];?>
</td>
			<td style="background:#AFC1EB;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo02'];?>
</td>
			<td style="background:#AFC1EB;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo03'];?>
</td>	
			<td style="background:#AFC1EB;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo04'];?>
</td>
			<td style="background:#AFC1EB;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo05'];?>
</td>
			<td style="background:#AFC1EB;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo06'];?>
</td>
			<td style="background:#AFC1EB;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo08'];?>
</td>
			<td style="background:#AFC1EB;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo09'];?>
</td>
			<td style="background:#AFC1EB;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo10'];?>
</td>
			<td style="background:#AFC1EB;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo11'];?>
</td>
			<td style="background:#AFC1EB;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo12'];?>
</td>	
			<td style="background:#AFC1EB;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo13'];?>
</td>
			<td style="background:#AFC1EB;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo07'];?>
</td>
			<td style="background:#AFC1EB;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo14'];?>
</td>
			<td style="background:#AFC1EB;"><?php echo $_smarty_tpl->tpl_vars['tabla']->value['t_campo15'];?>
</td>
			<td style="background:#AFC1EB;"></td>
			<td style="background:#AFC1EB;">N-A&nbsp;</td>
			<td style="background:#AFC1EB;">N-A&nbsp;</td>		
		<?php }?>	
	</tr>
	<?php } ?>
</table ><?php }} ?>
