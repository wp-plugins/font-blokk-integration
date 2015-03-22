<?php
/**
 * Plugin Name: Font BLOKK Integration
 * Plugin URI: http://www.jumptoweb.com
 * Description: This plugin integrate the font BLOKK with your wordpress installation.
 * Version: 1
 * Author: Manuel Costales
 * Author URI: http://www.manuelcostales.com
 */
defined( 'ABSPATH' ) or die( 'Plugin file cannot be accessed directly.' );
/*add javascripts to the header*/
add_action('wp_head', 'add_blokkfont_mc');
function add_blokkfont_mc() {
	wp_enqueue_style( 'blokk', plugins_url( 'css/styles.css', __FILE__ ));
}
