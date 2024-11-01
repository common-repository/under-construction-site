<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
$wpsm_uc_plugin_options_service = unserialize(get_option('wpsm_uc_plugin_options_service'));	
?>	
	<script>
		function select_services_no(status){
		
			if(status.value=='1'){
				jQuery(".rcsp_services_wrapper").hide(500);
			}
			else{
				value1 = status.value-1; 
				for(i=0;i<=9;i++)
				{
					if(i<=value1)
					{
						jQuery("#rcsp_services_wrapper_"+i).show(500);
					}
					else
					{
						jQuery("#rcsp_services_wrapper_"+i).hide(500);
					}				
				}
				
			}
		}
		function services_enable(status){
		
				if(status.value=='on')
			    {
					jQuery(".service_section").show(500);
				}
			   else
				{
				  jQuery(".service_section").hide(500);
			    }
		}
	</script>
	<style>
		<?php if($wpsm_uc_plugin_options_service['service_enable']!="on") { ?>
		.service_section{
			display:none;
		}
		<?php } ?>
	</style>
	<div class="row">
		<div class="post-social-wrapper clearfix">
			<div class="col-md-12 post-social-item heading-item">
				<div class="panel panel-default heading-item-default">
					<div class="panel-heading padding-none">
						<div class="post-social post-social-xs" id="post-social-5">
							<div class="text-center padding-all text-center">
								
								<div class="textbox text-white   margin-bottom settings-title">
									Service Section Settings 
								
								</div>
							   
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		   
		</div>
		<form method="post" id="wpsm_uc_plugin_options_service" >
			<div class="panel panel-primary panel-default content-panel">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Display Service Section','WPSM_UC_TEXT_DOMAIN')?></th>
							<td style="text-align:right;" >
								<i title="Hide/display your Service Section here " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
							</td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td>
								<?php  $service_enable = $wpsm_uc_plugin_options_service['service_enable']; ?>
								<div class="switch">
									<input type="radio" class="switch-input" name="service_enable" value="on" id="enable_service"  <?php if($service_enable == "on") { echo "checked"; } ?>  onclick="services_enable(this);">
									<label for="enable_service" class="switch-label switch-label-off">Yes</label>
									<input type="radio" class="switch-input" name="service_enable" value="off" id="disable_service" <?php if($service_enable == "off") { echo "checked"; } ?> onclick="services_enable(this);">
									<label for="disable_service" class="switch-label switch-label-on">No</label>
									<span class="switch-selection"></span>
								</div>
								
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="panel panel-primary panel-default content-panel service_section">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Services Button/Menu Label','')?></th>
							<td style="text-align:right;" >
								<i title="Enter your service menu text here " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
							</td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td>
								<input type="text" class="pro_text" id="service_btn_label" name="service_btn_label" placeholder="<?php _e('Enter service button text','WPSM_UC_TEXT_DOMAIN')?>" size="56" value="<?php echo $wpsm_uc_plugin_options_service['service_btn_label']; ?>" />
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			
			<div class="panel panel-primary panel-default content-panel service_section">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Services Button/Menu Icon','')?></th>
							<td style="text-align:right;" >
								<i title="Select your service menu Icon here " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
							</td>
						</tr>
						<tr class="" style="border-bottom:none;">
							<td>
								<!-- Modal -->
								<div class="form-group input-group">
									<input data-placement="bottomRight" id="service_btn_icon" name="service_btn_icon" class="form-control icp icp-auto" value="<?php echo $wpsm_uc_plugin_options_service['service_btn_icon']; ?>" type="text" readonly="readonly" />
									<span class="input-group-addon "></span>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="panel panel-primary panel-default content-panel service_section">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Services Section Title','WPSM_UC_TEXT_DOMAIN')?></th>
							<td style="text-align:right;" >
								<i title="Select your service Section Title here " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
							</td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td>
								<input type="text" class="pro_text" id="service_section_title" name="service_section_title" placeholder="<?php _e('Enter Service Section Title','')?>" size="56" value="<?php echo $wpsm_uc_plugin_options_service['service_section_title']; ?>" />
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="panel panel-primary panel-default content-panel service_section">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Services Description','WPSM_UC_TEXT_DOMAIN')?></th>
							<td style="text-align:right;" >
								<i title="Select your service Section Description here " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
							</td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td>
								<textarea rows="6"  class="pro_text" id="service_section_desc" name="service_section_desc" placeholder="<?php _e('Enter Your Service Section Description Here...','')?>"><?php echo $wpsm_uc_plugin_options_service['service_section_desc']; ?></textarea>
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="panel panel-primary panel-default content-panel service_section">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Services Display layout','WPSM_UC_TEXT_DOMAIN')?></th>
							<td style="text-align:right;" >
								<i title="Select your services display column layout " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
							</td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td>
								<?php $service_layout =  $wpsm_uc_plugin_options_service['service_layout']; ?>  
								<select id="service_layout" class="standard-dropdown" name="service_layout"  >
									<option value="2" <?php if($service_layout == "2") { echo "selected"; } ?> ><?php _e('2 Column','')?></option>
									<option value="3" <?php if($service_layout == "3") { echo "selected"; } ?> ><?php _e('3 Column','')?></option>
									<option disabled  ><?php _e('4 Column Available in pro','')?></option>
								</select>
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="panel panel-primary panel-default content-panel service_section">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Select No. Of Services For Display','WPSM_UC_TEXT_DOMAIN')?></th>
							<td style="text-align:right;" >
								<i title="Select no. of service you want to display on page " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
							</td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td>
								<?php $service_number =  $wpsm_uc_plugin_options_service['service_number']; ?>
								<select id="service_number" class="standard-dropdown" name="service_number" onchange="select_services_no(this)"  >
									
									<option value="1" <?php if($service_number == "1") { echo "selected"; } ?> ><?php _e('Select Number Of Services','')?> </option>
									<option value="2" <?php if($service_number == "2") { echo "selected"; } ?> ><?php _e('2','')?> </option>
									<option value="3" <?php if($service_number == "3") { echo "selected"; } ?> ><?php _e('3','')?> </option>
									<option value="4" <?php if($service_number == "4") { echo "selected"; } ?> ><?php _e('4','')?> </option>
									<option disabled  ><?php _e('5 (Available in pro)','')?></option>
									<option disabled  ><?php _e('6 (Available in pro)','')?></option>
									<option disabled  ><?php _e('7 (Available in pro)','')?></option>
									<option disabled  ><?php _e('8 (Available in pro)','')?></option>
									<option disabled  ><?php _e('9 (Available in pro)','')?></option>
									<option disabled  ><?php _e('10 (Available in pro)','')?></option>	
								</select>
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="panel panel-primary panel-default content-panel service_section">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Create/Add Your Services','')?></th>
							<td style="text-align:right;" >
								<i title="Add or Update your services titles, descriptions and icons here " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
							</td>
						</tr>
						<tr  style="border-bottom:none;">
							<td style="width:100% !important">
							<?php
							for($j=0;$j<=3;$j++)
							{
							?>
								<div class="col-md-4 rcsp_services_wrapper" id="rcsp_services_wrapper_<?php echo $j; ?>" style="display:<?php if($service_number=="1"){echo "none";}elseif($j > ($service_number-1)) echo "none";?>">
									<div class="rcsp-image-entry" >
										
										<div class="form-group input-group">
											<input data-placement="bottomRight" name="service_icon<?php echo $j; ?>" id="service_icon<?php echo $j; ?>" class="form-control icp icp-auto" value="<?php echo $wpsm_uc_plugin_options_service['service_icon'.$j]; ?>" type="text" readonly="readonly" />
											<span class="input-group-addon "></span>
										</div>
							
										<input type="text" id="image_label" name="service_title<?php echo $j ?>" placeholder="Enter Your Service Title" class="rcsp_label_text" value="<?php echo $wpsm_uc_plugin_options_service['service_title'.$j]; ?>">
										<textarea rows="6"  class="pro_text" id="service_description<?php echo $j ?>" name="service_description<?php echo $j ?>" placeholder="<?php _e('Enter Your Service Description Here...','')?>"><?php echo $wpsm_uc_plugin_options_service['service_description'.$j]; ?></textarea>
							
									</div>
								</div>
							<?php 
							} ?>	
								
								
							</td>
							
						</tr>
						
						<tr class="radio-span" style="border-bottom:none;">
							<td >
								<h4><a style="text-decoration: underline;" href="http://wpshopmart.com/plugins/coming-soon-pro/" target="_blank">Unlock More 6+ services In pro version Buy Now</a></h4>
							</td>
						</tr>
						
					</table>
				</div>
			</div>
		</form>	
		
		
		<div class="panel panel-primary save-button-block">
			<div class="panel-body">
				<div class="pull-left">
					<button type="button" class="btn btn-info btn-lg" onclick="wpsm_uc_option_data_save('service')">Save Changes</button>
				</div>
				<div class="pull-right">
					<button type="button" class="btn btn-primary btn-lg" onclick="wpsm_uc_option_data_reset('service')">Reset Default</button>
				</div>
			</div>
		</div>	
					
							

	</div>
	<!-- /row -->