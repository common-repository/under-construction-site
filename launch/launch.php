<?php
		if ( ! defined( 'ABSPATH' ) ) exit;	
			//Live Preview code
			if (  (isset($_GET['wpsm_uc_preview']) && $_GET['wpsm_uc_preview'] == 'true') )
			{ 	
				
				$file = plugin_dir_path( __FILE__ )."templates/template6/preview.php";
				include($file);
				exit();
			}
			
			function wpsm_uc_launch()
			{
				$wpsm_uc_plugin_options_dashboard = unserialize(get_option('wpsm_uc_plugin_options_dashboard'));
				$wpsm_csp_status = $wpsm_uc_plugin_options_dashboard['wpsm_csp_status'];
				
				if($wpsm_csp_status=="1")
				{	
					// Exit if a custom login page
					if(preg_match("/login|admin|dashboard|account/i",$_SERVER['REQUEST_URI']) > 0 ){
						return false;
					}
					
					// Check if user is logged in.
	            	if (!is_user_logged_in())
                	{
                        $file = plugin_dir_path( __FILE__ )."templates/template6/index.php";
						include($file);
						exit();
                	}
					else{
						
						$wp_get_current_user =  wp_get_current_user();
						$LoggedInUserID = $wp_get_current_user->ID;
						$UserData = get_userdata( $LoggedInUserID );	
						//if user role not 'administrator' then redirect page 
						if($UserData->roles[0] != "administrator")
						{
							$file = plugin_dir_path( __FILE__ )."templates/template6/index.php";
							include($file);
							exit();
						}
						
						
					}
				}
				else{
					return false;
				}
				
            }
			
			add_action( 'template_redirect', 'wpsm_uc_launch' );
			
					
			add_action('admin_bar_menu', 'wpsm_uc_admin_bar_menu', 1000);
			function wpsm_uc_admin_bar_menu()
			{
				
				global $wp_admin_bar;
				$wpsm_uc_plugin_options_dashboard = unserialize(get_option('wpsm_uc_plugin_options_dashboard'));
				$wpsm_uc_status = $wpsm_uc_plugin_options_dashboard['wpsm_csp_status'];
				if($wpsm_uc_status=='0') return;
				$msg = __('Under Construction Mode Active','');
				// Add Parent Menu
				$argsParent=array(
					'id' => 'myCustomMenu',
					'title' => $msg,
					'parent' => 'top-secondary',
					'href' => 'options-general.php?page=wpsm_uc',
					'meta'   => array( 'class' => 'wpsm_uc_active' ),
				);
				$wp_admin_bar->add_menu($argsParent);
				?>
				<style>
					.wpsm_uc_active a{
						background: #1e73be !important;
						color: #fff !important;
					}
					.wpsm_uc_active a:hover{
						background: #1e73be !important;
						color: #fff !important;
					}

				</style>
				<?php
			   
			}

 ?>