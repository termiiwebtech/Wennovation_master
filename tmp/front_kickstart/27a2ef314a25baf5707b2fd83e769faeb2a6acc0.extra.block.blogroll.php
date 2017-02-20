<?php /* Smarty version Smarty-3.1.19, created on 2017-02-11 01:08:40
         compiled from "extra:personal_blog/block.blogroll" */ ?>
<?php /*%%SmartyHeaderCode:1641636454589e5608351187-45107161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27a2ef314a25baf5707b2fd83e769faeb2a6acc0' => 
    array (
      0 => 'extra:personal_blog/block.blogroll',
      1 => 1473779924,
      2 => 'extra',
    ),
  ),
  'nocache_hash' => '1641636454589e5608351187-45107161',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block_blog_entries' => 0,
    'one_blog_entry' => 0,
    'core' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589e56083bfb15_24415214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589e56083bfb15_24415214')) {function content_589e56083bfb15_24415214($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/getmailout/public_html/wenno/includes/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/home/getmailout/public_html/wenno/includes/smarty/plugins/modifier.truncate.php';
?><?php if (isset($_smarty_tpl->tpl_vars['block_blog_entries']->value)&&$_smarty_tpl->tpl_vars['block_blog_entries']->value) {?>
	<div class="medias blogroll">
		<div class="row">
			<?php  $_smarty_tpl->tpl_vars['one_blog_entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_blog_entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block_blog_entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['one_blog_entry']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['one_blog_entry']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['one_blog_entry']->key => $_smarty_tpl->tpl_vars['one_blog_entry']->value) {
$_smarty_tpl->tpl_vars['one_blog_entry']->_loop = true;
 $_smarty_tpl->tpl_vars['one_blog_entry']->iteration++;
 $_smarty_tpl->tpl_vars['one_blog_entry']->last = $_smarty_tpl->tpl_vars['one_blog_entry']->iteration === $_smarty_tpl->tpl_vars['one_blog_entry']->total;
?>
				<div class="col-md-3">
					<div class="ia-item ia-item--card">
						<?php if ($_smarty_tpl->tpl_vars['one_blog_entry']->value['image']) {?>
							<div class="ia-item__image">
								<a href="<?php echo @constant('IA_URL');?>
blog/<?php echo $_smarty_tpl->tpl_vars['one_blog_entry']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['one_blog_entry']->value['alias'];?>
"><?php echo iaSmarty::printImage(array('imgfile'=>$_smarty_tpl->tpl_vars['one_blog_entry']->value['image'],'title'=>$_smarty_tpl->tpl_vars['one_blog_entry']->value['title']),$_smarty_tpl);?>
</a>
							</div>
						<?php }?>
						<div class="ia-item__content">
							<h4 class="ia-item__title">
								<a href="<?php echo @constant('IA_URL');?>
blog/<?php echo $_smarty_tpl->tpl_vars['one_blog_entry']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['one_blog_entry']->value['alias'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['one_blog_entry']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a>
							</h4>

							<div class="ia-item__additional">
								<p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one_blog_entry']->value['date_added'],$_smarty_tpl->tpl_vars['core']->value['config']['date_format']);?>
</p>
							</div>

							<p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['one_blog_entry']->value['body']),$_smarty_tpl->tpl_vars['core']->value['config']['blog_max_block'],'...');?>
</p>
						</div>
					</div>
				</div>

				<?php if ($_smarty_tpl->tpl_vars['one_blog_entry']->iteration%4==0&&!$_smarty_tpl->tpl_vars['one_blog_entry']->last) {?>
					</div>
					<div class="row">
				<?php }?>
			<?php } ?>
		</div>
	</div>
	<p class="m-t text-center"><a href="<?php echo @constant('IA_URL');?>
blog/" class="btn btn-primary-outline"><?php echo iaSmarty::lang(array('key'=>'view_all_blog_entries'),$_smarty_tpl);?>
</a></p>
<?php } else { ?>
	<div class="alert alert-info"><?php echo iaSmarty::lang(array('key'=>'no_blog_entries'),$_smarty_tpl);?>
</div>
<?php }?><?php }} ?>
