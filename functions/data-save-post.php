<?php 
if(isset($_POST['action_uc']) == "action_uc_page_setting_save_post")
	{

	$hook = sanitize_text_field($_POST['hook']);
	$hook = 'wpsm_uc_plugin_options_'.$hook;
	foreach($_POST as  $key => $value)
	{
		$_POST[$key]=sanitize_text_field($_POST[$key]);	
	}
	update_option($hook, serialize($_POST));
}
?>