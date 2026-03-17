<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Security check
/*---------------------------------------
  Custom login form shortcode
---------------------------------------*/
function custom_login_form() {
    // If user is already logged in
    if ( is_user_logged_in() ) {
        return '<p>You are already logged in.</p>';
    }

    $output = '';

    // Handle form submission
    if ( isset($_POST['custom_login_submit']) ) {
        $creds = array(
            'user_login'    => sanitize_text_field($_POST['username']),
            'user_password' => sanitize_text_field($_POST['password']),
            'remember'      => true
        );

        $user = wp_signon( $creds, false );

        if ( is_wp_error($user) ) {
            $output .= '<p style="color:red;">' . $user->get_error_message() . '</p>';
        } else {
            wp_safe_redirect( home_url() ); // Change this URL for custom redirect
            exit;
        }
    }

    // Include login form template
    ob_start();
    include plugin_dir_path(__DIR__) . 'templates/login-form.php';
    $output .= ob_get_clean();

    return $output;
}
add_shortcode('custom_login_form', 'custom_login_form');

/*---------------------------------------
  Test shortcode
---------------------------------------*/
