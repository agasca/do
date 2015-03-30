<?php /* Smarty version Smarty-3.1.15, created on 2014-12-24 13:20:28
         compiled from "./templates/session.tpl" */ ?>
<?php /*%%SmartyHeaderCode:412409549b11fc1933e0-20598980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99c5884ed694d688141aaa474f7952b477042006' => 
    array (
      0 => './templates/session.tpl',
      1 => 1385678182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '412409549b11fc1933e0-20598980',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_549b11fc1e17e3_80745008',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549b11fc1e17e3_80745008')) {function content_549b11fc1e17e3_80745008($_smarty_tpl) {?><script type='text/javascript'>
	//ini.Incluir debajo	-----------
	// examines browser mouse click events
	function click(evt){
		// rationalise event syntax 
		var e=(evt)?evt :window.event;
		var message='Sitio protegido por pegoga.com';
		//  test for IE         
		if(typeof e.which=='undefined'){
			// right click event
			if(e.button==2){
				alert(message+' IE->2= '+e.button);    
				return false;
				// ---------                
			}
		}else{
			// for other browsers
			if(e.which==3){
				alert(message+' <3='+e.which); 
				e.preventDefault();
				e.stopPropagation();               
				return false;
				// ----------- 
			}
		}                  
	} 
	window.onload=function (){
		document.onmousedown=click; 
		document.oncontextmenu=new Function('return false');  
		expandir_formulario();
	}
	//fin.Incluir			-----------
</script><?php }} ?>
