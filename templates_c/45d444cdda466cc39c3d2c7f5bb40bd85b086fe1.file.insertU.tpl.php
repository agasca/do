<?php /* Smarty version Smarty-3.1.15, created on 2014-10-23 23:49:29
         compiled from "./templates/insertU.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14551960635449da592febf9-28963542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45d444cdda466cc39c3d2c7f5bb40bd85b086fe1' => 
    array (
      0 => './templates/insertU.tpl',
      1 => 1385678182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14551960635449da592febf9-28963542',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5449da593cf294_97666232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5449da593cf294_97666232')) {function content_5449da593cf294_97666232($_smarty_tpl) {?><script type='text/javascript'>
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
		document.onmousedown=click; document.oncontextmenu=new Function('return false');  
	}
	//fin.Incluir			-----------
</script><?php }} ?>
