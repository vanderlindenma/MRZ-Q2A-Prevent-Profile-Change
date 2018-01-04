<?php

/*
	Plugin Name: MRZ Q2A - Prevent Profile Change
	Plugin URI: https://github.com/vanderlindenma/MRZ-Q2A-Prevent-Profile-Change
	Plugin Description: A simple hack of https://github.com/alpabeta/MRZ-Q2A-prevent-username-change, preventing changes to the profile instead of changes to the username 
	Plugin Version: 1.0.0
	Plugin Date: 2018-01-04
	Plugin Author: Martin Van der Linden, based on plugin by Mirza Media
	Plugin Author URI: https://martinvdlinden.wordpress.com/
	Plugin License: Copyleft
	Plugin Minimum Question2Answer Version: 1.6
	Plugin Minimum PHP Version: 5.1.2
*/

if (!defined('QA_VERSION')) { // don't allow this file to be requested directly from browser
	header('Location: ../../');
	exit;
}

qa_register_plugin_module('filter', 'mrz_q2a_prevent_profile_change.php', 'MRZ_Q2A_Prevent_Profile_Change', 'MRZ Q2A Prevent Profile Change');