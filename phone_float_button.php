<?php
/**
* Plugin Name: Phone Float Button
* Plugin URI: https://github.com/lucassdantas/phone_float_button_plugin
* Description: Float button for cellphone
* Version: 0.1
* Author: R&D Marketing Digital 
* Author URI: https://rdmarketing.com.br/
**/

defined('ABSPATH') or die();
if(!function_exists('add_action')){
    die;
}
require_once plugin_dir_path( __FILE__ ). 'src/check_and_add_custom_shipping_method.php';
require_once plugin_dir_path( __FILE__ ). 'src/script_custom_date.php';