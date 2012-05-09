<?php
/*
Plugin Name: Wordfence Security
Plugin URI: http://wordfence.com/
Description: Wordfence Security - Anti-virus and Firewall security plugin for WordPress 
Author: Mark Maunder
Version: 2.0.1
Author URI: http://wordfence.com/
*/
require_once('lib/wordfenceConstants.php');
require_once('lib/wordfenceClass.php');
register_activation_hook(WP_PLUGIN_DIR . '/wordfence/wordfence.php', 'wordfence::installPlugin');
register_deactivation_hook(WP_PLUGIN_DIR . '/wordfence/wordfence.php', 'wordfence::uninstallPlugin');
wordfence::install_actions();


?>
