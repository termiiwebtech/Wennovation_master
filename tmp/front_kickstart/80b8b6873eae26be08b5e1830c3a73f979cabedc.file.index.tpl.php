<?php /* Smarty version Smarty-3.1.19, created on 2017-02-09 16:27:54
         compiled from "/home/getmailout/public_html/wenno/plugins/contact_us/templates/front/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:831962502589c8a7ac22806-96776579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80b8b6873eae26be08b5e1830c3a73f979cabedc' => 
    array (
      0 => '/home/getmailout/public_html/wenno/plugins/contact_us/templates/front/index.tpl',
      1 => 1486600176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '831962502589c8a7ac22806-96776579',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subjects' => 0,
    'subject' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589c8a7ace2181_77840169',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589c8a7ace2181_77840169')) {function content_589c8a7ace2181_77840169($_smarty_tpl) {?>
         <?php echo iaSmarty::ia_blocks(array('block'=>'verytop'),$_smarty_tpl);?>


    <!-- Project Details Start -->
    <section id="solution" class="p-t-10 p-b-10">
        <div class="container">

            <div class="col-md-8 col-sm-12 p-b-10">
                <div class="heading">
                      <div class="heading_border bg_red"></div>
                      <p>Contact Us</p>
                      <h2>WE WANT TO <span class="color_red">HEAR FROM YOU</span></h2>
                    </div>
                <div class="row p-t-40">

<form action="<?php echo @constant('IA_URL');?>
contacts/" method="post" id="contact" class="ia-form">
	<?php echo iaSmarty::preventCsrf(array(),$_smarty_tpl);?>


	<div class="form-group">
		<label for="name"><?php echo iaSmarty::lang(array('key'=>'fullname'),$_smarty_tpl);?>
: <span class="required">*</span></label>
		<input class="form-control" type="text" name="name" id="contact-name" value="<?php if (isset($_POST['name'])) {?><?php echo $_POST['name'];?>
<?php }?>">
	</div>

	<div class="form-group">
		<label for="email"><?php echo iaSmarty::lang(array('key'=>'email'),$_smarty_tpl);?>
: <span class="required">*</span></label>
		<input class="form-control" type="text" name="email" id="contact-email" value="<?php if (isset($_POST['email'])) {?><?php echo $_POST['email'];?>
<?php }?>">
	</div>

	<div class="form-group">
		<label for="phone"><?php echo iaSmarty::lang(array('key'=>'phone'),$_smarty_tpl);?>
:</label>
		<input class="form-control" type="text" name="phone" id="contact-phone" value="<?php if (isset($_POST['phone'])) {?><?php echo $_POST['phone'];?>
<?php }?>">
	</div>

	<?php if (!empty($_smarty_tpl->tpl_vars['subjects']->value)) {?>
		<div class="form-group">
			<label for="subject"><?php echo iaSmarty::lang(array('key'=>'subject'),$_smarty_tpl);?>
:</label>
			<select class="form-control" name="subject" id="contact-subject">
				<option><?php echo iaSmarty::lang(array('key'=>'_select_'),$_smarty_tpl);?>
</option>
				<?php  $_smarty_tpl->tpl_vars['subject'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subject']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subjects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subject']->key => $_smarty_tpl->tpl_vars['subject']->value) {
$_smarty_tpl->tpl_vars['subject']->_loop = true;
?>
					<option value="<?php echo iaSmarty::lang(array('key'=>$_smarty_tpl->tpl_vars['subject']->value,'default'=>$_smarty_tpl->tpl_vars['subject']->value),$_smarty_tpl);?>
"><?php echo iaSmarty::lang(array('key'=>$_smarty_tpl->tpl_vars['subject']->value,'default'=>$_smarty_tpl->tpl_vars['subject']->value),$_smarty_tpl);?>
</option>
				<?php } ?>
			</select>
		</div>
	<?php }?>

	<div class="form-group">
		<label for="msg"><?php echo iaSmarty::lang(array('key'=>'contact_reason'),$_smarty_tpl);?>
: <span class="required">*</span></label>
		<textarea class="form-control" id="msg" name="msg" rows="5"><?php if (isset($_POST['msg'])) {?><?php echo $_POST['msg'];?>
<?php }?></textarea>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array()); $_block_repeat=true; echo iaSmarty::ia_add_js(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$(function()
{
	$('#msg').dodosTextCounter('500', { counterDisplayElement: 'span', counterDisplayClass: 'textcounter_msg' });
	$('.textcounter_msg').addClass('textcounter').wrap('<p class="help-block text-right"></p>').before('<?php echo iaSmarty::lang(array('key'=>'chars_left'),$_smarty_tpl);?>
 ');
});
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::ia_add_js(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php echo iaSmarty::ia_print_js(array('files'=>'jquery/plugins/jquery.textcounter'),$_smarty_tpl);?>

	</div>
	
	<?php echo $_smarty_tpl->getSubTemplate ('captcha.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<div class="form-actions">
		<input type="submit" class="btn btn-primary" value="<?php echo iaSmarty::lang(array('key'=>'send'),$_smarty_tpl);?>
">
	</div>
</form>
                </div>
            </div>
            
            
             <div class="col-md-4 col-sm-12 col-xs-12">
                
                <div class="form_left p-t-80">
                    <div class="over_image"><img src="images/update_bg.png" alt="image"/></div>
                    
                   	<div class="updates">
                        	<p>Subscribe to our newsletters to receive latest news and updates. </p>
                            <form class="p-t-25">
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
</section>

<?php echo iaSmarty::ia_print_css(array('files'=>'_IA_URL_plugins/contact_us/templates/front/style'),$_smarty_tpl);?>

<?php }} ?>
