<?php
/**
* Plugin Name: jh-social-icons
* Plugin URI: www.joehiggins.me
* Plugin to add font awesome social media icons through customizer
* Version: 1.0
* Author: Joe Higgins
* License: GPL2
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
*
*
* Prefix all variables, functions and classes with "jh-"
*/

register_activation_hook( jh-social-icons, 'pluginprefix_function_to_run' );

register_deactivation_hook( jh-social-icons, 'pluginprefix_function_to_run' );

register_uninstall_hook(jh-social-icons, 'pluginprefix_function_to_run');

class Jh_social_icons
{
  public function __construct()
  {
  	// Admin page calls:
  	add_action( 'admin_menu', array( $this, 'addAdminMenu' ) );
  	add_action( 'wp_ajax_store_admin_data', array( $this, 'storeAdminData' ) );
  	add_action( 'admin_enqueue_scripts', array( $this, 'addAdminScripts' ) );

  }
}
 ?>
