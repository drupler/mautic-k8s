<?php
$parameters = array(
	'cache_path' => '/cache',
	'log_path' => '/logs',
	'site_url' => getenv('SITE_URL'),
	'install_source' => 'Mautic',
	'db_driver' => 'pdo_mysql',
	'db_host' => getenv('MYSQL_DB_HOST'),
	'db_port' => '3306',
	'db_name' => getenv('MYSQL_DATABASE'),
	'db_user' => getenv('MYSQL_USER'),
	'db_password' => getenv('MYSQL_PASSWORD'),
	'db_path' => null,
	'mailer_from_name' => 'Facet Interactive',
	'mailer_from_email' => 'e@hello.facetinteractive.com',
	'mailer_transport' => 'mautic.transport.amazon',
	'mailer_host' => getenv('MAILER_HOST'),
	'mailer_port' => '587',
	'mailer_user' => getenv('MAILER_USER'),
	'mailer_password' => getenv('MAILER_PASSWORD'),
	'mailer_encryption' => 'tls',
	'mailer_auth_mode' => 'login',
	'mailer_spool_type' => 'memory',
	'mailer_spool_path' => '%kernel.root_dir%/spool',
	'secret_key' => getenv('SECRET_KEY'),
	'webroot' => null,
	'image_path' => 'media/images',
	'theme' => 'Mauve',
	'locale' => 'en_US',
	'trusted_hosts' => array(),
	'rememberme_key' => '0f687a26ee0c4221a7a3f8151236b6b12f123003',
	'rememberme_lifetime' => '31536000',
	'rememberme_path' => '/',
	'default_pagelimit' => 30,
	'default_timezone' => 'UTC',
	'date_format_full' => 'F j, Y g:i a T',
	'date_format_short' => 'D, M d',
	'date_format_dateonly' => 'F j, Y',
	'date_format_timeonly' => 'g:i a',
	'ip_lookup_service' => 'maxmind_download',
	'ip_lookup_auth' => null,
	'ip_lookup_config' => array(),
	'update_stability' => 'stable',
	'cookie_path' => '/',
	'cookie_secure' => '1',
	'cookie_httponly' => '0',
	'do_not_track_ips' => array(
		"0" => "216.50.189.168"
	),
	'mailer_return_path' => null,
	'mailer_spool_msg_limit' => null,
	'mailer_spool_time_limit' => null,
	'mailer_spool_recover_timeout' => '900',
	'mailer_spool_clear_timeout' => '1800',
	'unsubscribe_text' => '<a href=\'|URL|\'>Unsubscribe</a> to no longer receive emails from us.',
	'webview_text' => '<a href=\'|URL|\'>Trouble reading this email? Click here.</a>',
	'unsubscribe_message' => 'We are sorry to see you go! |EMAIL| will no longer receive emails from us. If this was by mistake, <a href=\'|URL|\'>click here to re-subscribe</a>.',
	'resubscribe_message' => '|EMAIL| has been re-subscribed. If this was by mistake, <a href=\'|URL|\'>click here to unsubscribe</a>.',
	'monitored_email' => array(
		"general" => array(
			"address" => "", 
			"host" => "", 
			"port" => "993", 
			"encryption" => "/ssl", 
			"user" => "", 
			"password" => ""
		), 
		"EmailBundle_bounces" => array(
			"address" => "", 
			"host" => "", 
			"port" => "993", 
			"encryption" => "/ssl", 
			"user" => "", 
			"password" => "", 
			"override_settings" => "0", 
			"folder" => "", 
			"ssl" => "1"
		), 
		"EmailBundle_unsubscribes" => array(
			"address" => "", 
			"host" => "", 
			"port" => "993", 
			"encryption" => "/ssl", 
			"user" => "", 
			"password" => "", 
			"override_settings" => "0", 
			"folder" => "", 
			"ssl" => "1"
		), 
		"EmailBundle_replies" => array(
			"address" => "", 
			"host" => "", 
			"port" => "993", 
			"encryption" => "/ssl", 
			"user" => "", 
			"password" => "", 
			"override_settings" => "0", 
			"folder" => ""
		)
	),
	'cat_in_page_url' => 0,
	'google_analytics' => '&lt;script&gt;
  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'https://www.google-analytics.com/analytics.js\',\'ga\');
​
  ga(\'create\', \'UA-3542367-25\', \'auto\');
  ga(\'send\', \'pageview\');
​
&lt;/script&gt;',
	'redirect_list_types' => array(
		"301" => "mautic.page.form.redirecttype.permanent", 
		"302" => "mautic.page.form.redirecttype.temporary"
	),
	'api_enabled' => 1,
	'api_oauth2_access_token_lifetime' => 60,
	'api_oauth2_refresh_token_lifetime' => 14,
	'webhook_start' => '0',
	'webhook_limit' => '1000',
	'webhook_log_max' => '10',
	'upload_dir' => '%kernel.root_dir%/media/files',
	'max_size' => '6',
	'allowed_extensions' => array(
		"0" => "csv", 
		"1" => "doc", 
		"2" => "docx", 
		"3" => "epub", 
		"4" => "gif", 
		"5" => "jpg", 
		"6" => "jpeg", 
		"7" => "mpg", 
		"8" => "mpeg", 
		"9" => "mp3", 
		"10" => "odt", 
		"11" => "odp", 
		"12" => "ods", 
		"13" => "pdf", 
		"14" => "png", 
		"15" => "ppt", 
		"16" => "pptx", 
		"17" => "tif", 
		"18" => "tiff", 
		"19" => "txt", 
		"20" => "xls", 
		"21" => "xlsx", 
		"22" => "wav"
	),
	'active' => 1,
	'utm_source' => 'mautic',
	'utm_medium' => 'email',
	'utm_campaign' => 'subject',
	'remove_accents' => 1,
	'mailer_is_owner' => 1,
	'default_signature_text' => 'Peter Vasilion

O: (323) 909-2005x201
E:  peter@facetinteractive.com 
A: 840 Apollo Street Suite 100, El Segundo, CA 90245
W: facetinteractive.com
Schedule a Meeting: https://calendly.com/facet-interactive',
	'mailer_amazon_region' => 'email-smtp.us-east-1.amazonaws.com',
	'db_server_version' => '5.5',
	'do_not_track_internal_ips' => array(),
	'link_shortener_url' => null,
	'cached_data_timeout' => '10',
	'batch_sleep_time' => '1',
	'cors_restrict_domains' => 1,
	'cors_valid_domains' => array(
		"0" => "https://facetinteractive.com", 
		"1" => "https://www.facetinteractive.com"
	),
	'campaign_time_wait_on_event_false' => 'PT1H',
	'mailer_append_tracking_pixel' => 1,
	'mailer_convert_embed_images' => 0,
	'notification_enabled' => 0,
	'notification_app_id' => null,
	'notification_rest_api_key' => null,
	'notification_safari_web_id' => null,
	'sms_enabled' => 0,
	'sms_username' => null,
	'sms_password' => null,
	'sms_sending_phone_number' => null,
	'twitter_handle_field' => 'twitter',
	'dev_hosts' => null,
	'rss_notification_url' => 'https://mautic.com/?feed=rss2&tag=notification',
	'mailer_api_key' => null,
	'email_frequency_number' => 1,
	'email_frequency_time' => 'DAY',
	'sms_frequency_number' => null,
	'sms_frequency_time' => null,
	'tmp_path' => '/cache',
	'api_enable_basic_auth' => true,
	'show_contact_preferences' => 1,
	'show_contact_frequency' => 0,
	'show_contact_pause_dates' => 0,
	'show_contact_preferred_channels' => 0,
	'show_contact_categories' => 1,
	'show_contact_segments' => 0,
	'gcm_sender_id' => '482941778795',
	'welcomenotification_enabled' => 1,
	'do_not_track_bots' => array(
		"0" => "MSNBOT", 
		"1" => "msnbot-media", 
		"2" => "bingbot", 
		"3" => "Googlebot", 
		"4" => "Google Web Preview", 
		"5" => "Mediapartners-Google", 
		"6" => "Baiduspider", 
		"7" => "Ezooms", 
		"8" => "YahooSeeker", 
		"9" => "Slurp", 
		"10" => "AltaVista", 
		"11" => "AVSearch", 
		"12" => "Mercator", 
		"13" => "Scooter", 
		"14" => "InfoSeek", 
		"15" => "Ultraseek", 
		"16" => "Lycos", 
		"17" => "Wget", 
		"18" => "YandexBot", 
		"19" => "Java/1.4.1_04", 
		"20" => "SiteBot", 
		"21" => "Exabot", 
		"22" => "AhrefsBot", 
		"23" => "MJ12bot", 
		"24" => "NetSeer crawler", 
		"25" => "TurnitinBot", 
		"26" => "magpie-crawler", 
		"27" => "Nutch Crawler", 
		"28" => "CMS Crawler", 
		"29" => "rogerbot", 
		"30" => "Domnutch", 
		"31" => "ssearch_bot", 
		"32" => "XoviBot", 
		"33" => "digincore", 
		"34" => "fr-crawler", 
		"35" => "SeznamBot", 
		"36" => "Seznam screenshot-generator", 
		"37" => "Facebot", 
		"38" => "facebookexternalhit"
	),
	'api_batch_max_limit' => '200',
	'mailer_mailjet_sandbox' => 0,
	'mailer_mailjet_sandbox_default_mail' => null,
	'notification_landing_page_enabled' => 1,
	'track_contact_by_ip' => 0,
	'saml_idp_own_password' => null,
	'saml_idp_email_attribute' => 'EmailAddress',
	'saml_idp_username_attribute' => null,
	'saml_idp_firstname_attribute' => 'FirstName',
	'saml_idp_lastname_attribute' => 'LastName',
	'saml_idp_default_role' => 1,
	'max_entity_lock_time' => 0,
	'disable_trackable_urls' => 0,
	'parallel_import_limit' => '1',
	'background_import_if_more_rows_than' => 0,
	'track_by_fingerprint' => 1,
	'track_by_tracking_url' => 1,
	'google_analytics_id' => null,
	'google_analytics_trackingpage_enabled' => 0,
	'google_analytics_landingpage_enabled' => 0,
	'facebook_pixel_id' => null,
	'facebook_pixel_trackingpage_enabled' => 0,
	'facebook_pixel_landingpage_enabled' => 0,
	'webhook_disable_limit' => '100',
	'webhook_timeout' => '15',
	'events_orderby_dir' => 'ASC',
	'saml_idp_entity_id' => 'https://hello.facetinteractive.com',
	'sms_transport' => null,
);

/**
 * Trusted Proxies
 *
 * @description - Required for Load Balanced Application Containers Behind a Proxy in Mautic
 *
 * @TODO - Replace array with explode(",",getenv('TRUSTED_PROXIES'))
 *
 */
$parameters['trusted_proxies'] = array(
    '0' => '10.0.5.0/24',
    '1' => '172.16.0.0/12'
);

/**
 * Mail Queue System
 */
$parameters += [
    'queue_mode' => 'queue', // queue, immediate
];

/**
 * Queue System: RabbitMQ
 */
$parameters += [
    'queue_protocol' => 'rabbitmq',
    'rabbitmq_host' => getenv('RABBITMQ_HOST'),
    'rabbitmq_port' => '5672',
    'rabbitmq_vhost' => '/',
    'rabbitmq_user' => getenv('RABBITMQ_USER'),
    'rabbitmq_password' => getenv('RABBITMQ_PASSWORD'),
];

/**
 * Queue System: Beanstalk
 *
 * Cannot be enabled with RabbitMQ block above
 */
/*
 $parameters += [
    'queue_protocol' => 'beanstalkd',
    'beanstalkd_host' => 'localhost',
    'beanstalkd_port' => '11300',
    'beanstalkd_timeout' => '60',
];
 */
