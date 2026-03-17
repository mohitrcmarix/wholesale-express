<?php
/*
 * Plugin Name: WP CRUD
 * Description: Simple CRUD Example.
 * Version: 1.0
 * Author: Mohit Rathod
 * Text Domain: custom-plugin
 */

if (!defined('ABSPATH'))
    exit;

/* Create table when plugin activate */
function wpcrud_create_table()
{
    global $wpdb;
    $table = $wpdb->prefix . 'students';
    $charset = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(100) NOT NULL,
        email varchar(100) NOT NULL,
        PRIMARY KEY (id)
    ) $charset;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook(__FILE__, 'wpcrud_create_table');


function create_registrasion_table() {
    global $wpdb;
    $table = $wpdb->prefix . 'registration';
    $charset = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table (
        id INT(9) NOT NULL AUTO_INCREMENT,
        first_name VARCHAR(100) NOT NULL,
        last_name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        phone_number VARCHAR(20) NOT NULL,
        dealership_name VARCHAR(100) NOT NULL,
        dealership_type VARCHAR(100) NOT NULL,
        comments VARCHAR(100),
        PRIMARY KEY (id)
    ) $charset;";
    
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook(__FILE__, 'create_registrasion_table');

