<?php /* Smarty version Smarty-3.1.19, created on 2017-02-09 16:29:28
         compiled from "/home/getmailout/public_html/wenno/templates/common/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2117648456589c8ad8d13793-37315703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16a1e24718cb2f269a771e6640eb124fe1d5d25c' => 
    array (
      0 => '/home/getmailout/public_html/wenno/templates/common/error.tpl',
      1 => 1455494036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2117648456589c8ad8d13793-37315703',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589c8ad8d9cc63_93162833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589c8ad8d9cc63_93162833')) {function content_589c8ad8d9cc63_93162833($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ia_hooker')) include '/home/getmailout/public_html/wenno/includes/smarty/intelli_plugins/function.ia_hooker.php';
?><?php if (iaView::ERROR_NOT_FOUND==$_smarty_tpl->tpl_vars['code']->value) {?>
	<div class="google-suggestions" id="google_suggestions">
		<script type="text/javascript">
			var GOOG_FIXURL_LANG = '<?php echo @constant('IA_LANGUAGE');?>
';
			var GOOG_FIXURL_SITE = '<?php echo @constant('IA_URL');?>
';
		</script>
		<script type="text/javascript" src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>
	</div>
<?php }?>

<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontErrorPage'),$_smarty_tpl);?>
<?php }} ?>
