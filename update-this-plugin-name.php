<?php
/**
* Plugin Name: Add PluginName
* Plugin URI: https://github.com/FreshyMichael/shortcode_template
* Description: Add a Description
* Version: 1.0.0
* Author: FreshySites
* Author URI: https://freshysites.com/
* License: GNU v3.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/* PluginName Start */
//______________________________________________________________________________

//Short Code Start

add_shortcode('actual_short_code', 'your_shortcode_function');

// change 'actual_short_code' to a unique shortcode and use like: [actual_short_code]

// change 'your_shortcode_function' to be something unique

function your_shortcode_function(){

		
		
	
		ob_start();

		echo '
		
		This the shortcode content. <br />
		Put all the stuff between ob_start(); and ReturnString.
		
		<!-- this is an example of a simple JavaScript inclusion -->
		
		<script>
		var logIt = "Hey look, the short code is working!";
		console.log(logIt);
		</script>
		
		<!-- End JavaScript Inclusion --> 
		
		';
	
		$ReturnString = ob_get_contents();
		
		ob_end_clean();
	
		return $ReturnString;

	}






//______________________________________________________________________________
// All About Updates

//  Begin Version Control | Auto Update Checker
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
// ***IMPORTANT*** Update this path to New Github Repository Master Branch Path
	'https://github.com/FreshyMichael/shortcode_template',
	__FILE__,
// ***IMPORTANT*** Update this to New Repository Master Branch Path
	'shortcode_template'
);
//Enable Releases
$myUpdateChecker->getVcsApi()->enableReleaseAssets();
//Optional: If you're using a private repository, specify the access token like this:
//
//
//Future Update Note: Comment in these sections and add token and branch information once private git established
//
//
//$myUpdateChecker->setAuthentication('your-token-here');
//Optional: Set the branch that contains the stable release.
//$myUpdateChecker->setBranch('stable-branch-name');

//______________________________________________________________________________
/* PluginName End */
?>
