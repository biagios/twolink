<?php
@session_start();
/**
 * HybridAuth
 * http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
 * (c) 2009-2015, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
 */
// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

return
		array(
			"base_url" => "http://twolink.co.uk/auth/",
			"providers" => array(
				// openid providers
				"Google" => array(
					"enabled" => true,
					"keys" => array("id" => "268261935650-d600pph7phrci1kttqr4lu9ud31kvr6a.apps.googleusercontent.com", "secret" => "ZrsotqCBS9IuOBJLW-B-9bCR"),
					"scope" => "https://www.googleapis.com/auth/plus.login"
				),
				"Facebook" => array(
					"enabled" => true,
					"keys" => array("id" => "1685921468392642", "secret" => "208b50255ea6837e7153f047bff4a498"),
					"trustForwarded" => false
				),
				"Twitter" => array(
					"enabled" => true,
					"keys" => array("key" => "fSJ2G8NZsLwZ8WhzwmgjKK5Qs", "secret" => "HKi4TM75f4ed8UDiUylqW3la7uAwwHGJCrRIv81mMNMWyPED0l"),
					"includeEmail" => false
				),
				"Steam" => array(
					"enabled" => true,
					"keys" => array("key" => "FAFE318D163381A5D8B56E5A4508DB27")
				),
			),
			// If you want to enable logging, set 'debug_mode' to true.
			// You can also set it to
			// - "error" To log only error messages. Useful in production
			// - "info" To log info and error messages (ignore debug messages)
			"debug_mode" => false,
			// Path to file writable by the web server. Required if 'debug_mode' is not false
			"debug_file" => "/aaaaa.txt",
);
