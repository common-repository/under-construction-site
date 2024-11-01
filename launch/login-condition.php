<?php
		if ( ! defined( 'ABSPATH' ) ) exit;
		// Check if user is logged in.
		if (!is_user_logged_in())
		{
			require_once('redirect.php');
		}
		else{
			
			$wp_get_current_user =  wp_get_current_user();
			$LoggedInUserID = $wp_get_current_user->ID;
			$UserData = get_userdata( $LoggedInUserID );	
			//if user role not 'administrator' then redirect page 
			if($UserData->roles[0] != "administrator")
			{
				require_once('redirect.php');
			}
			
		}

 ?>