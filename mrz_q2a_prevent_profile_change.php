<?php

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../');
	exit;
}

class MRZ_Q2A_Prevent_Profile_Change {
	
	
	public function filter_profile(&$profile, &$errors, $user, $oldprofile) {
	    foreach (array_keys($profile) as $field) {
		$is_admin = (qa_get_logged_in_level() == 120) ? true : false;
    		if (!($is_admin)){
    			if (isset($oldprofile)) {
    				$errors[$field] = 'You are not allowed to change your profile';
    				}
    		}
	    }
	}
}