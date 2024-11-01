<!-- Dashboard Settings panel content --- >
<!----------------------------------------> 	
<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
$wpsm_uc_plugin_options_dashboard = unserialize(get_option('wpsm_uc_plugin_options_dashboard'));	
?>
<script>
	function ucp_mode(status){

		if(status.value=="3"){
			jQuery(".redirect_url_form").show(500);
		}
		else{
			jQuery(".redirect_url_form").hide(500);
		}
	}
</script>
<div class="row">
	
	<div class="post-social-wrapper clearfix">
		<div class="col-md-12 post-social-item heading-item">
			<div class="panel panel-default heading-item-default">
				<div class="panel-heading padding-none">
					<div class="post-social post-social-xs" id="post-social-5">
						<div class="text-center padding-all text-center">
							<div class="textbox text-white   margin-bottom settings-title">
								<?php _e('Under Construction Dashboard ','WPSM_UC_TEXT_DOMAIN'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<form method="post" id="wpsm_uc_plugin_options_dashboard" novalidate>
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Under Construction Status','WPSM_UC_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="Enable Your Under Construction Mode here" style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<?php $wpsm_csp_status = $wpsm_uc_plugin_options_dashboard['wpsm_csp_status']; ?>
						<td>
							<span>
								<input type="radio" name="wpsm_csp_status" value="0" id="wpsm_csp_status" onclick="ucp_mode(this);" <?php if($wpsm_csp_status == "0") { echo "checked"; } ?> />&nbsp;<?php _e('Disable','WPSM_UC_TEXT_DOMAIN'); ?><br>
							</span>
							<span>	
								<input type="radio" name="wpsm_csp_status" value="1" id="wpsm_csp_status" onclick="ucp_mode(this);" <?php if($wpsm_csp_status == "1") { echo "checked"; } ?>  />&nbsp;<?php _e('Enable','WPSM_UC_TEXT_DOMAIN'); ?><br>
							</span>
							
						</td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td >
							<h4><a style="text-decoration: underline;" href="http://wpshopmart.com/plugins/coming-soon-pro/" target="_blank">Unlock Maintenance Mode And Website Redirect Mode In pro version Buy Now</a></h4>
						</td>
					</tr>					
				</table>
			</div>
		</div>
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Under Construction Plugin Live Demo For Help','WPSM_UC_TEXT_DOMAIN'); ?></th>
						
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<a style="color:#fff" href="http://demo.wpshopmart.com/under-construction-plugin-demo/" class="btn btn-primary btn-lg" target="_blank">Check Live Demo</a>
						</td>
					</tr>					
				</table>
			</div>
		</div>
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Need Help ','WPSM_UC_TEXT_DOMAIN'); ?></th>
						
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
						<style>
						
							.wpsm-rate-us{
							text-align:center;
							width:100%;
							}
							.wpsm-rate-us span.dashicons {
								width: 40px;
								height: 40px;
								font-size:20px;
								color : #31a3dd !important;
							}
							.wpsm-rate-us span.dashicons-star-filled:before {
								content: "\f155";
								font-size: 40px;
							}
							.wpsm-rate-us span{
								display:inline-block
							}
							 .button-hero{
								background: #fff;
								color: #000;
								box-shadow: none;
								text-shadow: none;
								font-weight: 900;
								font-size: 23px;
								border:1px solid #000;
								
							}
							 .button-hero{
								display:block;
								text-align:center;
								margin-bottom:15px;
							}
						</style>
							
							<a href="https://wordpress.org/support/plugin/under-construction-site" target="_blank" class="button button-primary button-hero ">Get Support</a>
						</td>
					</tr>					
				</table>
			</div>
		</div>
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Follow Us Here','WPSM_UC_TEXT_DOMAIN'); ?></th>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<style>
							.follow_icon li {   
								margin-right: 8px;
								margin-left: 8px;
								font-size: 20px;
								display: inline-block;
								width:40px;
								height:40px;
								text-align:center;
								line-height: 38px;
							}
							.follow_icon li a {
								color:#fff;
							}
							
							</style>
							<ul class="follow_icon">
								<li  style="background: rgb(59, 89, 152);">
									<a href="https://www.facebook.com/wpshopmart/" target="_blank"><i class="fa fa-facebook"></i></a>
								</li>
								<li  style="background: rgb(0, 172, 237);">
									<a href="https://twitter.com/wpshopmart1" target="_blank"><i class="fa fa-twitter"></i></a>
								</li>
								<li  style="background: rgb(196, 50, 32);">
									<a href="https://plus.google.com/u/0/108719707535083220625" target="_blank"><i class="fa fa-google-plus"></i></a>
								</li>
								<li  style="background: rgb(178, 7, 14)">
									<a href="https://www.youtube.com/channel/UCkXM_n1r869EVpAaatHnXcw" target="_blank"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
						</td>
					</tr>					
				</table>
			</div>
		</div>
		
		
	</form>

	<div class="panel panel-primary save-button-block">
		<div class="panel-body">
			<div class="pull-left">
				<button type="button" class="btn btn-info btn-lg" onclick="wpsm_uc_option_data_save('dashboard')"><?php _e('Save Changes','WPSM_UC_TEXT_DOMAIN'); ?></button>
			</div>
			<div class="pull-right">
				<button type="button" class="btn btn-primary btn-lg" onclick="wpsm_uc_option_data_reset('dashboard')"><?php _e('Reset Default','WPSM_UC_TEXT_DOMAIN'); ?></button>
			</div>
		</div>
	</div>
	
</div>