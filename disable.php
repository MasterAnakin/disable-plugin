<?php
/*
Plugin Name: Disabe affiliatewp-external-referral-links plugin on specific pages
Plugin URI: valet.io
Description: Disable affiliatewp-external-referral-links to make sure it is not affecting speed. 
Author: Valet
Version: 1.0
Author URI: valet.io
*/

 add_filter( 'option_active_plugins', 'sme_disable_affiliatewp_external_referral_links' );

 function sme_disable_affiliatewp_external_referral_links($plugins){

      if( !($_SERVER['REQUEST_URI'] == '/smmworld/') ) {
         $key = array_search( 'affiliatewp-external-referral-links/affiliatewp-external-referral-links.php' , $plugins );
         if ( false !== $key ) unset( $plugins[$key] );
      }

     return $plugins;
 }
