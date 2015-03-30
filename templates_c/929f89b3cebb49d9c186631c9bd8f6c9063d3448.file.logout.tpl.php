<?php /* Smarty version Smarty-3.1.15, created on 2014-12-24 13:21:11
         compiled from "./templates/logout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1816552258549b12276f9125-45337165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '929f89b3cebb49d9c186631c9bd8f6c9063d3448' => 
    array (
      0 => './templates/logout.tpl',
      1 => 1385678182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1816552258549b12276f9125-45337165',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_549b1227759137_26704299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549b1227759137_26704299')) {function content_549b1227759137_26704299($_smarty_tpl) {?><script type='text/javascript'>
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
