<?php /* Smarty version Smarty-3.1-DEV, created on 2014-04-06 10:10:52
         compiled from "C:\xampp\www\elon.dev\views\template\site\reg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24532534108d129f630-99404287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c1ae109d56a0650ed51823571a970ff462973c8' => 
    array (
      0 => 'C:\\xampp\\www\\elon.dev\\views\\template\\site\\reg.tpl',
      1 => 1396771307,
      2 => 'file',
    ),
    '19be20604049cf5d1028fddf86f33958e2c60a8a' => 
    array (
      0 => 'C:\\xampp\\www\\elon.dev\\views\\template\\base.tpl',
      1 => 1396744284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24532534108d129f630-99404287',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_534108d18d24d1_15243682',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534108d18d24d1_15243682')) {function content_534108d18d24d1_15243682($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("views.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_ru.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Page Title</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('jquery_mobile_css_structure');?>
">
			<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('jquery_mobile_css_theme');?>
">
			<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('jquery_mobile_css_icons');?>
">
			<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('jquery_js');?>
"></script>
			<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('jquery_mobile_js');?>
"></script>
		</head>
		<body>
			<div data-role="page">
					
	<div data-role="header">	
		<h3><?php echo $_smarty_tpl->getConfigVariable('registration');?>
</h3>
	</div>	

				
	<center>
		<form action="registration.php" method="POST" style="width: 30%;">
			<input type="text" name="email" value="" placeholder="<?php echo $_smarty_tpl->getConfigVariable('e_mail');?>
">
			<input type="password" name="password" value="" placeholder="<?php echo $_smarty_tpl->getConfigVariable('password');?>
">
			<input type="password" name="password_c" value="" placeholder="<?php echo $_smarty_tpl->getConfigVariable('password_c');?>
">
			<input type="submit" value="<?php echo $_smarty_tpl->getConfigVariable('registration');?>
">
		</form>
		<a href="login.php" class="page-30 ui-btn ui-btn-b" style="width: 30%;"><?php echo $_smarty_tpl->getConfigVariable('into_index');?>
</a>
	</center>

				
					<div data-role="footer">
						<h3>&copy; Elonia team, 2014</h3>
					</div>
				
			</div>
		</body>
	</html><?php }} ?>
