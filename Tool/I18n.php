<?php

namespace ACME\Demo\Tool;

// If called directly, abort.
if ( ! defined('ACME_DEMO_VERSION'))
	exit;

class I18n 
{
	public static function load_plugin_textdomain()
	{
		load_plugin_textdomain(
			'acme-demo',
			false,
			ACME_DEMO_PATH . 'languages'
		);
	}
}