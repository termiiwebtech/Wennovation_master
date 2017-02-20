<?php /* Smarty version Smarty-3.1.19, created on 2017-02-09 16:57:32
         compiled from "/home/getmailout/public_html/wenno/plugins/events/templates/front/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:798736606589c916cb96e01-86887958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4304a1c40cffaf5a6e035b01cf2fa65da4f65159' => 
    array (
      0 => '/home/getmailout/public_html/wenno/plugins/events/templates/front/index.tpl',
      1 => 1486634892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '798736606589c916cb96e01-86887958',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'term' => 0,
    'paginator' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589c916cc63600_44014377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589c916cc63600_44014377')) {function content_589c916cc63600_44014377($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/getmailout/public_html/wenno/includes/smarty/plugins/modifier.truncate.php';
?>

<!-- Page Banner Start -->
<div id="page_banner" class="m-b-20">
    <div class="container">
		<div class="page-header text-center">
          <h2>WennoEvents</h2>
          <h4 class="color_white">We help new and startup companies to develop by trainings, workshops and events.</h4>
        </div>
    </div>
</div>
<!-- Page Banner End -->



    <!-- Project Details Start -->
    <section id="solution" class="p-t-10 p-b-10">
        <div class="container">
                                        
        
<div class="row" >
    <center>
        
    </center>

<div class="col-md-8">
<div style="padding: 5%;">
    
<?php echo iaSmarty::ia_blocks(array('block'=>'teaser'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['items']->value)&&$_smarty_tpl->tpl_vars['items']->value) {?>
    
    
<?php if (isset($_smarty_tpl->tpl_vars['items']->value)&&$_smarty_tpl->tpl_vars['items']->value&&isset($_smarty_tpl->tpl_vars['term']->value)) {?>
	<div class="info m-b text-i"><?php echo iaSmarty::lang(array('key'=>'listings_found'),$_smarty_tpl);?>
: <b><?php echo $_smarty_tpl->tpl_vars['paginator']->value['total'];?>
</b></div>
<?php }?>
                <hr class="hrr">
	<div class="ia-items events" style="padding: 5%;">

		<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>

			<div class="media ia-item ia-item--border event">
				<?php if ($_smarty_tpl->tpl_vars['event']->value['image']) {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['event']->value['url'];?>
" class="media-object pull-left"><?php echo iaSmarty::printImage(array('imgfile'=>$_smarty_tpl->tpl_vars['event']->value['image'],'width'=>100,'height'=>100,'class'=>'img-rounded img-responsive'),$_smarty_tpl);?>
</a>
				<?php } else { ?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['event']->value['url'];?>
" class="media-object pull-left"><img src="<?php echo @constant('IA_CLEAR_URL');?>
plugins/events/templates/front/img/preview-image.png" alt="<?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
" width="100" height="100" class="img-rounded img-responsive"></a>
				<?php }?>

				<div class="media-body">
					<h3 class="media-heading">
						<a href="<?php echo $_smarty_tpl->tpl_vars['event']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
</a>
					</h3>
					<div class="media-date">
						<?php if (strtotime($_smarty_tpl->tpl_vars['event']->value['date_end'])>$_SERVER['REQUEST_TIME']) {?>
							<span class="text-success"><span class="fa fa-clock-o"></span> <?php echo $_smarty_tpl->tpl_vars['event']->value['date'];?>
 - <?php echo $_smarty_tpl->tpl_vars['event']->value['date_end'];?>
</span>
						<?php } else { ?>
							<span class="fa fa-clock-o"></span> <?php echo $_smarty_tpl->tpl_vars['event']->value['date'];?>
 - <?php echo $_smarty_tpl->tpl_vars['event']->value['date_end'];?>

						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['event']->value['venue']) {?>, <br><span class="fa fa-map-marker"></span> <?php echo $_smarty_tpl->tpl_vars['event']->value['venue'];?>
<?php }?>
					</div>

					<?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['event']->value['description']),300,"...");?>

				</div>
                <hr class="hrr">
			</div>
		<?php } ?>
	</div>
	<?php echo iaSmarty::pagination(array('aTotal'=>$_smarty_tpl->tpl_vars['paginator']->value['total'],'aTemplate'=>$_smarty_tpl->tpl_vars['paginator']->value['template'],'aItemsPerPage'=>$_smarty_tpl->tpl_vars['paginator']->value['limit'],'aNumPageItems'=>5,'aTruncateParam'=>1),$_smarty_tpl);?>


<?php } else { ?>
	<div class="message alert bg-warning"><?php echo iaSmarty::lang(array('key'=>'no_events'),$_smarty_tpl);?>
</div>
<?php }?>
    </div>
</div>
    <div class="col-md-4 col-sm-12 col-xs-12">
                
                <div class="form_left p-t-10">
                    
                   	<div class="updates">
                        	<p>Subscribe to our newsletters to receive latest news and updates. </p>
                            <form>
                            	<div class="col-md-12">
                            		<input type="text" placeholder="Name">
                                </div>
                                <div class="col-md-10">
                                	<input type="email" class="email" placeholder="Email">
                                </div>
                                <div class="col-md-2">
                                	<input type="submit" class="submit" value="">
                                    <span><a href="#"><i class="icon-mail-envelope-closed3"></i></a></span>
                                </div>
                            </form>
                        </div>
             </div>
                    
                        <div class="social-icons_1 p-t-30">
                            <ul>
                                <li><a href="https://web.facebook.com/wennovationhub/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://twitter.com/wennovation/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/wennovation/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>

                        </div>
                 
             
        </div>
</div>
</div>

                        </div>
         </section>
<?php echo iaSmarty::ia_print_css(array('files'=>'_IA_URL_plugins/events/templates/front/css/style'),$_smarty_tpl);?>

<?php }} ?>
