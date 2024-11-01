<!DOCTYPE html>
<?php
if ( ! defined( 'ABSPATH' ) ) exit;
require_once('php/data-var.php');	
?>

<!--[if gt IE 8]><!--> <html class="no-js" lang="en-US">  <!--<![endif]-->
	<head>
	
		<title><?php echo $wpsm_uc_plugin_options_header['meta_title']; ?></title>
		<!-- META DATA -->
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="<?php echo $wpsm_uc_plugin_options_header['meta_desc']; ?>">
		<meta name="keywords" content="">
		<meta name="author" content="">
		
		<!-- CSS Global Compulsory -->
		<link rel="stylesheet" href="<?php echo WPSM_UC_PLUGIN_URL.'assets/css/bootstrap.css'; ?>" />
		<link rel="stylesheet" href="<?php echo WPSM_UC_PLUGIN_URL.'launch/templates/template6/css/style.css'; ?>" />
		
		<!-- CSS Implementing Plugins -->
		<link rel="stylesheet" href="<?php echo WPSM_UC_PLUGIN_URL.'assets/css/font-awesome/css/font-awesome.min.css'; ?>">
		<link rel="stylesheet" href="<?php echo WPSM_UC_PLUGIN_URL.'launch/templates/template6/css/animate.min.css'; ?>">

	
		<!-- JS -->
		<script type="text/javascript" src="<?php echo WPSM_UC_PLUGIN_URL.'launch/templates/template6/js/modernizr.js'; ?>"></script>
		
		
		<style>
			.logo_header img{
				width:<?php echo $wpsm_uc_plugin_options_general['logo_width']; ?>px ;
				height: <?php echo $wpsm_uc_plugin_options_general['logo_height']; ?>px;
			}
			.home-logo{
				width:<?php echo $wpsm_uc_plugin_options_general['logo_width']; ?>px !important;
				height: <?php echo $wpsm_uc_plugin_options_general['logo_height']; ?>px;
			}
			<?php $background_color_overlay = $wpsm_uc_plugin_options_background['background_color_overlay']; ?>
			<?php if($wpsm_uc_plugin_options_background['select_background']=="bg_color" || $wpsm_uc_plugin_options_background['select_background']=="bg_video"){ ?>
				body{ 
					background: <?php echo $wpsm_uc_plugin_options_background['background_color']; ?>  !important;
				}
			<?php } ?>
			.section-title{
				color:<?php echo $wpsm_uc_plugin_options_text_and_color['headeline_ft_clr']; ?> !important;
				font-family:"<?php echo $wpsm_uc_plugin_options_text_and_color['headlines_ft_stl']; ?>" !important;
				font-size: <?php echo $wpsm_uc_plugin_options_text_and_color['headline_ft_size']; ?>px !important;
				text-transform:none;
			}
			.section-title:before{
			   background: <?php echo $wpsm_uc_plugin_options_text_and_color['headeline_ft_clr']; ?> !important;
			}
			p.lead{
				font-size:<?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_size']; ?>px;
				font-family:"<?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_stl']; ?>";
				color:<?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_clr']; ?> !important; 
				line-height:1.4;
				
			}
			.service-title{
				color:<?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_clr']; ?> !important;
			  font-size: <?php echo $wpsm_uc_plugin_options_text_and_color['ser_title_ft_size']; ?>px !important;
			  font-family:"<?php echo $wpsm_uc_plugin_options_text_and_color['headlines_ft_stl']; ?>" !important; 
					
				line-height:1.4;
			}
			.serv-desc{
				color:<?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_clr']; ?> !important;
				font-size: <?php echo $wpsm_uc_plugin_options_text_and_color['ser_desc_ft_size']; ?>px !important;
				font-family:"<?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_stl']; ?>" !important;
				line-height:28px;
			}
			.service-container i{
				color:<?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_clr']; ?> !important; 
				
			}
			.contact-info i{
				color:<?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_clr']; ?> !important; 
			}
			.contact-form input, .contact-form textarea, .contact-form select{
				border-bottom: 1px solid <?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_clr']; ?>;
				color: <?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_clr']; ?>;
			}
			.contact-form input[type="submit"]{
				background:<?php echo $wpsm_uc_plugin_options_text_and_color['sb_btn_bg_clr']; ?> !important;
				color:<?php echo $wpsm_uc_plugin_options_text_and_color['sb_btn_ft_clr']; ?> !important; 
				border-color:<?php echo $wpsm_uc_plugin_options_text_and_color['sb_btn_bg_clr']; ?> !important;
			
			}
			input::-webkit-input-placeholder,
			textarea::-webkit-input-placeholder { 
				color: <?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_clr']; ?>;
				font-family:"<?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_stl']; ?>" !important;	
			}
			:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
				color: <?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_clr']; ?>; 
				font-family:"<?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_stl']; ?>" !important;
				opacity:  1;
			}
			::-moz-placeholder { /* Mozilla Firefox 19+ */
				color: <?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_clr']; ?>;
				font-family:"<?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_stl']; ?>" !important;			
				opacity:  1;
			}
			:-ms-input-placeholder { /* Internet Explorer 10+ */
			   color: <?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_clr']; ?>; 
			   font-family:"<?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_stl']; ?>" !important;
			}
			#counter{
				color:<?php echo $wpsm_uc_plugin_options_text_and_color['cnd_timer_clr']; ?> !important;
			}
			#counter span{
				font-family:"<?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_stl']; ?>" !important;
			
			}
			input[type="submit"], button{
				background:<?php echo $wpsm_uc_plugin_options_text_and_color['sb_btn_bg_clr']; ?> !important;
				color:<?php echo $wpsm_uc_plugin_options_text_and_color['sb_btn_ft_clr']; ?> !important; 
				border-color:<?php echo $wpsm_uc_plugin_options_text_and_color['sb_btn_bg_clr']; ?> !important;
				font-family:"<?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_stl']; ?>" !important;
			}
			input, textarea, select{
				border-bottom: 1px solid <?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_clr']; ?>;
				color: <?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_clr']; ?> !important;
				font-family:"<?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_stl']; ?>" !important;
			}
			input:hover, textarea:hover, select:hover {
				color: <?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_clr']; ?>;
			}
				
			input:focus, textarea:focus, select:focus {
				color: <?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_clr']; ?>;
				font-family:"<?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_stl']; ?>" !important;
			}
			.socials-icons li a i.fa{
				color:<?php echo $wpsm_uc_plugin_options_text_and_color['social_icon_clr']; ?>;
				
			}
			.home-page-title{
				font-size: <?php echo $wpsm_uc_plugin_options_text_and_color['headline_ft_size']; ?>px !important; 
			}
			#subscribebtn{
				width:100%;
			}
			.nav-toggle i, .navigation li a, .navigation a.current{
				color:<?php echo $wpsm_uc_plugin_options_text_and_color['social_icon_clr']; ?>;
				
			}	
			.navigation li a span{
				color:<?php echo $wpsm_uc_plugin_options_text_and_color['social_icon_clr']; ?>;
				border: 1px solid <?php echo $wpsm_uc_plugin_options_text_and_color['social_icon_clr']; ?>;
				font-family:"<?php echo $wpsm_uc_plugin_options_text_and_color['desc_ft_stl']; ?>" !important;
			 
			}
			<?php echo $wpsm_uc_plugin_options_custom_css['custom_css']; ?>		
		</style>
		
		<?php echo $wpsm_uc_plugin_options_header['google_al']; ?>
		<?php 
			switch($wpsm_uc_plugin_options_background['select_background']){
				case "bg_color":
					$back_var = "";
				break;
				case "bg_image":
					$back_var = "image-background";
				break;
				case "bg_slideshow":
					$back_var = "slide-background";
				break;
			} 
		?>	
	</head>
	<body class="<?php echo $back_var; ?>">
	
		<!-- START PRELOADER -->
		<div id="preloader">
			<div id="loading-animation">&nbsp;</div>
		</div>
		<!-- END PRELOADER -->
		
		<!-- START SITE HEADER -->
		<!-- START SIDEBAR -->
		<div class="main-sidebar">
			<!-- START SIDEBAR CONTAINER -->
			<div class="sidebar-container">
				<div class="table-wrapper">
					<?php if($wpsm_uc_plugin_options_general['logo_enable']=="on"){ ?>
					<!-- START TABLE TOP -->
					<div class="table-top">
						<div class="logo_header">
							<!-- LOGO -->
							<img src="<?php echo $wpsm_uc_plugin_options_general['rcsp_logo_url']; ?>" alt="" />
						</div>
					</div>
					<!-- END TABLE TOP -->
					<?php } ?>
					<!-- START TABLE MIDDLE -->
					<div class="table-middle">		
						<!-- START NAVIGATION -->
						<nav class="navigation">
							<!-- START MENU -->
							<ul>
								<li><a data-target="#home" class="onmenu current"><span><i class="fa fa-home"></i></span><?php echo $wpsm_uc_plugin_options_general['home_sec_link_txt']; ?></a></li>
								<?php if($wpsm_uc_plugin_options_newsletter['wpsm_uc_newsletter_dropdown']=="wpmail"){ ?>
								<li><a data-target="#subscribe-section" class="onmenu"><span><i class="fa <?php echo $wpsm_uc_plugin_options_subscription_field['subscription_field_link_button_icon'];  ?>"></i></span><?php echo $wpsm_uc_plugin_options_subscription_field['subscription_field_link_button_label'];  ?></a></li>
								<?php } ?>
								<?php if($wpsm_uc_plugin_options_about_us['about_us_enable']=="on") { ?>
								<li><a data-target="#about" class="onmenu"><span><i class="fa <?php echo $wpsm_uc_plugin_options_about_us['about_btn_icon']; ?>"></i></span><?php echo $wpsm_uc_plugin_options_about_us['about_btn_label']; ?></a></li>
								<?php } if($wpsm_uc_plugin_options_service['service_enable']=="on") { ?>	
								<li><a data-target="#service" class="onmenu"><span><i class="fa <?php echo $wpsm_uc_plugin_options_service['service_btn_icon']; ?>"></i></span><?php echo $wpsm_uc_plugin_options_service['service_btn_label']; ?></a></li>
								<?php } if($wpsm_uc_plugin_options_contact_us['contact_us_enable']=="on") { ?>
								<li><a data-target="#contact" class="onmenu"><span><i class="fa <?php echo $wpsm_uc_plugin_options_contact_us['contact_us_section_btn_icon']; ?>"></i></span><?php echo $wpsm_uc_plugin_options_contact_us['contact_us_section_btn_label']; ?></a></li>
								<?php } ?>
							</ul>
							<!-- END MENU -->
						</nav>
						<!-- END NAVIGATION -->
					</div>
					<!-- END TABLE MIDDLE -->
					
				</div>
			</div>
			<!-- END SIDEBAR CONTAINER -->
			<!-- START MOBILE NAV -->
			<div class="mobile-nav">
				<div class="table-wrapper">
					<div class="table-top">
						<a class="nav-toggle">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					<div class="table-footer">	
						<!-- START SOCIAL ICONS -->
						<nav class="socials-icons">
							<?php 
								$Social_Icon = array('fa-facebook','fa-twitter','fa-linkedin','fa-google-plus','fa-youtube-play','fa-pinterest-p','fa-instagram');
								$Social_Name = array('facebook','twitter','linkedin','google plus','youtube','pinterest','instagram');
								$social1 = $wpsm_uc_plugin_options_social['social1'];
								$social2 = $wpsm_uc_plugin_options_social['social1'];
								$social3 = $wpsm_uc_plugin_options_social['social1'];
								$social4 = $wpsm_uc_plugin_options_social['social1'];
								$social5 = $wpsm_uc_plugin_options_social['social1'];
								$social6 = $wpsm_uc_plugin_options_social['social1'];
								$social7 = $wpsm_uc_plugin_options_social['social1'];
							?>
							
							<ul>
								<?php	for($i = 0; $i<=6; $i++) { ?>
									<?php if($wpsm_uc_plugin_options_social['social'.$i]!="") { ?>
								<li><a href="<?php echo $wpsm_uc_plugin_options_social['social'.$i]; ?>" title="<?php echo $Social_Name[$i]; ?>" target="_blank"><i class="fa <?php echo $Social_Icon[$i]; ?>"></i></a></li>
								<?php }
									}
								?>
							</ul>
						</nav>
						<!-- END SOCIAL ICONS -->
					</div>
				</div>
			</div>
			<!-- END MOBILE NAV -->
			<!-- SIDEBAR OVERLAY -->
			<div class="sidebar-overlay"></div>
		</div>
		<!-- END SIDEBAR -->

		<div class="section-wrapper">
		
			<!-- START HOME SECTION -->
			<section id="home" class="home section fullscreen">
				<div class="section-container">
					<!-- START CONTAINER -->
					<div class="container">
						<?php if($wpsm_uc_plugin_options_general['logo_enable']=="on"){ ?>
						<div class="logo_header onstart animated" data-animation="fadeInDown" data-animation-delay="400">
							<!-- LOGO -->
							<img src="<?php echo $wpsm_uc_plugin_options_general['rcsp_logo_url']; ?>" alt="logo" class="home-logo"  />
						</div>
						<?php } ?>
						<?php if($wpsm_uc_plugin_options_countdown['countdown_enable']=="on") {?>
							<!-- COUNTER -->
							<div id="counter" class="onstart animated" data-animation="fadeInDown" data-animation-delay="600"></div>
						<?php } ?>
						<h2 class="section-title home-page-title"><?php echo $wpsm_uc_plugin_options_general['rcsp_headline']; ?></h2><!-- END TITLE -->
						<p class="lead color-white"><?php echo $wpsm_uc_plugin_options_general['rcsp_description']; ?></p><!-- Subscribe Form -->
						
					</div>
					<!-- END CONTAINER -->
				</div>
				<!-- OVERLAY -->
				<div class="overlay">
					<div class="overlay-background"></div>
					<div class="overlay-frame"></div>
				</div>
			</section>
			<!-- END HOME SECTION -->
			<?php if($wpsm_uc_plugin_options_newsletter['wpsm_uc_newsletter_dropdown']=="wpmail"){ ?>
				<!-- START SUBSCRIBE SECTION -->
				<section id="subscribe-section" class="subscribe-section section fullscreen">
					<div class="section-container">
						<!-- START CONTAINER -->
						<div class="container animated" data-animation="flipInX">
							<!-- START TITLE -->
							<h2 class="section-title"><?php echo $wpsm_uc_plugin_options_subscription_field['subscription_field_section_title']; ?></h2><!-- END TITLE -->
							<p class="lead color-white"><?php echo $wpsm_uc_plugin_options_subscription_field['subscription_field_section_desc']; ?></p>
							<!-- Subscribe Form -->
							<div id="form" class="onstart animated" data-animation="fadeInDown" data-animation-delay="1000">
								<div class="form-container">
									<div class="page-section" id="signup">
										<form class="subscriptionForm" id="signup-form" method="post">
											 <?php
											 // create nonce field 
											 wp_nonce_field('email_nonce_field_action'); ?>
											<input type="email" id="email" name="email" placeholder="<?php echo $wpsm_uc_plugin_options_subscription_field['email_field_pl_hold_text']; ?>" />
											<input type="submit"  id="subscribebtn" value="<?php echo $wpsm_uc_plugin_options_subscription_field['subs_me_button_label']; ?>" />
										</form>
										<div class="text-center load_msg" style="display:none" > <img src="<?php echo WPSM_UC_PLUGIN_URL.'assets/images/ajax_loader.gif'; ?>" /></div>
											
										<p id="error-message"><?php echo $wpsm_uc_plugin_options_subscription_field['invalid_email_notification_text']; ?></p>
										<p id="success-message"><?php echo $wpsm_uc_plugin_options_subscription_field['success_subs_notification_text']; ?></p>
									</div> <!--end page section -->
								</div> <!-- end form container -->
							</div> <!-- end Subscribe Form -->
						</div>
						<!-- END CONTAINER -->
					</div>
					<!-- OVERLAY -->
					<div class="overlay">
						<div class="overlay-background"></div>
						<div class="overlay-frame"></div>
					</div>
				</section>
			<?php } ?>
			<!-- END HOME SECTION -->
			<?php if($wpsm_uc_plugin_options_about_us['about_us_enable']=="on") { ?>
				<!-- START ABOUT SECTION -->
				<section id="about" class="about section fullscreen">
					<div class="section-container">
						<!-- START CONTAINER -->
						<div class="container animated" data-animation="flipInX">
							<!-- START TITLE -->
							<h2 class="section-title"><?php echo $wpsm_uc_plugin_options_about_us['about_section_title']; ?></h2><!-- END TITLE -->
							<p class="lead color-white"><?php echo $wpsm_uc_plugin_options_about_us['about_section_desc']; ?></p>
						</div>
					</div>
					<!-- END CONTAINER -->
					<!-- OVERLAY -->
					<div class="overlay">
						<div class="overlay-background"></div>
						<div class="overlay-frame"></div>
					</div>
				</section>
				<!-- END ABOUT SECTION -->
			<?php } ?>
			<?php if($wpsm_uc_plugin_options_service['service_enable']=="on") { ?>
				<!-- START ABOUT SECTION -->
				<section id="service" class="about section fullscreen">
					<div class="section-container">
						<!-- START CONTAINER -->
						<div class="container animated service-container" data-animation="flipInX">
							<!-- START TITLE -->
							<h2 class="section-title"><?php echo $wpsm_uc_plugin_options_service['service_section_title']; ?></h2><!-- END TITLE -->
							<p class="lead color-white"><?php echo $wpsm_uc_plugin_options_service['service_section_desc']; ?></p>
							<div class="row">
								<?php 
									switch($wpsm_uc_plugin_options_service['service_layout']){
										case "2":
											$ser_col = "6";
										break;
										case "3":
											$ser_col = "4";
										break;
										
										
									} 
								?>	
								<?php if($wpsm_uc_plugin_options_service['service_number']!=1) { ?>
									<?php for($i=0; $i<=$wpsm_uc_plugin_options_service['service_number']-1; $i++) { ?>
										<div class="col-md-<?php echo $ser_col; ?> col-sm-6 service-group">
											<i class="fa <?php echo $wpsm_uc_plugin_options_service['service_icon'.$i]; ?>"></i>
											<h4 class="service-title"><?php echo $wpsm_uc_plugin_options_service['service_title'.$i]; ?></h2><!-- END TITLE -->
											<p class=" color-white serv-desc"><?php echo $wpsm_uc_plugin_options_service['service_description'.$i]; ?></p>
										</div>
									<?php } ?>
								<?php } ?>
							</div>
						</div>
					</div>
					<!-- END CONTAINER -->
					<!-- OVERLAY -->
					<div class="overlay">
						<div class="overlay-background"></div>
						<div class="overlay-frame"></div>
					</div>
				</section>
				<!-- END ABOUT SECTION -->
			<?php } ?>
			<?php if($wpsm_uc_plugin_options_contact_us['contact_us_enable']=="on") { ?>
			<!-- START CONTACT SECTION -->
			<section id="contact" class="contact section fullscreen">
				<div class="section-container">
					<!-- START CONTAINER -->
					<div class="container animated" data-animation="flipInX">
						<!-- START TITLE -->
						<h2 class="section-title"><?php echo $wpsm_uc_plugin_options_contact_us['contact_us_section_title']; ?></h2><!-- END TITLE -->
						<p class="lead color-white"><?php echo $wpsm_uc_plugin_options_contact_us['contact_us_section_title_desc']; ?></p>
						<div class="col-md-12">
							<div class="row">
								<?php if($wpsm_uc_plugin_options_contact_us['contact_info_address']!=""){ ?>
									<div class="col-md-4 col-sm-6 contact-info">
										<i class="fa fa-map-marker"></i>
										<p class="lead color-white"><?php echo $wpsm_uc_plugin_options_contact_us['contact_info_address']; ?></p>
									</div>
								<?php } ?>
								<?php if($wpsm_uc_plugin_options_contact_us['contact_info_number']!=""){ ?>
									<div class="col-md-4 col-sm-6 contact-info">
										<i class="fa fa fa-phone"></i>
										<p class="lead color-white"><?php echo $wpsm_uc_plugin_options_contact_us['contact_info_number']; ?></p>
									</div>
								<?php } ?>
								<?php if($wpsm_uc_plugin_options_contact_us['contact_info_email_address']!=""){ ?>
									<div class="col-md-4 col-sm-6 contact-info">
										<i class="fa fa-envelope-o"></i>
										<p class="lead color-white"><?php echo $wpsm_uc_plugin_options_contact_us['contact_info_email_address']; ?></p>
									</div>
								<?php } ?>
								
							
							</div>
							
						</div><!-- END CONTACT FORM CONTAINER & COLUMN 12-->
					</div>
					<!-- END CONTAINER -->
				</div>
				<!-- OVERLAY -->
				<div class="overlay">
					<div class="overlay-background"></div>
					<div class="overlay-frame"></div>
				</div>
			</section>
			<!-- END CONTACT SECTION -->
			<?php } ?>
		</div>
		
		<!-- FAVICONS -->
		<?php 	
		// Javascript
		
		$include_url = includes_url();
		$last = $include_url[strlen( $include_url )-1];
		if ( $last != '/' ) {
			$include_url = $include_url . '/';
		}
		$output = '<script src="'.$include_url.'js/jquery/jquery.js"></script>';
	echo "$output\n";
		?>
		<script type="text/javascript" src="<?php echo WPSM_UC_PLUGIN_URL.'launch/templates/template6/js/jquery-migrate-1.2.1.min.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo WPSM_UC_PLUGIN_URL.'assets/js/bootstrap.min.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo WPSM_UC_PLUGIN_URL.'launch/templates/template6/js/jquery.backstretch.min.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo WPSM_UC_PLUGIN_URL.'launch/templates/template6/js/jquery.nicescroll.min.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo WPSM_UC_PLUGIN_URL.'launch/templates/template6/js/jquery.waitforimages.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo WPSM_UC_PLUGIN_URL.'launch/templates/template6/js/jquery.countdown.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo WPSM_UC_PLUGIN_URL.'launch/templates/template6/js/jquery.scrollTo.min.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo WPSM_UC_PLUGIN_URL.'launch/templates/template6/js/jquery.appear.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo WPSM_UC_PLUGIN_URL.'launch/templates/template6/js/main.js'; ?>"></script>
		
	
		<script>
			(function($) {
				//BEGIN DOCUMENT.READY FUNCTION
				jQuery(document).ready(function($) {

					// background sideshow calling script 
					function initPageBackground() {
						
						if( $('body').hasClass('slide-background') ) {
						
							$("body").backstretch([
								<?php for($i=0; $i<=$wpsm_uc_plugin_options_background['bg_slideshow_no']-1; $i++) { ?>
									"<?php echo $wpsm_uc_plugin_options_background['background_slides_'.$i];  ?>",
								<?php } ?>
							], {duration: 3000, fade: 1200});
						
						} else if($('body').hasClass('image-background')) {
						
							$("body").backstretch([
								"<?php echo $wpsm_uc_plugin_options_background['background_image']; ?>"
							]);
							
						} 
						
					}
					
					initPageBackground();
						
					<?php if($wpsm_uc_plugin_options_countdown['countdown_enable']=="on") {?>
					/* ------------------------------------------------------------------------ */
					/*	COUNTDOWN
					/* ------------------------------------------------------------------------ */
					if($.find('#counter')[0]) {
						$('#counter').countdown('<?php echo $wpsm_uc_plugin_options_countdown['countdown_date']; ?> <?php echo $wpsm_uc_plugin_options_countdown['countdown_time']; ?>').on('update.countdown', function(event) {
							var $this = $(this).html(event.strftime(''
								+ '<div class="counter-container"><div class="counter-box first"><div class="number">%-D</div><span><?php echo $wpsm_uc_plugin_options_countdown['days']; ?><span></div>'
								+ '<div class="counter-box"><div class="number">%H</div><span><?php echo $wpsm_uc_plugin_options_countdown['hours']; ?></span></div>'
								+ '<div class="counter-box"><div class="number">%M</div><span><?php echo $wpsm_uc_plugin_options_countdown['minutes']; ?></span></div>'
								+ '<div class="counter-box last"><div class="number">%S</div><span><?php echo $wpsm_uc_plugin_options_countdown['seconds']; ?></span></div></div>'
							));
						});
						$('#counter').countdown('<?php echo $wpsm_uc_plugin_options_countdown['countdown_date']; ?> <?php echo $wpsm_uc_plugin_options_countdown['countdown_time']; ?>').on('finish.countdown', function(event) {
						location.reload();
						});
					};
					<?php } ?>
					
					function fn_formValidation(email_address) {
						var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
						return pattern.test(email_address);
					}
					var $form = $('#signup-form');
					/* ------------------------------------------------------------------------ */
					/*	Start Javascript for Subscription Form
					/* ------------------------------------------------------------------------ */
					 $form.on('submit', function(e) {
						
						var email = $('#email').val();
						var nonce = $('#_wpnonce').val();
						e.preventDefault();
						
						if(email==""){
							$(".load_msg").fadeOut();
							$('#error-message').fadeIn();
							return false;
						}
						
						if (!fn_formValidation(email)) {
							$(".load_msg").fadeOut();
							$('#error-message').fadeIn();
							return false;
						}
						$(".load_msg").fadeIn();
						$.ajax({
							url:location.href,
							type :'POST',
							data: {
							wp_action:"wp_mail",  
							email: email,
						   _wpnonce: nonce,
							},
							
							success: function(data){
									$(".load_msg").fadeOut();
									$("#error-message").hide();
									$('#success-message').fadeIn();
								}
						})
						return false;
					});
								
					$('#email').focus(function(){
						$('#error-message').fadeOut();
						$('#success-message').fadeOut();
					});
					
					$('#email').keydown(function(){
						$('#error-message').fadeOut();
						$('#success-message').fadeOut();
					});

					$("#email").click(function() {
						$("#email").val('');
					});
					
				});
				//END DOCUMENT.READY FUNCTION

			})(jQuery);

		</script>
		<?php
			// retrieved nonce filed from on submit post data 
			if ( isset($_POST['_wpnonce'])) {
				
				$retrieved_nonce = $_REQUEST['_wpnonce'];
			
			}
			// verify nonce on $_POSt with email verification 
			if( isset($_POST['email']) && wp_verify_nonce($retrieved_nonce, 'email_nonce_field_action' )) {
				
				$email = sanitize_email($_POST['email']);
				$email = strtolower($email);
				
				$to_admin = sanitize_email($wpsm_uc_plugin_options_newsletter['email_add_of_admin']);
				$subject  = sanitize_text_field($wpsm_uc_plugin_options_newsletter['to_admin_mail_sub']);
				$message  = sanitize_text_field($wpsm_uc_plugin_options_newsletter['to_admin_mail_msg']) . "<br /> Subscriber Email - " . $email ;
				$from     = sanitize_email($wpsm_uc_plugin_options_newsletter['email_add_of_admin']);
				$headers  = "From:" . $from;
				
				$to_user  = $email;
				$subject1 = sanitize_text_field($wpsm_uc_plugin_options_newsletter['to_subs_mail_sub']);
				$message1 = sanitize_text_field($wpsm_uc_plugin_options_newsletter['to_subs_mail_msg']);
				$from1    = sanitize_text_field($wpsm_uc_plugin_options_newsletter['email_add_of_admin']);
				$headers1 = "From:" . $from1;
			
				wp_mail($to_admin,$subject,$message,$headers);
				wp_mail($to_user,$subject1,$message1,$headers1);
				
			}
		?>
	</body>
</html>