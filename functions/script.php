<?php 
function wpsm_uc_plugin_js_css()
{

    //enequeue scripts page for under construction plugin admin panel
	wp_enqueue_script('theme-preview');
	wp_enqueue_media();
    wp_enqueue_style('wp-color-picker');
	wp_enqueue_style('thickbox');
	wp_enqueue_style('wpsm_uc-bootstrap_css', WPSM_UC_PLUGIN_URL.'assets/css/bootstrap.css');
	wp_enqueue_style('wpsm_uc-wpsm_panel_css', WPSM_UC_PLUGIN_URL.'assets/css/wpsm-panel.css');
	wp_enqueue_style('wpsm_uc-font-awesome_min', WPSM_UC_PLUGIN_URL.'assets/css/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style('wpsm_uc-font-awesome-picker', WPSM_UC_PLUGIN_URL.'assets/css/fontawesome-iconpicker.css');
	
	//dailog pop css
	wp_enqueue_style('wpsm_uc-dialog', WPSM_UC_PLUGIN_URL.'assets/css/dialog/dialog.css');
	wp_enqueue_style('wpsm_uc-dialog-box-style', WPSM_UC_PLUGIN_URL.'assets/css/dialog/dialog-box-style.css');
	wp_enqueue_style('wpsm_uc-dialog-wilma', WPSM_UC_PLUGIN_URL.'assets/css/dialog/dialog-jamie.css');
	
	wp_enqueue_style('wpsm_uc-fv', WPSM_UC_PLUGIN_URL.'assets/css/fv.css');
	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'jquery-ui-sortable' );
	
    wp_enqueue_script( 'jquery-ui-sortable' );
	wp_enqueue_script('wpsm_uc-media-uploads',WPSM_UC_PLUGIN_URL.'assets/js/media-upload-script.js',array('media-upload','thickbox','jquery'));
	wp_enqueue_script('wpsm_uc-time-picker', WPSM_UC_PLUGIN_URL.'assets/js/jquery-ui-timepicker.js',array('jquery','jquery-ui-datepicker'));
	wp_enqueue_script('wpsm_uc-my-color-picker-script', WPSM_UC_PLUGIN_URL.'assets/js/my-color-picker-script.js', array( 'wp-color-picker' ), false, true );
	wp_enqueue_script('wpsm_uc-bootstrap_min_js',WPSM_UC_PLUGIN_URL.'assets/js/bootstrap.min.js');
	// Admin Settings Dashboard Js
	wp_enqueue_script('wpsm_uc-metisMenu',WPSM_UC_PLUGIN_URL.'assets/js/plugins/metisMenu/metisMenu.min.js');
	wp_enqueue_script('wpsm_uc-smartech',WPSM_UC_PLUGIN_URL.'assets/js/smartech.js',array('jquery'));
	
	wp_enqueue_script('wpsm_uc-sidebar_nav',WPSM_UC_PLUGIN_URL.'assets/js/ucp_sidebar_nav.js');
	wp_enqueue_script('wpsm_uc-font-icon-picker-js',WPSM_UC_PLUGIN_URL.'assets/js/fontawesome-iconpicker.js',array('jquery'));
	wp_enqueue_script('wpsm_uc-call-icon-picker-js',WPSM_UC_PLUGIN_URL.'assets/js/call-icon-picker.js',array('jquery'), false, true);
	
	// Multi select Dropdown Js
	wp_enqueue_script('wpsm_uc-bootstrap-multiselect-js',WPSM_UC_PLUGIN_URL.'assets/js/chosen.jquery.js');
	// Data Save Js
	wp_enqueue_script('wpsm_uc-ucp-option-data-save-js',WPSM_UC_PLUGIN_URL.'assets/js/ucp-option-data-save.js');
	// Data Field Validator Js
	wp_enqueue_script('wpsm_uc-ucp-validator-js',WPSM_UC_PLUGIN_URL.'assets/js/validator.js');
	
	wp_enqueue_style('wpsm_uc-jquery-ui-css', WPSM_UC_PLUGIN_URL.'assets/css/ucp_jquery-ui.css');
	
	//dailog pop js
	wp_enqueue_script('wpsm_uc-snap-svg-min',WPSM_UC_PLUGIN_URL.'assets/js/dialog/snap.svg-min.js');
	wp_enqueue_script('wpsm_uc-modernizr-custom',WPSM_UC_PLUGIN_URL.'assets/js/dialog/modernizr.custom.js');
	wp_enqueue_script('wpsm_uc-classie',WPSM_UC_PLUGIN_URL.'assets/js/dialog/classie.js');
	wp_enqueue_script('wpsm_uc-dialogFx',WPSM_UC_PLUGIN_URL.'assets/js/dialog/dialogFx.js'); 
	
}

add_action( 'admin_notices', 'wpsm_uc_review' );
function wpsm_uc_review() {

	// Verify that we can do a check for reviews.
	$review = get_option( 'wpsm_uc_review' );
	$time	= time();
	$load	= false;
	if ( ! $review ) {
		$review = array(
			'time' 		=> $time,
			'dismissed' => false
		);
		add_option('wpsm_uc_review', $review);
		//$load = true;
	} else {
		// Check if it has been dismissed or not.
		if ( (isset( $review['dismissed'] ) && ! $review['dismissed']) && (isset( $review['time'] ) && (($review['time'] + (DAY_IN_SECONDS * 2)) <= $time)) ) {
			$load = true;
		}
	}
	// If we cannot load, return early.
	if ( ! $load ) {
		return;
	}

	// We have a candidate! Output a review message.
	?>
	<div class="notice notice-info is-dismissible wpsm-uc-review-notice">
		<div style="float:left">
			<img style="width:100%;width: 129px;height: auto;" src="<?php echo WPSM_UC_PLUGIN_URL.'assets/images/thumb-icon.png'; ?>" />
		</div>
		<p style="font-size:16px;">'Hi! We saw you have been using <strong>Under Construction plugin</strong> for a few days and wanted to ask for your help to <strong>make the plugin better</strong>.We just need a minute of your time to rate the plugin. Thank you!</p>
		<p style="font-size:16px;"><strong><?php _e( '~ wpshopmart', '' ); ?></strong></p>
		<p style="font-size:17px;"> 
			<a style="color: #fff;background: #ef4238;padding: 10px 13px 8px 13px;border-radius: 4px;font-size: 19px;font-weight: 600;" href="https://wordpress.org/support/plugin/under-construction-site/reviews/?filter=5" class="wpsm-uc-dismiss-review-notice wpsm-uc-review-out" target="_blank" rel="noopener"><?php _e( 'Help make the plugin better by rating it', '' ); ?></a>&nbsp; &nbsp;
			<a style="color: #fff;background: #27d63c;padding: 10px 13px 8px 13px;border-radius: 4px;font-size: 19px;font-weight: 600;" href="#"  class="wpsm-uc-dismiss-review-notice wpsm-rate-later" target="_self" rel="noopener"><?php _e( 'Nope, maybe later', '' ); ?></a>&nbsp; &nbsp;
			<a style="color: #fff;background: #31a3dd;padding: 10px 13px 8px 13px;border-radius: 4px;font-size: 19px;font-weight: 600;" href="#" class="wpsm-uc-dismiss-review-notice wpsm-rated" target="_self" rel="noopener"><?php _e( 'I already did', '' ); ?></a>
		</p>
	</div>
	<script type="text/javascript">
		jQuery(document).ready( function($) {
			$(document).on('click', '.wpsm-uc-dismiss-review-notice, .wpsm-uc-dismiss-notice .notice-dismiss', function( event ) {
				if ( $(this).hasClass('wpsm-uc-review-out') ) {
					var wpsm_rate_data_val = "1";
				}
				if ( $(this).hasClass('wpsm-rate-later') ) {
					var wpsm_rate_data_val =  "2";
					event.preventDefault();
				}
				if ( $(this).hasClass('wpsm-rated') ) {
					var wpsm_rate_data_val =  "3";
					event.preventDefault();
				}

				$.post( ajaxurl, {
					action: 'wpsm_uc_dismiss_review',
					wpsm_rate_data_uc : wpsm_rate_data_val
				});
				
				$('.wpsm-uc-review-notice').hide();
				//location.reload();
			});
		});
	</script>
	<?php
}

add_action( 'wp_ajax_wpsm_uc_dismiss_review', 'wpsm_uc_dismiss_review' );
function wpsm_uc_dismiss_review() {
	if ( ! $review ) {
		$review = array();
	}
	
	if($_POST['wpsm_rate_data_uc']=="1"){
		
	}
	if($_POST['wpsm_rate_data_uc']=="2"){
		$review['time'] 	 = time();
		$review['dismissed'] = false;
		update_option( 'wpsm_uc_review', $review );
		die;
	}
	if($_POST['wpsm_rate_data_uc']=="3"){
		$review['time'] 	 = time();
		$review['dismissed'] = true;
		update_option( 'wpsm_uc_review', $review );
		die;
		
	}
	
}

?>