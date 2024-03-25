<?php

/*
  Plugin Name: iCode Registration Plugin
  Description: iCodeGuru Members will register themselves through this plugin
  Version: 1.0.0
  Author: Zubair
  Author URI: http://zubair.com
 */

global $db_version;
$db_version = '1.0';

function database_join()
{
    global $wpdb;
    global $db_version;

    $table_name = $wpdb->prefix . 'member_list';

    $charset_collate = $wpdb->get_charset_collate();

    $member_table_sql = "CREATE TABLE $table_name (
		`id` mediumint(9) NOT NULL AUTO_INCREMENT,
        `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        `first_name` varchar(50) NOT NULL,
            `last_name` varchar(50) NOT NULL,
            `email` varchar(100) NOT NULL,
            `whatsapp_phone` varchar(20) NOT NULL,
            `university` varchar(100) NOT NULL,
            `linkedin_url` varchar(255) NOT NULL,
		PRIMARY KEY  (`id`)
	) $charset_collate;";

    $funding_table_name = $wpdb->prefix . 'apply_for_funding';

    $funding_table_sql = "CREATE TABLE $funding_table_name (
    `id` mediumint(9) NOT NULL AUTO_INCREMENT,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `first_name` varchar(50) NOT NULL,
    `last_name` varchar(50) NOT NULL,
    `email` varchar(100) NOT NULL,
    `phone_country_code` varchar(5) NOT NULL,
    `phone_number` varchar(20) NOT NULL,
    `cnic` varchar(20) NOT NULL,
    `university` varchar(100) NOT NULL,
    `graduation_year` int(4) NOT NULL,
    `cgpa` decimal(3,2) NOT NULL,
    `major_degree` varchar(50) NOT NULL,
    `address` varchar(255) NOT NULL,
    `postal_code` varchar(10) NOT NULL,
    `company` varchar(100),
    `linkedin_url` varchar(255) NOT NULL,
    `cv_file` varchar(255) NOT NULL,
    `hackathon_links` text,
    `volunteer_experience` text,
    `funding_need_reason` text,
    `funding_amount` decimal(10,2) NOT NULL,
    `eligibility_reasons` text,
    PRIMARY KEY  (`id`)
) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($member_table_sql);
    dbDelta($funding_table_sql);



    add_option('db_version', $db_version);
}
register_activation_hook(__FILE__, 'database_join');
//adding in menu
add_action('admin_menu', 'at_try_menu');

function at_try_menu()
{
    //adding plugin in menu
    add_menu_page(
        'member_list',
        'Joined Members',
        'manage_options',
        'member_Listing',
        'member_list'
    );
    //adding submenu to a menu
    add_submenu_page(
        'member_Listing',
        'member_insert',
        'member Insert',
        'manage_options',
        'member_Insert',
        'member_insert'
    );
    add_submenu_page(
        null,
        'member_update',
        'member Update',
        'manage_options',
        'member_Update',
        'member_update'
    );
    add_submenu_page(
        null,
        'member_delete',
        'member Delete',
        'manage_options',
        'member_Delete',
        'member_delete'
    );
}





// Add a menu and submenu to your plugin
add_action('admin_menu', 'registration_plugin_menu');

function registration_plugin_menu()
{
    // Add the main menu page
    add_menu_page(
        'Registration Plugin',      // Page title
        'Funding Applicant',      // Menu title
        'manage_options',           // Capability
        'apply_for_funding_list',   // Menu slug
        'apply_for_funding_list'    // Callback function to display the page
    );

    // delete = member_delete, apply_for_funding_delete(), apply_for_funding
    // insert = apply_for_funding_insert, apply_for_funding
    // list - apply_for_funding_list
    // update = apply_for_funding_update()
    // Add more submenu pages as needed
    add_submenu_page(
        'apply_for_funding_list',           // Corrected parent slug
        'apply_for_funding_insert',         // Page title
        'Apply For Funding Insert',         // Submenu title
        'manage_options',                   // Capability
        'apply_for_funding_Insert',         // Submenu slug
        'apply_for_funding_insert'          // Callback function to display the page
    );
    add_submenu_page(
        null,           // Corrected parent slug
        'Apply for Funding Update',         // Page title
        'Apply for Funding Update',         // Submenu title
        'manage_options',                   // Capability
        'apply_for_funding_Update',         // Submenu slug
        'apply_for_funding_update'          // Callback function to display the page
    );
    add_submenu_page(
        null,           // Corrected parent slug
        'apply_for_funding_delete',         // Page title
        'Apply for Funding delete',         // Submenu title
        'manage_options',                   // Capability
        'apply_for_funding_Delete',         // Submenu slug
        'apply_for_funding_delete'          // Callback function to display the page
    );
}
// returns the root directory path of particular plugin
define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'member_list.php');
require_once(ROOTDIR . 'member_insert.php');
require_once(ROOTDIR . 'member_update.php');
require_once(ROOTDIR . 'member_delete.php');

?>
