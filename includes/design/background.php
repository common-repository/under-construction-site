<!-- Background Settings panel content --- >
<!----------------------------------------> 
<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
$wpsm_uc_plugin_options_background = unserialize(get_option('wpsm_uc_plugin_options_background'));	
?>
<script>
	function select_backgrounds(){
		var active_nl = jQuery("#select_background").val();
		jQuery(".rcsp_background").hide(500);
		jQuery("#"+active_nl).show(500);
	}
	function select_slides_no(status){
		if(status.value=='1'){
			jQuery(".rscp_slides_bg").hide(500);
		}
		else{
			value1 = status.value-1; 
			for(i=0;i<=4;i++)
			{
				if(i<=value1)
				{
					jQuery("#rcsp_sl_bg_"+i).show(500);
				}
				else
				{
					jQuery("#rcsp_sl_bg_"+i).hide(500);
				}				
			}
			
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
								  <?php _e('Under Construction Page Background Settings','WPSM_UC_TEXT_DOMAIN'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<form method="post" id="wpsm_uc_plugin_options_background" >
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Select Background','WPSM_UC_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="Select your coming soon page background option here from - color , image or slideshow" style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<?php $background_status = $wpsm_uc_plugin_options_background['select_background']; ?>
							<select id="select_background" class="standard-dropdown" name="select_background" onchange="select_backgrounds()" >
								<optgroup label="Select background">
								<option value="bg_color" <?php if($background_status == "bg_color") { echo "selected"; } ?>><?php _e('Static Background Color','')?></option>
								<option value="bg_image" <?php if($background_status == "bg_image") { echo "selected"; } ?>><?php _e('Static Background Image','')?></option>
								<option value="bg_slideshow" <?php if($background_status == "bg_slideshow") { echo "selected"; } ?>><?php _e('Background SlideShow','')?></option>
								<option disabled value="video" ><?php _e('Youtube Video Background (Available in pro)','')?></option>
								
								</optgroup>
							</select>
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		<div class="rcsp_background" id="bg_color" <?php if($background_status!="bg_color"){ ?> style="display:none;" <?php } ?>>
		
			<div style="margin-bottom: 10px;">
				<img src="<?php echo WPSM_UC_PLUGIN_URL.'/assets/images/background-color1.png'; ?>" class="img-responsive" style="margin-right: auto;" alt="" >
			</div>
			
			<div class="panel panel-primary panel-default content-panel">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Background Color','WPSM_UC_TEXT_DOMAIN'); ?></th>
							<td style="text-align:right;" >
								<i title="update your background color here" style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
							</td>
						</tr>
						<tr  style="border-bottom:none;">
							<td>
								<input id="background_color" name="background_color" type="text" value="<?php echo $wpsm_uc_plugin_options_background['background_color']; ?>" class="my-color-field" data-default-color="#ffffff" />
				   
							</td>
						</tr>
						
					</table>
				</div>
			</div>
			
			
		</div>
		
		<div class="rcsp_background" id="bg_image" <?php if($background_status!="bg_image"){ ?> style="display:none;" <?php } ?>>
		
			<div style="margin-bottom: 10px;">
				<img src="<?php echo WPSM_UC_PLUGIN_URL.'/assets/images/background-image.png'; ?>" class="img-responsive"  style="margin-right: auto;" >
			</div>
			
			<div class="panel panel-primary panel-default content-panel">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Background Image','WPSM_UC_TEXT_DOMAIN'); ?></th>
							<td style="text-align:right;" >
								<i title="update your coming soon background image here " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
							</td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td>
								<div class="col-md-6">
									<div class="rcsp-image-entry" >
										<img src="<?php if($wpsm_uc_plugin_options_background['background_image']!=''){ echo $wpsm_uc_plugin_options_background['background_image']; } ?>" />
										<input type="button"  name="upload-background" value="Upload Image Here" class="button-primary rcsp_media_upload"  />
										<input type="text" id="background_image" name="background_image" class="rcsp_label_text"  value="<?php echo $wpsm_uc_plugin_options_background['background_image']; ?>"  readonly="readonly" placeholder="<?php _e('No Media Selected','WPSM_UC_TEXT_DOMAIN'); ?>" />
									</div>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
			
		</div>
		
		<div class="rcsp_background" id="bg_slideshow" <?php if($background_status!="bg_slideshow"){ ?> style="display:none;" <?php } ?>>
		
			<div style="margin-bottom: 10px;">
				<img src="<?php echo WPSM_UC_PLUGIN_URL.'/assets/images/background-slideshow.png'; ?>" class="img-responsive"  style="margin-right: auto;" >
			</div>
			
			<div class="panel panel-primary panel-default content-panel">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('No. Of Background Slideshow','WPSM_UC_TEXT_DOMAIN'); ?></th>
							<td style="text-align:right;" >
								<i title="Select number of background slideshow images for coming soon background " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
							</td>
						</tr>
						<tr  style="border-bottom:none;">
							<td>
								<?php $bg_slideshow_no = $wpsm_uc_plugin_options_background['bg_slideshow_no']; ?>
							
								<select id="bg_slideshow_no" class="standard-dropdown" name="bg_slideshow_no" onchange="select_slides_no(this)" >
									
										<option value="2" <?php if($bg_slideshow_no == "2") { echo "selected"; } ?>><?php _e('2','')?> </option>
										<option value="3" <?php if($bg_slideshow_no == "3") { echo "selected"; } ?>><?php _e('3','')?> </option>
										<option value="4" <?php if($bg_slideshow_no == "4") { echo "selected"; } ?>><?php _e('4','')?> </option>
										<option value="5" <?php if($bg_slideshow_no == "5") { echo "selected"; } ?>><?php _e('5','')?> </option>
										<option disabled  ><?php _e('6','')?></option>
										<option disabled  ><?php _e('7','')?></option>
										<option disabled  ><?php _e('8','')?></option>
										<option disabled  ><?php _e('9','')?></option>
										<option disabled  ><?php _e('10','')?></option>
									
								</select>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="panel panel-primary panel-default content-panel">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Create Background Sideshow','WPSM_UC_TEXT_DOMAIN'); ?></th>
							<td style="text-align:right;" >
								<i title="update here your background slideshow images  " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
							</td>
						</tr>
						<tr  style="border-bottom:none;">
							<td style="width:100% !important">
							<?php 
							for($i=0; $i<=4; $i++)
							{
							?>
								<div class="col-md-4 rscp_slides_bg" id="rcsp_sl_bg_<?php echo $i; ?>" style="display:<?php if($bg_slideshow_no=="1"){echo "none";}elseif($i > ($bg_slideshow_no-1)) echo "none";?>" >
									
									<div class="rcsp-image-entry" >
										<img src="<?php if($wpsm_uc_plugin_options_background['background_slides_'.$i]!=''){ echo $wpsm_uc_plugin_options_background['background_slides_'.$i]; } ?>" />
										<input type="button"  name="upload-background" value="Upload Image Here" class="button-primary rcsp_media_upload"  />
										<input type="text" id="background_slides_<?php echo $i; ?>" name="background_slides_<?php echo $i; ?>" class="rcsp_label_text"  value="<?php echo $wpsm_uc_plugin_options_background['background_slides_'.$i]; ?>"  readonly="readonly" placeholder="<?php _e('No Media Selected','WPSM_UC_TEXT_DOMAIN'); ?>" value="" />
									</div>
								</div>
							<?php } ?>	
							</td>
																						
						</tr>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td >
								<h4><a style="text-decoration: underline;" href="http://wpshopmart.com/plugins/coming-soon-pro/" target="_blank">Unlock More 5+ background Slideshow In pro version Buy Now</a></h4>
							</td>
						</tr>
						
					</table>
				</div>
			</div>
		</div>
		
		
	
	</form>
	<div class="panel panel-primary save-button-block">
		<div class="panel-body">
			
			<div class="pull-left">
				<button type="button" class="btn btn-info btn-lg" onclick="wpsm_uc_option_data_save('background')"><?php _e('Save Changes','WPSM_UC_TEXT_DOMAIN'); ?></button>
			</div>
			<div class="pull-right">
				<button type="button" class="btn btn-primary btn-lg" onclick="wpsm_uc_option_data_reset('background')"><?php _e('Reset Default','WPSM_UC_TEXT_DOMAIN'); ?></button>
			</div>
		</div>
	</div>
							
</div>