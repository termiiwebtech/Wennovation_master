<?php /* Smarty version Smarty-3.1.19, created on 2017-02-09 22:20:45
         compiled from "/home/getmailout/public_html/wenno/admin/templates/default/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:927680626589cdd2dea3d37-72420208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f1cfc8e948172e4000d6be9a42b96927da2db0a' => 
    array (
      0 => '/home/getmailout/public_html/wenno/admin/templates/default/login.tpl',
      1 => 1486653918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '927680626589cdd2dea3d37-72420208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'img' => 0,
    'key' => 0,
    'value' => 0,
    'access_denied' => 0,
    'error_login' => 0,
    'empty_login' => 0,
    'code' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589cdd2e0b1418_85558099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589cdd2e0b1418_85558099')) {function content_589cdd2e0b1418_85558099($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ia_hooker')) include '/home/getmailout/public_html/wenno/includes/smarty/intelli_plugins/function.ia_hooker.php';
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
" dir="<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['direction'];?>
">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php echo iaSmarty::ia_print_title(array(),$_smarty_tpl);?>
</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="Subrion CMS &middot; <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['version'];?>
">
	<base href="<?php echo @constant('IA_ADMIN_URL');?>
">

	<!--[if lt IE 9]>
		<script src="../../../js/utils/shiv.js"></script>
		<script src="../../../js/utils/respond.min.js"></script>
	<![endif]-->

	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
favicon.png">
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
favicon.ico">

	<?php echo iaSmarty::ia_print_css(array('files'=>'bootstrap','order'=>99),$_smarty_tpl);?>

	<?php echo iaSmarty::ia_add_media(array('files'=>'jquery, subrion, js:admin/login','order'=>0),$_smarty_tpl);?>

	<?php echo iaSmarty::ia_print_js(array('files'=>'_IA_TPL_bootstrap.min'),$_smarty_tpl);?>


	<?php echo iaSmarty::ia_print_css(array('display'=>'on'),$_smarty_tpl);?>


	<?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array('order'=>0)); $_block_repeat=true; echo iaSmarty::ia_add_js(array('order'=>0), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['customConfig']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			intelli.config.<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 = '<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
';
		<?php } ?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::ia_add_js(array('order'=>0), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</head>
<body id="page-login" >

    
				<center><a href="http://www.termii.com/" class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
logo-symbol-150.png" style="margin-top: 5%;" alt="Termii CMS" title="Termii CMS"/></a></center>
	<div class="login-block effect-1">

				
		<div class="login-block-content">
			<div class="login-body">
				<!-- <p class="help-block"><?php echo iaSmarty::lang(array('key'=>'login_to_text'),$_smarty_tpl);?>
</p> -->
				<?php if (isset($_smarty_tpl->tpl_vars['access_denied']->value)&&$_smarty_tpl->tpl_vars['access_denied']->value) {?>
					<div class="alert alert-danger"><?php echo iaSmarty::lang(array('key'=>'access_denied'),$_smarty_tpl);?>
</div>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['error_login']->value)&&$_smarty_tpl->tpl_vars['error_login']->value) {?>
					<div class="alert alert-danger"><?php echo iaSmarty::lang(array('key'=>'error_login'),$_smarty_tpl);?>
</div>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['empty_login']->value)&&$_smarty_tpl->tpl_vars['empty_login']->value) {?>
					<div class="alert alert-danger"><?php echo iaSmarty::lang(array('key'=>'empty_login'),$_smarty_tpl);?>
</div>
				<?php }?>

				<form method="post" class="sap-form">
					<?php echo iaSmarty::preventCsrf(array(),$_smarty_tpl);?>

					<p>
						<input type="text" id="username" name="username" tabindex="1" value="<?php if (isset($_POST['username'])) {?><?php echo htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" autofocus placeholder="<?php echo iaSmarty::lang(array('key'=>'login'),$_smarty_tpl);?>
">
					</p>
					<p>
						<input type="password" id="dummy_password" name="password" tabindex="2" placeholder="<?php echo iaSmarty::lang(array('key'=>'password'),$_smarty_tpl);?>
">
					</p>
					<div class="checkbox">
						<label><input type="checkbox" name="remember"<?php if (isset($_POST['remember'])) {?> checked<?php }?>> <?php echo iaSmarty::lang(array('key'=>'remember_me'),$_smarty_tpl);?>
</label>
					</div>
					<?php if (count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
					<p>
						<select name="_lang" id="_lang">
							<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['code']->value==@constant('IA_LANGUAGE')) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</option>
							<?php } ?>
						</select>
					</p>
					<?php }?>
					<input type="submit" class="btn btn-primary" tabindex="3" value="<?php echo iaSmarty::lang(array('key'=>'login'),$_smarty_tpl);?>
">
					<a href="#" class="btn btn-link" id="js-forgot-dialog"><?php echo iaSmarty::lang(array('key'=>'forgot_password'),$_smarty_tpl);?>
</a>
				</form>
			</div>
			<div class="js-login-body-forgot-password">
				<form method="post" class="sap-form">
					<div class="alert" style="display: none;"><?php echo iaSmarty::lang(array('key'=>'error_email_incorrect'),$_smarty_tpl);?>
</div>
					<?php echo iaSmarty::preventCsrf(array(),$_smarty_tpl);?>

					<p class="help-block"><?php echo iaSmarty::lang(array('key'=>'restore_password'),$_smarty_tpl);?>
</p>
					<p>
						<input type="text" id="email" name="email" tabindex="1" placeholder="<?php echo iaSmarty::lang(array('key'=>'type_email_here'),$_smarty_tpl);?>
">
					</p>
					<input id="js-forgot-submit" type="submit" class="btn btn-primary" tabindex="2" value="<?php echo iaSmarty::lang(array('key'=>'go'),$_smarty_tpl);?>
">
					<input  id="js-forgot-dialog-close" type="submit" class="btn btn-link" tabindex="3" value="<?php echo iaSmarty::lang(array('key'=>'cancel'),$_smarty_tpl);?>
">
				</form>
			</div>
			<a href="<?php echo @constant('IA_URL');?>
" class="back-to-home"><span>←</span> <?php echo iaSmarty::lang(array('key'=>'back_to_homepage'),$_smarty_tpl);?>
</a>
		</div>
	</div>

	<?php echo smarty_function_ia_hooker(array('name'=>'smartyAdminFooterBeforeJsDisplay'),$_smarty_tpl);?>

	<?php echo iaSmarty::ia_print_js(array('display'=>'on'),$_smarty_tpl);?>

	<?php echo smarty_function_ia_hooker(array('name'=>'smartyAdminFooterAfterJsDisplay'),$_smarty_tpl);?>


</body>
</html><?php }} ?>
