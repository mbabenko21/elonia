<?php /* Smarty version Smarty-3.1-DEV, created on 2014-04-06 01:34:52
         compiled from "C:\xampp\www\elon.dev\views\template\site\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2615153408a54aba959-11940893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34df7daffd419aabeb225d5463dfb1b43b01f739' => 
    array (
      0 => 'C:\\xampp\\www\\elon.dev\\views\\template\\site\\login.tpl',
      1 => 1396740891,
      2 => 'file',
    ),
    '19be20604049cf5d1028fddf86f33958e2c60a8a' => 
    array (
      0 => 'C:\\xampp\\www\\elon.dev\\views\\template\\base.tpl',
      1 => 1396740060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2615153408a54aba959-11940893',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53408a550b71b9_35464149',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53408a550b71b9_35464149')) {function content_53408a550b71b9_35464149($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("views.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_ru.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html>
	<html>
		<head>
			<title><?php echo $_smarty_tpl->getConfigVariable('base_page_title');?>
</title>
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
						<h3><?php echo $_smarty_tpl->getConfigVariable('base_page_title');?>
</h3>
					</div>
				
				
	<center>
			<form action="login.php" method="POST">
				<fieldset data-role="controlgroup" style="width: 30%;">
					<input type="text" name="email" value="" placeholder="<?php echo $_smarty_tpl->getConfigVariable('e_mail');?>
">
					<input type="password" name="password" value="" placeholder="<?php echo $_smarty_tpl->getConfigVariable('password');?>
">
					<input type="checkbox" name="remember" id="checkbox-1a" value="1" checked/> 
					<label for="checkbox-1a"><?php echo $_smarty_tpl->getConfigVariable('remember_me');?>
</label>
					<input type="submit" value="<?php echo $_smarty_tpl->getConfigVariable('sign_in');?>
">
				</fieldset>
			</form>
			<a href="registration.php" class="page-30 ui-btn ui-btn-b" style="width: 30%;"><?php echo $_smarty_tpl->getConfigVariable('registration');?>
</a>
	</center>

				
					<div data-role="footer">
						<h3>&copy; Elonia team, 2014</h3>
					</div>
				
			</div>
		</body>
	</html><?php }} ?>
