<?php 	/******************* DASHBOARD *************************************	********************************************************************/			$wpsm_uc_plugin_options_dashboard = array( 'wpsm_csp_status' => "0" );	add_option("wpsm_uc_plugin_options_dashboard", serialize($wpsm_uc_plugin_options_dashboard));		/******************* TEMPLATES *************************************	********************************************************************/				$wpsm_uc_plugin_options_templates = array( 'templates' => "1" );	add_option("wpsm_uc_plugin_options_templates", serialize($wpsm_uc_plugin_options_templates));			/******************* GENERAL SETTINGS *******************************	********************************************************************/				$default_url =  WPSM_UC_PLUGIN_URL.'assets/img/bg.jpg'; 	$default_url2 =  WPSM_UC_PLUGIN_URL.'assets/img/wp.png'; 			$wpsm_uc_plugin_options_general = array( 		'rcsp_logo_url' => $default_url2,		'logo_width' => "195",		'logo_height' => "195",		'logo_enable' => "on",		'rcsp_headline' => "Under Construction",		'rcsp_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id dolor dui, dapibus gravida elit. Donec conseenigmat laore gittis. Suspendisse ultricies ultrices viverra. Morbi rhoncus laoreet tincidunt. Mauris interdum convallis metus. Suspendiss lacus est.",		'home_sec_link_txt' => "Home",	);		add_option("wpsm_uc_plugin_options_general", serialize($wpsm_uc_plugin_options_general));			/******************* HEADER SETTINGS *******************************	********************************************************************/				$wpsm_uc_plugin_options_header = array( 		'favicon' => $default_url2,		'meta_title' => "Under Construction",		'meta_desc' => "",		'google_al' => "",	);		add_option("wpsm_uc_plugin_options_header", serialize($wpsm_uc_plugin_options_header));			/******************* COUNTDOWN SETTINGS *******************************	********************************************************************/				$wpsm_uc_plugin_options_countdown = array( 		'countdown_enable' => "on",		'countdown_date' => "2018/11/22",		'countdown_time' => "10:50",		'days' => "Days",		'hours' => "Hours",		'minutes' => "Minutes",		'seconds' => "Seconds",	);		add_option("wpsm_uc_plugin_options_countdown", serialize($wpsm_uc_plugin_options_countdown));			/******************* BACKGROUND SETTINGS *******************************	********************************************************************/				$wpsm_uc_plugin_options_background = array( 		'select_background' => "bg_image",		'background_color' => "#31a3dd",		'background_image' => $default_url,		'bg_slideshow_no' => "3",		'background_slides_0' => $default_url,		'background_slides_1' => $default_url,		'background_slides_2' => $default_url,		'background_slides_3' => $default_url,		'background_slides_4' => $default_url,	);		add_option("wpsm_uc_plugin_options_background", serialize($wpsm_uc_plugin_options_background));			/******************* TEXT AND COLOR SETTINGS *******************************	********************************************************************/				$wpsm_uc_plugin_options_text_and_color = array( 		'headeline_ft_clr' => "#ffffff",		'desc_ft_clr' => "#ffffff",		'sb_btn_ft_clr' => "#ffffff",		'sb_btn_bg_clr' => "#1e73be",		'cnd_timer_clr' => "#ffffff",		'social_icon_clr' => "#ffffff",		'headline_ft_size' => "50",		'desc_ft_size' => "19",		'ser_title_ft_size' => "22",		'ser_desc_ft_size' => "19",		'headlines_ft_stl' => "sans-serif",		'desc_ft_stl' => "sans-serif",			);		add_option("wpsm_uc_plugin_options_text_and_color", serialize($wpsm_uc_plugin_options_text_and_color));			/******************* CUSTOM CSS SETTINGS *******************************	********************************************************************/				$wpsm_uc_plugin_options_custom_css = array( 		'custom_css' => "",			);		add_option("wpsm_uc_plugin_options_custom_css", serialize($wpsm_uc_plugin_options_custom_css));			/******************* SOCIAL SETTINGS *******************************	********************************************************************/				$wpsm_uc_plugin_options_social = array( 		'social0'=>"#",		'social1'=>"#",		'social2'=>"#",		'social3'=>"#",		'social4'=>"#",		'social5'=>"#",		'social6'=>"#",	);		add_option("wpsm_uc_plugin_options_social", serialize($wpsm_uc_plugin_options_social));			/******************* ABOUT US *******************************	********************************************************************/				$wpsm_uc_plugin_options_about_us = array( 		'about_us_enable' => "on",		'about_btn_label' => "About",		'about_btn_icon' => "fa-user",		'about_section_title' => "About Us",		'about_section_desc' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id dolor dui, dapibus gravida elit. Donec conseenigmat laore gittis. Suspendisse ultricies ultrices viverra. Morbi rhoncus laoreet tincidunt. Mauris interdum convallis metus. Suspendiss lacus est.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id dolor dui, dapibus gravida elit. Donec conseenigmat laore gittis. Suspendisse ultricies ultrices viverra. Morbi rhoncus laoreet tincidunt. Mauris interdum convallis metus. Suspendiss lacus est.",			);		add_option("wpsm_uc_plugin_options_about_us", serialize($wpsm_uc_plugin_options_about_us));			/******************* CONTACT INFO *******************************	********************************************************************/				$wpsm_uc_plugin_options_contact_us = array( 		'contact_us_enable' => "on",		'contact_us_section_btn_label' => "Contact",		'contact_us_section_btn_icon' => "fa-envelope-o",		'contact_us_section_title' => "Contact Info",		'contact_us_section_title_desc' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id dolor dui, dapibus gravida elit. Donec conseenigmat laore gittis. Suspendisse ultricies ultrices viverra.",		'contact_info_address' => "123 Street, City",		'contact_info_number' => "(00) 123-4567890",		'contact_info_email_address' => "email@example.com",			);		add_option("wpsm_uc_plugin_options_contact_us", serialize($wpsm_uc_plugin_options_contact_us));		/******************* Services *******************************	********************************************************************/				$wpsm_uc_plugin_options_service = array( 		'service_enable' => "on",		'service_btn_label' => "Services",		'service_btn_icon' => "fa-cogs",		'service_section_title' => "Our Services",		'service_section_desc' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id dolor dui, dapibus gravida elit. Donec conseenigmat laore gittis. Suspendisse ultricies ultrices viverra. Morbi rhoncus laoreet tincidunt. Mauris interdum convallis metus. Suspendiss lacus est.",		'service_layout' => 2,		'service_number' => 2,		'service_icon0'=> 'fa-android',		'service_title0'=> 'Service Title',		'service_description0'=> 'eleifend porttitor augue elit laoreet mauris ultricies dui nec mi vestibulum molestie.',		'service_icon1'=> 'fa-automobile',		'service_title1'=> 'Service Title',		'service_description1'=> 'eleifend porttitor augue elit laoreet mauris ultricies dui nec mi vestibulum molestie.',		'service_icon2'=> 'fa-bell-o',		'service_title2'=> 'Service Title',		'service_description2'=> 'eleifend porttitor augue elit laoreet mauris ultricies dui nec mi vestibulum molestie.',		'service_icon3'=> 'fa-calendar',		'service_title3'=> 'Service Title',		'service_description3'=> 'eleifend porttitor augue elit laoreet mauris ultricies dui nec mi vestibulum molestie.',	);		add_option("wpsm_uc_plugin_options_service", serialize($wpsm_uc_plugin_options_service));			/******************* NEWSLETTER SETTINGS ****************************	********************************************************************/				$wpsm_uc_plugin_options_newsletter = array( 		'wpsm_uc_newsletter_dropdown' => "0",		'to_subs_mail_sub' => "wpshopmart Under Construction page",		'to_subs_mail_msg' => "Thanks for submitting your email. We will notify you once we launch",		'to_admin_mail_sub' => "From Wpshopmart Under Construction page",		'to_admin_mail_msg' => "Hey Some one has subscribed to the Coming Soon page",		'email_add_of_admin' => "",					);		add_option("wpsm_uc_plugin_options_newsletter", serialize($wpsm_uc_plugin_options_newsletter));	/******************* SUBSCRIBER FIELD SETTINGS ****************************	********************************************************************/				$wpsm_uc_plugin_options_subscription_field = array( 		'subscription_field_link_button_label' => "Subscribe",		'subscription_field_link_button_icon' => "fa-paper-plane",		'subscription_field_section_title' => "Subscribe Us Here",		'subscription_field_section_desc' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id dolor dui, dapibus gravida elit. Donec conseenigmat laore gittis. Suspendisse ultricies ultrices viverra.",		'email_field_pl_hold_text' => "Enter Your Email",		'subs_me_button_label' => "Subscribe Now",		'success_subs_notification_text' => "Thank you for subscribing Us",		'invalid_email_notification_text' => "Invalid Email , Please enter valid Email",					);		add_option("wpsm_uc_plugin_options_subscription_field", serialize($wpsm_uc_plugin_options_subscription_field));		?>