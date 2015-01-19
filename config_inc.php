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
	$g_preview_attachments_inline_max_size = 9999 * 9999;
	$g_preview_max_width = 80;
	$g_preview_max_height = 0;
	$g_handle_bug_threshold                 = UPDATER;
	$g_update_bug_status_threshold = REPORTER;
	$g_set_status_threshold = array( NEW_ => REPORTER, CLOSED => MANAGER );
	$g_access_levels_enum_string = '25:reporter,40:updater,70:manager,90:administrator';
	$g_status_enum_string = '10:new,40:confirmed,80:resolved,90:closed';
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
	$g_show_avatar_threshold = MANAGER;
	$g_private_news_threshold	= MANAGER;
	$g_reminder_receive_threshold = MANAGER;
	$g_handle_sponsored_bugs_threshold = MANAGER;
	$g_delete_attachments_threshold	= MANAGER;
	$g_monitor_add_others_bug_threshold = MANAGER;
	$g_monitor_delete_others_bug_threshold = MANAGER;
	$g_private_bug_threshold		= MANAGER;
	$g_private_bugnote_threshold	= MANAGER;
	$g_bug_reminder_threshold		= MANAGER;
	$g_update_bugnote_threshold = MANAGER;
	$g_delete_bug_threshold = MANAGER;
	$g_move_bug_threshold = MANAGER;
	$g_show_monitor_list_threshold = MANAGER; 
	$g_stored_query_create_threshold = MANAGER;
	$g_roadmap_update_threshold = MANAGER;
	$g_reopen_bug_threshold			= MANAGER;
	$g_report_issues_for_unreleased_versions_threshold = MANAGER;
	$g_development_team_threshold = MANAGER;
	$g_create_permalink_threshold = MANAGER;
	$g_tag_detach_threshold = MANAGER;
	$g_tag_edit_threshold = MANAGER;
	$g_time_tracking_view_threshold = MANAGER;
	$g_time_tracking_edit_threshold = MANAGER;
	$g_view_attachments_threshold	= UPDATER;
	$g_download_attachments_threshold	= UPDATER;
	$g_view_handler_threshold		= UPDATER;
	$g_view_history_threshold		= UPDATER;
	$g_view_changelog_threshold = UPDATER;
	$g_roadmap_view_threshold = UPDATER;
	$g_tag_view_threshold = UPDATER;
	
		$g_administrator_email	= 'administrator@example.com';

	/**
	 * Webmaster email
	 * @global string $g_webmaster_email
	 */
	$g_webmaster_email		= 'webmaster@dorsten.de';

	/**
	 * the sender email, part of 'From: ' header in emails
	 * @global string $g_from_email
	 */
 	$g_from_email			= 'schadensmeldung@dorsten.de';

	/**
	 * the sender name, part of 'From: ' header in emails
	 * @global string $g_from_name
	 */
	$g_from_name			= 'Dorsten Schadensmeldung';
	
?>
