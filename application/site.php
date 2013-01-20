<?php defined('SYSPATH') or die('No direct script access.');

return array(
	/* Override Kohana's default session adapter */
    'default_session_adapter' => 'cookie',

	/* CDN base url */
	'cdn_url' => NULL,

	/* Directories that are available via the CDN */
	'cdn_directories' => array('themes/default/media', 'plugins/[^\/]+/media'),
	
	/* Default cache driver */
	'default_cache' => 'file',
	
	/* The 'from' address used in emails */
    'email_address' => 'no-response@example.com',
);