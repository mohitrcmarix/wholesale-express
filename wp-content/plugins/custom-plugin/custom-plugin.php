<?php
/**
 * Plugin Name: Custom Plugin
 * Plugin URI: https://newpro.com
 * Description: Simple CRUD Example.
 * Version: 1.0
 * Author: Mohit rathod
 * Author URI: https://newpro.com
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: custom-plugin
 * 
  */
 

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}


add_action('init', function() {
        show_admin_bar(true);
});

add_shortcode('test_shortcode', function() {
    return 'Hello World!';
});


$page_id = get_option('page_for_posts'); // ID of Posts Page
$content = get_post_field('post_content', $page_id);

// Run shortcodes inside the content
echo do_shortcode($content);

// Also output the content of THIS PAGE
echo apply_filters('the_content', get_the_content());

// Your code starts here
//function my_custom_plugin_message() {
  //  echo "<p style='color: green;'>My Custom Plugin is Working !</p>";
//}
//add_action('wp_footer', 'my_custom_plugin_message');

//add_action('wp_footer', function() {
 //   echo do_shortcode('[test_shortcode]');
//});


//CURD opreation

register_activation_hook(__FILE__, 'cp_create_table');

function cp_create_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . "students";
    $charset = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(100) NOT NULL,
        email varchar(100) NOT NULL,
        PRIMARY KEY (id)
    ) $charset;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

add_action('admin_menu', 'cp_menu_page');

function cp_menu_page() {
    add_menu_page(
        'Student Manager',
        'Student Manager',
        'manage_options',
        'student-manager',
        'cp_student_page'
    );
}


function cp_student_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . "students";

    // Insert Data
    if(isset($_POST['submit'])){
        $wpdb->insert($table_name, [
            'name'  => sanitize_text_field($_POST['name']),
            'email' => sanitize_email($_POST['email'])
        ]);
        echo "<div class='updated'><p>Student Added</p></div>";
    }

    $students = $wpdb->get_results("SELECT * FROM $table_name");
    ?>
    <div class="wrap">
        <h2>Student Manager</h2>
        <form method="post">
            <input type="text" name="name" placeholder="Student Name" required><br><br>
            <input type="email" name="email" placeholder="Student Email" required><br><br>
            <input type="submit" name="submit" class="button button-primary" value="Add Student">
        </form>

        <h3>Student List</h3>
        <table class="wp-list-table widefat striped">
            <tr><th>ID</th><th>Name</th><th>Email</th></tr>
            <?php foreach ($students as $s) { ?>
                <tr>
                    <td><?= $s->id ?></td>
                    <td><?= $s->name ?></td>
                    <td><?= $s->email ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <?php
}


?>