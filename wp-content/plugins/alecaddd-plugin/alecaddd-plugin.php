<?php
/**
 * @package AlecadddPlugin
 */
/*
Plugin Name: Alecaddd Plugin
Plugin URI: http://alecaddd.com
Descrition: This is my first attempt on writing a custom Plugin for this amazing tutorial series.
Version: 1.0.0
Author: Alexander Schumacher
Author URL: http://AlexanderSchumacher.de
License: GPLv2 or later
Text Domain: alexaddd-Plugin
*/


// Drei Möglichkeiten sicherzustellen, dass der Zigriff über WordPress erfolgt

if (!defined('ABSPATH')) {
    die;
}

// defined( 'ABSPATH' ) or die( 'Hey, you can\t access this file, you silly human!' );

// if ( ! functions_exists( 'add_actions' ) ) {
//     echo 'Hey, you can\t access this file, you silly human!';
//     exit;
// }

class AllecadddPlugin
{
    function activate() {
        echo 'The plugin was activated';
    }

    function deactivate() {
        echo 'The plugin was deactivated';
    }

    function uninstall() {

    }
}

if (class_exists('AlecadddPlugin')) {
    $alecadddPlugin = new AlecadddPlugin( 'Alecaddd Plugin initialized!' );
}

// activation
register_activation_hook( __FILE__, array( $allecadddPlugin, 'activate' ) );

// deactivation
register_activation_hook( __FILE__, array( $allecadddPlugin, 'deactivate' ) );

// uninstall