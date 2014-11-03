<?php
	$g_hostname = 'localhost';
	$g_db_type = 'mysql';
	$g_database_name = 'mantis';
	$g_db_username = 'root';
	$g_db_password = '12345';
    $g_css_include_file = '/theme-colorized/colorized.css';
	
	$g_allow_signup    = ON;  //allows the users to sign up for a new account
	$g_enable_email_notification = ON; //enables the email messages	
	$g_phpMailer_method = PHPMAILER_METHOD_SMTP; // this is most important
	$g_smtp_host = 'smtp.1und1.de';
	$g_smtp_connection_mode = 'tls';
	$g_smtp_port = 587;
	$g_smtp_username = 'bug@patrickdehnel.de'; //replace it with your gmail address
	$g_smtp_password = '1234567'; //replace it with your gmail password
	$g_administrator_email = 'admin@example.com'; //this will be your administrator email address
?>
