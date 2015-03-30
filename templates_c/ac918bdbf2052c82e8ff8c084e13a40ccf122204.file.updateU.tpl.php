<?php /* Smarty version Smarty-3.1.15, created on 2014-12-24 13:20:45
         compiled from "./templates/updateU.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1053038148549b120dd40474-92826735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac918bdbf2052c82e8ff8c084e13a40ccf122204' => 
    array (
      0 => './templates/updateU.tpl',
      1 => 1386105131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1053038148549b120dd40474-92826735',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_549b120dea5963_04757332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549b120dea5963_04757332')) {function content_549b120dea5963_04757332($_smarty_tpl) {?><h3>Choose an Id to edit:</h3><p>
<table width="90%" align=center border=2>
	<tr>
		<td width="10%" align=center bgcolor="#69B4ED">Id</td>
		<td width="10%" align=center bgcolor="#69B4ED">Usuario</td>
		<td width="10%" align=center bgcolor="#69B4ED">CuentaSubcuenta</td>
		<td width="4%" align=center bgcolor="#69B4ED">Param</td>
		<td width="15%" align=center bgcolor="#69B4ED">Raz&oacute;n social</td>
		<td width="30%" align=center bgcolor="#69B4ED">Direcci&oacute;n fiscal</td>
	</tr>


	<?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['dato']->key;
?>
	
		<tr>
			<td align=center><a href="editU.php?ids=<?php echo $_smarty_tpl->tpl_vars['dato']->value[0];?>
&names=<?php echo $_smarty_tpl->tpl_vars['dato']->value[1];?>
&emails=<?php echo $_smarty_tpl->tpl_vars['dato']->value[3];?>
&datos=<?php echo $_smarty_tpl->tpl_vars['dato']->value[2];?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value[0];?>
</a></td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value[1];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value[2];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value[3];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value[4];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value[5];?>
</td>
		</tr>
	<?php } ?>
</table><?php }} ?>
