<?php /* Smarty version Smarty-3.1.19, created on 2017-02-15 18:34:36
         compiled from "extra:events/block.past-events" */ ?>
<?php /*%%SmartyHeaderCode:199769126458a4912c5ae356-32829230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7084584ace36c2b4c96917b3cf8e4ab807593725' => 
    array (
      0 => 'extra:events/block.past-events',
      1 => 1453437648,
      2 => 'extra',
    ),
  ),
  'nocache_hash' => '199769126458a4912c5ae356-32829230',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'events' => 0,
    'event' => 0,
    'core' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a4912c5ffad0_36156661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a4912c5ffad0_36156661')) {function content_58a4912c5ffad0_36156661($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/getmailout/public_html/wenno/includes/smarty/plugins/modifier.date_format.php';
?><?php if (isset($_smarty_tpl->tpl_vars['events']->value['past'])&&$_smarty_tpl->tpl_vars['events']->value['past']) {?>
	<div class="media-items events-list">
		<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value['past']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
			<div class="media">
				<?php if ($_smarty_tpl->tpl_vars['event']->value['image']) {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['event']->value['url'];?>
" class="media-object pull-left"><?php echo iaSmarty::printImage(array('imgfile'=>$_smarty_tpl->tpl_vars['event']->value['image'],'width'=>60,'height'=>60,'class'=>'img-rounded img-responsive'),$_smarty_tpl);?>
</a>
				<?php } else { ?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['event']->value['url'];?>
" class="media-object pull-left"><img src="<?php echo @constant('IA_CLEAR_URL');?>
plugins/events/templates/front/img/preview-image.png" alt="<?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
" width="60" height="60" class="img-rounded img-responsive"></a>
				<?php }?>

				<div class="media-body">
					<h5 class="media-heading"><a href="<?php echo $_smarty_tpl->tpl_vars['event']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
</a></h5>
					<span class="fa fa-clock-o"></span> 
					<?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['date'],$_smarty_tpl->tpl_vars['core']->value['config']['date_format'])==smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['date_end'],$_smarty_tpl->tpl_vars['core']->value['config']['date_format'])) {?>
						<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['date'],$_smarty_tpl->tpl_vars['core']->value['config']['date_format']);?>

					<?php } else { ?>
						<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['date'],$_smarty_tpl->tpl_vars['core']->value['config']['date_format']);?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['date_end'],$_smarty_tpl->tpl_vars['core']->value['config']['date_format']);?>

					<?php }?>
				</div>
			</div>
		<?php } ?>
	</div>
<?php }?><?php }} ?>