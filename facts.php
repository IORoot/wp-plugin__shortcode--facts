<?php

/*
 * @wordpress-plugin
 * Plugin Name:       _ANDYP - Shortcode [facts]
 * Plugin URI:        http://londonparkour.com
 * Description:       <strong>Shortcodes</strong> Small defined facts to retrieve about the system.
 * Version:           1.0.0
 * Author:            Andy Pearson
 * Author URI:        https://londonparkour.com
 * Domain Path:       /languages
 */

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                            CONFIGURATION                                │
// └─────────────────────────────────────────────────────────────────────────┘
$config = [];

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                           Register CONSTANTS                            │
//  └─────────────────────────────────────────────────────────────────────────┘
define( 'ANDYP_FACTS_PATH', __DIR__ );
define( 'ANDYP_FACTS_URL', plugins_url( '/', __FILE__ ) );
define( 'ANDYP_FACTS_FILE',  __FILE__ );

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                    Register with ANDYP Plugins                          │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/andyp_plugin_register.php';

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                         Use composer autoloader                         │
// └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/vendor/autoload.php';

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                        	   Initialise    		                     │
// └─────────────────────────────────────────────────────────────────────────┘
$cpt = new andyp\facts\initialise;
$cpt->set_config($config);
$cpt->register();