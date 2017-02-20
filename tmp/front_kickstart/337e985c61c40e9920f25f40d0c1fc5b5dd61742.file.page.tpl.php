<?php /* Smarty version Smarty-3.1.19, created on 2017-02-09 16:27:52
         compiled from "/home/getmailout/public_html/wenno/templates/common/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1747882357589c8a78a42e78-22716861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '337e985c61c40e9920f25f40d0c1fc5b5dd61742' => 
    array (
      0 => '/home/getmailout/public_html/wenno/templates/common/page.tpl',
      1 => 1486622602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1747882357589c8a78a42e78-22716861',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'protect' => 0,
    'page_protect' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589c8a78ac5474_10854850',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589c8a78ac5474_10854850')) {function content_589c8a78ac5474_10854850($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['protect']->value) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['page_protect']->value)) {?>
		<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['page_protect']->value;?>
</div>
	<?php }?>

	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php } else { ?>
	<div class="alert alert-warning"><?php echo iaSmarty::lang(array('key'=>'password_protected_page'),$_smarty_tpl);?>
</div>

	<form action="<?php echo @constant('IA_SELF');?>
" method="post" class="form-inline">
		<?php echo iaSmarty::preventCsrf(array(),$_smarty_tpl);?>

		<label><?php echo iaSmarty::lang(array('key'=>'password'),$_smarty_tpl);?>
:
			<input type="password" tabindex="5" name="password" value="">
			<button type="submit" tabindex="6" name="login" value="" class="btn btn-primary"><?php echo iaSmarty::lang(array('key'=>'view'),$_smarty_tpl);?>
</button>
		</label>
	</form>
<?php }?><?php }} ?>
