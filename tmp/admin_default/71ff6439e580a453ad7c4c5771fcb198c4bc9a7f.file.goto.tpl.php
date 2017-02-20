<?php /* Smarty version Smarty-3.1.19, created on 2017-02-09 16:35:27
         compiled from "/home/getmailout/public_html/wenno/admin/templates/default/goto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:360016242589c8c3f7b4703-14614027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71ff6439e580a453ad7c4c5771fcb198c4bc9a7f' => 
    array (
      0 => '/home/getmailout/public_html/wenno/admin/templates/default/goto.tpl',
      1 => 1455494036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '360016242589c8c3f7b4703-14614027',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goto' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589c8c3f7c7eb0_15793319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589c8c3f7c7eb0_15793319')) {function content_589c8c3f7c7eb0_15793319($_smarty_tpl) {?><label><?php echo iaSmarty::lang(array('key'=>'and_then'),$_smarty_tpl);?>
</label>
<select name="goto" class="goto-actions">
	<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['action']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if (isset($_POST['goto'])&&$_POST['goto']==$_smarty_tpl->tpl_vars['action']->value) {?> selected<?php }?>><?php echo iaSmarty::lang(array('key'=>$_smarty_tpl->tpl_vars['name']->value,'default'=>$_smarty_tpl->tpl_vars['name']->value),$_smarty_tpl);?>
</option>
	<?php } ?>
</select><?php }} ?>
