<?php
	#
	# Modified by Patrick Dehnel and Marco Horak
	# Hochschule Rhein-Waal 2014/2015
	#
	
	$g_hostname = 'localhost';
	$g_db_type = 'mysql';
	$g_database_name = 'mantis';
	$g_db_username = 'root';
	$g_db_password = '12345';
    $g_css_include_file = '/theme-colorized/colorized.css';
	
	#E-Mail Daten ändern!
	$g_enable_email_notification = ON; //enables the email messages	
	$g_phpMailer_method = PHPMAILER_METHOD_SMTP; // this is most important
	$g_smtp_host = 'smtp.1und1.de';
	$g_smtp_connection_mode = 'tls';
	$g_smtp_port = 587;
	$g_smtp_username = 'bug@patrickdehnel.de'; //replace it with your gmail address
	$g_smtp_password = '1234567'; //replace it with your gmail password
	$g_administrator_email = 'admin@example.com'; //this will be your administrator email address
	
	
	#config_defaults_inc Änderungen
	$g_allow_signup = OFF;
	$g_admin_checks = OFF;
	$g_view_summary_threshold       = MAJOR;
	$g_assign_sponsored_bugs_threshold = MAJOR;
	$g_preview_attachments_inline_max_size = 9999 * 9999;
	$g_preview_max_width = 80;
	$g_preview_max_height = 0;
	$g_handle_bug_threshold                 = REPORTER;
	$g_bug_revision_drop_threshold = MAJOR;
	$g_upload_project_file_threshold = MAJOR;
	$g_manage_site_threshold = MAJOR;
	$g_manage_project_threshold = MAJOR;
	$g_manage_news_threshold = MAJOR;
	$g_project_user_threshold = MAJOR;
	$g_stored_query_create_shared_threshold = MAJOR;
	$g_update_readonly_bug_threshold = MAJOR;
	$g_update_bug_status_threshold = REPORTER;
	$g_set_bug_sticky_threshold = MAJOR;
	$g_set_status_threshold = array( NEW_ => REPORTER, CLOSED => DEVELOPER );
	$g_access_levels_enum_string = '10:viewer,25:reporter,40:updater,55:developer,70:major,90:administrator';
	$g_status_enum_string = '10:new,40:confirmed,80:resolved,90:closed';
	$g_custom_field_link_threshold = MAJOR;
	$g_time_tracking_reporting_threshold = MAJOR;
	$g_manage_global_profile_threshold = MAJOR;
	$g_my_view_boxes = array (
		'assigned'      => '1',
		'unassigned'    => '3',
		'reported'      => '5',
		'resolved'      => '6',
		'recent_mod'	=> '4',
		'monitored'		=> '2',
		'feedback'		=> '0',
		'verify'		=> '0',
		'my_comments'	=> '7'
	);

?>
