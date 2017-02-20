<!DOCTYPE html>
<html lang="{$core.language.iso}" dir="{$core.language.direction}">
	<head>
		{ia_hooker name='smartyFrontBeforeHeadSection'}

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<title>{ia_print_title}</title>
		<meta name="description" content="{$core.page['meta-description']}">
		<meta name="keywords" content="{$core.page['meta-keywords']}">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="generator" content="Subrion CMS {$core.config.version} - Open Source Content Management System">
		<meta name="robots" content="index">
		<meta name="robots" content="follow">
		<meta name="revisit-after" content="1 day">
		<base href="{$smarty.const.IA_URL}">
        
        

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
        
		<link rel="shortcut icon" href="{if !empty($core.config.site_favicon)}{$core.page.nonProtocolUrl}uploads/{$core.config.site_favicon}{else}{$core.page.nonProtocolUrl}favicon.png{/if}">
        


		{ia_print_css display='on'}

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
                             {ia_blocks block='account'}
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
                   <a class="navbar-brand" href="{$smarty.const.IA_URL}">

                        <img src="templates/kickstart/images/logo.png" class="logo logo-display" alt=""style="width: 200px;" />
                        <img src="templates/kickstart/images/logo.png" class="logo logo-scrolled" alt="" style="width: 200px;" />

                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav_bor_bot" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="cool-link_3 active"><a href="{$smarty.const.IA_URL}">Home</a>
                        </li>
                            <li class="cool-link"><a href="{$smarty.const.IA_URL}#who">About</a></li>
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
                            <li class="cool-link"><a href="{$smarty.const.IA_URL}#startups">Startups</a></li>
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
		
         {ia_blocks block='top'}
					<section class="section-home-primary">
                        
    
		{if $core.config.enable_landing && 'index' == $core.page.name}
			{include 'page.index.tpl'}
		{else}
			{if isset($iaBlocks.verytop)}
				<div class="verytop">
					<div class="container"></div>
				</div>
			{/if}

								<div class="content">
									<ul class="content__actions">
										{foreach $core.actions as $name => $action}
											<li>
												{if 'action-favorites' == $name}
													{printFavorites item=$item itemtype=$item.item guests=true}
												{else}
													<a data-toggle="tooltip" title="{$action.title}" {foreach $action.attributes as $key => $value}{$key}="{$value}" {/foreach}>
														<span class="fa fa-{$name}"></span>
													</a>
												{/if}
											</li>
										{/foreach}
									</ul>
								</div>

                                <div class="content">

								{ia_hooker name='smartyFrontBeforeMainContent'}
									{$_content_}
                                </div>
								{ia_hooker name='smartyFrontAfterMainContent'}

								{ia_blocks block='bottom'} 
                        
                        

			{if isset($iaBlocks.verybottom)}
				<div class="verybottom">
					<div class="container">{ia_blocks block='verybottom'}</div>
				</div>
			{/if}
		{/if}

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

		{if $core.config.cron}
			<div style="display: none;">
				<img src="{$core.page.nonProtocolUrl}cron/?{randnum}" width="1" height="1" alt="">
			</div>
		{/if}

		{if isset($manageMode)}
			{include 'visual-mode.tpl'}
		{/if}

		{if isset($previewMode)}
			<p>{lang key='youre_in_preview_mode'}</p>
		{/if}
            
		{ia_hooker name='smartyFrontFinalize'}
	</body>
</html>