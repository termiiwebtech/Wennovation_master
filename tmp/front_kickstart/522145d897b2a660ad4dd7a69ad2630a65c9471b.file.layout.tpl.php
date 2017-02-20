<?php /* Smarty version Smarty-3.1.19, created on 2017-02-16 15:32:27
         compiled from "/home/getmailout/public_html/wenno/templates/kickstart/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1545808951589c8a78ac9828-67413015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '522145d897b2a660ad4dd7a69ad2630a65c9471b' => 
    array (
      0 => '/home/getmailout/public_html/wenno/templates/kickstart/layout.tpl',
      1 => 1487255541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1545808951589c8a78ac9828-67413015',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589c8a78b560f9_02589424',
  'variables' => 
  array (
    'core' => 0,
    'iaBlocks' => 0,
    'name' => 0,
    'item' => 0,
    'action' => 0,
    'key' => 0,
    'value' => 0,
    '_content_' => 0,
    'manageMode' => 0,
    'previewMode' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589c8a78b560f9_02589424')) {function content_589c8a78b560f9_02589424($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ia_hooker')) include '/home/getmailout/public_html/wenno/includes/smarty/intelli_plugins/function.ia_hooker.php';
if (!is_callable('smarty_function_randnum')) include '/home/getmailout/public_html/wenno/includes/smarty/intelli_plugins/function.randnum.php';
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
" dir="<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['direction'];?>
">
	<head>
		<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontBeforeHeadSection'),$_smarty_tpl);?>


		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<title><?php echo iaSmarty::ia_print_title(array(),$_smarty_tpl);?>
</title>
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['meta-description'];?>
">
		<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['meta-keywords'];?>
">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="generator" content="Subrion CMS <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['version'];?>
 - Open Source Content Management System">
		<meta name="robots" content="index">
		<meta name="robots" content="follow">
		<meta name="revisit-after" content="1 day">
		<base href="<?php echo @constant('IA_URL');?>
">
        
        

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <!-- Required Framework -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

    <!-- Required Framework -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css" />
    <link rel="stylesheet" type="text/css" href="css/settings.css" />

    <!-- Fancy Box -->
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" />

    <!-- Fonts Icons-->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/copious-icon.css" />

    <!-- Navbar Css -->
    <link rel="stylesheet" type="text/css" href="css/bootsnav.css" />

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="css/color.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    
	<!-- Favicon -->
        
		<link rel="shortcut icon" href="<?php if (!empty($_smarty_tpl->tpl_vars['core']->value['config']['site_favicon'])) {?><?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
uploads/<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['site_favicon'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
favicon.png<?php }?>">
        


		<?php echo iaSmarty::ia_print_css(array('display'=>'on'),$_smarty_tpl);?>


	</head>

    

	<body>

		<div class="pageWrap" id="pageWrap">
            
            
     
    <header id="header-top_3">
        <div class="container">
            <div class="row">
                <!-- Header Top Start -->
                <div class="header_set">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="get-tuch text-left"><i class="icon-telephone114"></i>
                            <ul>
                                <li><h5 class="color_white">Ibadan .: (+234) 0909-000-2648</h5></li>
                                <li><h5 class="color_white">Lagos  .: (+234) 0909-000-2648</h5></li>
                            </ul>
                        </div>
                        <div class="get-tuch text-left"><i class="icon-alarmclock"></i>
                            <ul>
                                <li>
                                    <h4>24/7</h4>
                                </li>
                                <li>
                                    <p class="p_14">Monday to Sunday</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-12 text-right">
                        <div class="header-top-links">
                            <div class="social-icons text-right">
                                <ul>
                                    <li><a href="https://web.facebook.com/wennovationhub/"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/wennovation/"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/wennovation/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                             <?php echo iaSmarty::ia_blocks(array('block'=>'account'),$_smarty_tpl);?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Top End -->

        <!-- Navbar Start -->
       <!-- Navbar Start -->
        <nav class="navbar navbar-default navbar-fixed navbar-transparent navbar-sticky dark bootsnav">

            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                   <a class="navbar-brand" href="<?php echo @constant('IA_URL');?>
">

                        <img src="templates/kickstart/images/logo.png" class="logo logo-display" alt=""style="width: 200px;" />
                        <img src="templates/kickstart/images/logo.png" class="logo logo-scrolled" alt="" style="width: 200px;" />

                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav_bor_bot" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="cool-link_3 active"><a href="<?php echo @constant('IA_URL');?>
">Home</a>
                        </li>
                            <li class="cool-link"><a href="<?php echo @constant('IA_URL');?>
#who">About</a></li>
                        <li class="dropdown cool-link_3"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Focus</a>
                            <ul class="dropdown-menu">
                                <li><a href="agrihack">The AgriHack WestAfrica Initiative</a></li>
                                <li><a href="incubation">Incubation & Acceleration</a></li>
                                <li><a href="ecosystem">Ecosystem development</a></li>
                                <li><a href="consulting">Consulting</a></li>
                                <li><a href="coworking">Coworking</a></li>
                            </ul>
                        </li>
                            <li class="cool-link"><a href="team">Our Team</a></li>
                            <li class="cool-link"><a href="<?php echo @constant('IA_URL');?>
#startups">Startups</a></li>
                            <li class="cool-link"><a href="events">WennoEvents</a></li>
                            <li class="cool-link active"><a href="contact">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

            </div>
        </nav>

    </header>
    <!-- Navbar End -->       
            
 
                
     <div class="page-container">
		
         <?php echo iaSmarty::ia_blocks(array('block'=>'top'),$_smarty_tpl);?>

					<section class="section-home-primary">
                        
    
		<?php if ($_smarty_tpl->tpl_vars['core']->value['config']['enable_landing']&&'index'==$_smarty_tpl->tpl_vars['core']->value['page']['name']) {?>
			<?php echo $_smarty_tpl->getSubTemplate ('page.index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } else { ?>
			<?php if (isset($_smarty_tpl->tpl_vars['iaBlocks']->value['verytop'])) {?>
				<div class="verytop">
					<div class="container"></div>
				</div>
			<?php }?>

								<div class="content">
									<ul class="content__actions">
										<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['action']->key;
?>
											<li>
												<?php if ('action-favorites'==$_smarty_tpl->tpl_vars['name']->value) {?>
													<?php echo iaSmarty::printFavorites(array('item'=>$_smarty_tpl->tpl_vars['item']->value,'itemtype'=>$_smarty_tpl->tpl_vars['item']->value['item'],'guests'=>true),$_smarty_tpl);?>

												<?php } else { ?>
													<a data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['action']->value['title'];?>
" <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['action']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php } ?>>
														<span class="fa fa-<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"></span>
													</a>
												<?php }?>
											</li>
										<?php } ?>
									</ul>
								</div>

                                <div class="content">

								<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontBeforeMainContent'),$_smarty_tpl);?>

									<?php echo $_smarty_tpl->tpl_vars['_content_']->value;?>

                                </div>
								<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontAfterMainContent'),$_smarty_tpl);?>


								<?php echo iaSmarty::ia_blocks(array('block'=>'bottom'),$_smarty_tpl);?>
 
                        
                        

			<?php if (isset($_smarty_tpl->tpl_vars['iaBlocks']->value['verybottom'])) {?>
				<div class="verybottom">
					<div class="container"><?php echo iaSmarty::ia_blocks(array('block'=>'verybottom'),$_smarty_tpl);?>
</div>
				</div>
			<?php }?>
		<?php }?>

                </section>
                </div>
            
            

    <!-- Map Start -->
    <section id="contact-us">
        <div class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 hidden-xs"> </div>
                    <div class="col-md-4 hidden-xs"> </div>
                    <div class="col-md-4 col-sm-8 col-xs-12">
                        <div class="contact-text">
                            <div id="map_banner" class="owl-carousel">
                                <div class="item">
                                    <div class="agent-p-contact">
                                        <h3 class="color_white">Ibadan Office</h3>
                                        <div class="agetn-contact-2 p-t-35">
                                            <p><i class="icon-telephone114"></i>(+234) 0909-000-2648</p>
                                            <p><i class=" icon-icons142"></i>info@wennovationhub.org</p>
                                            <p><i class=" icon-alarmclock"></i>Mon to Sun 24/7 (Calls: 9am to 5pm)</p>
                                            <p><i class="icon-icons74"></i>3rd floor, Alpha & Omega Building,</p>
                                            <p>Queen Elizabeth Road II, Mokola Ibadan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="agent-p-contact">
                                        <h3 class="color_white">Lagos Office</h3>
                                        <div class="agetn-contact-2 p-t-35">
                                            <p><i class="icon-telephone114"></i>(+234) 0909-000-2648</p>
                                            <p><i class=" icon-icons142"></i>info@wennovationhub.org</p>
                                            <p><i class=" icon-alarmclock"></i>Mon to Sun 24/7 (Calls: 9am to 5pm)</p>
                                            <p><i class="icon-icons74"></i>11a, Rev Ogunbiyi Str off Oba Akinjobi Str,</p>
                                            <p> Ikeja GRA Lagos.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="cd-google-map">
                <div id="google-container"></div>
                <div id="cd-zoom-in"></div>
                <div id="cd-zoom-out"></div>
                <address>Wennovation, Nigeria</address> 
            </div>
        </div>
    </section>
    <!-- Map End -->

    <!-- Footer Start -->
    <footer id="footer_1" class="bg_blue p-t-50" style="background: url(templates/kickstart/images/topmage.png);border-top: 2px solid #f68e1f;">
        <div class="container">
            <div class="row p-b-10">
                <div class="col-md-3">
                    <div class="footer_logo">
                        <img src="templates/kickstart/images/logo.png" alt="image"  style="width: 250px;" />
                    </div>
                </div>
                <div class="col-md-6 text-center hidden-xs">
                    <ul class="footer_link">

                            <li><a href="home#who">About</a></li>
                            <li><a href="home#focus">Focus</a></li>
                            <li><a href="home#startups">Startups</a></li>
                            <li><a href="home#events">Upcoming Events</a></li>
                            <li><a href="contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="header-top-links">
                        <div>
                            <a href="contact" class="btn-light">Join the Community</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="hrr">
            <div class="row p-t-55">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <p class="footer_p">Wennovation Hub is a pioneer innovation accelerator founded in August 2010, with offices in Lagos and Ibadan Nigeria.</p>
                </div>
                <div class="col-md-3 col-sm-3">
                   <div class="col-md-12">
                    <i class="icon-icons74 color_red" style="font-size: 27px;"></i><h3> Ibadan Office</h3>
                            <ul>
                                <li><p>3rd floor, Alpha & Omega Building,</p></li>
                                <li><p class="p_14">Queen Elizabeth Road II, Mokola Ibadan.</p></li>
                            </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="col-md-12">
                    <i class="icon-icons74 color_red" style="font-size: 27px;"></i><h3> Lagos Office</h3>
                            <ul>
                                <li><p>11a, Rev Ogunbiyi Str off Oba Akinjobi Str,</p></li>
                                <li><p class="p_14"> Ikeja GRA Lagos.</p></li>
                            </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12">
                    <form class="footer_email">
                        <div class="col-md-10">
                            <input type="email" class="email" placeholder="Email Address">
                        </div>
                        <div class="col-md-2 submit_b">
                            <input type="submit" class="submit" value="">
                            <span><a href="#"><i class="icon-mail-envelope-closed3"></i></a></span>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
        
        <div class="footer_botom m-t-50 p-t-20 p-b-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <p style="color: #fff !important">Copyrights © 2017 Wennovation Hub. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Back-To-Top -->
    <div class="container">
        <a href="#" class="back-to-top text-center" style="display: inline;">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>



    <!--Required JS -->
    <script src="js/jquery.2.2.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- SMOOTH SCROLL -->  
    <script type="text/javascript" src="js/scroll-desktop.js"></script>
    <script type="text/javascript" src="js/scroll-desktop-smooth.js"></script>

    <script src="js/jquery.counterup.js"></script>
    <script src="js/themepunch/jquery.themepunch.revolution.min.js"></script>
    <script src="js/themepunch/jquery.themepunch.tools.min.js"></script>
    <script src="js/themepunch/revolution.extension.layeranimation.min.js"></script>
    <script src="js/themepunch/revolution.extension.navigation.min.js"></script>
    <script src="js/themepunch/revolution.extension.parallax.min.js"></script>
    <script src="js/themepunch/revolution.extension.slideanims.min.js"></script>
    <script src="js/themepunch/revolution.extension.video.min.js"></script>
    <script src="js/tab_slider.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootsnav.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/viedobox/video.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/bootstrap-number-input.js"></script>
    <script src="js/renge_selectbox-0.2.min.js"></script>
    <script src="js/range-Slider.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U&amp;libraries=places"></script>
    <script src="js/custom-map.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/zelect.js"></script>
    <!-- Progress  -->
    <script src="js/progressbar.js"></script>
    <script src="js/copious_custom.js"></script>
    
    <script type="text/javascript">
        /* Smooth-Scroll */
        $(".scroll").click(function(event) {

            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 2000);
        });
        //Check to see if the window is top if not then display button
        var offset = 650;
        var duration = 300;
        $(window).scroll(function() {
            if ($(this).scrollTop() > offset) {
                $('.back-to-top').fadeIn(200);
            } else {
                $('.back-to-top').fadeOut(200);
            }
        });

        $('.back-to-top').on("click", function(event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 500);
            return false;
        });
    </script>
    
		<!-- SYSTEM STUFF -->

		<?php if ($_smarty_tpl->tpl_vars['core']->value['config']['cron']) {?>
			<div style="display: none;">
				<img src="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
cron/?<?php echo smarty_function_randnum(array(),$_smarty_tpl);?>
" width="1" height="1" alt="">
			</div>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['manageMode']->value)) {?>
			<?php echo $_smarty_tpl->getSubTemplate ('visual-mode.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['previewMode']->value)) {?>
			<p><?php echo iaSmarty::lang(array('key'=>'youre_in_preview_mode'),$_smarty_tpl);?>
</p>
		<?php }?>
            
		<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontFinalize'),$_smarty_tpl);?>

	</body>
</html><?php }} ?>
