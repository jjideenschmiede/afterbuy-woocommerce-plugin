<?php
/**
 * Plugin Name: Afterbuy Schnittstelle für WooCommerce - WordPress Plugin
 * Plugin URI: https://schnittstellen24.de/shopsysteme/woocommerce/
 * Description: Die Schnittstelle für Afterbuy und WooCommerce.
 * Version: 1.0.0
 * Author: J&J Ideenschmiede GmbH
 * Author URI: https://jj-ideenschmiede.de
 * GitHub Plugin URI: https://github.com/jjideenschmiede/afterbuy-woocommerce-plugin
 * License: GPLv3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
**/

add_action( 'rest_api_init', 'createEndpoint' );

function createEndpoint(){
    register_rest_route( 'afterbuy-woocommerce-plugin', 'version', [
        'methods' => 'GET',
        'callback' => 'systemData',
    ] );
}

function systemData(){
    global $wp_version;
    $version = '0.0.0';
    if (WC_VERSION != 'WC_VERSION') {
        $version = WC_VERSION;
    }
    return new WP_REST_Response(
        array(
            'wordpress_version' => $wp_version,
            'woocommerce_version' => $version
        ),
    200 );;
}

add_action( 'admin_menu', 'adminPage' );

function adminPage(){
    add_menu_page( 'Afterbuy - WooCommerce Schnittstelle', 'Afterbuy Schnittstelle', 'manage_options', 'afterbuy-woocommerce-plugin', 'adminPageTemplate', plugins_url( 'afterbuy-woocommerce-plugin/img/icon.svg' ) );
}

function adminPageTemplate(){
    include_once( 'pages/admin.php' );
}

?>
