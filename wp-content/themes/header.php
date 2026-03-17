<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Teri_Shop
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
    <?php wp_body_open(); ?> <!-- Required for modern WP hooks -->

    <div class="wrapper-main">
        <section class="header-top-section show">
            <div class="container">
                <div class="htop-inner">
                    <div class="top-line">
                        <div class="top-line-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="close-icon">
                        <span class="one"></span>
                        <span class="two"></span>
                    </div>
                </div>
            </div>
        </section>
        <header class="header-section home-header">
            <div class="container">
                <div class="header-inner">
                    <!-- Logo -->
                    <a class="navbar-brand" href="<?php echo home_url(); ?>">

                        <picture class="logo-white">
                            <?php
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                            if ($image):
                                ?>
                                <picture class="logo-white">
                                    <img class="white-logo" src="<?php echo esc_url($image[0]); ?>" alt="logo" width="166"
                                        height="37">
                                </picture>

                            <?php endif; ?>
                            <picture>
                                <img class="black-logo"
                                    src="<?php echo get_template_directory_uri() ?>/assets/images/black-logo.svg"
                                    alt="logo" width="166" height="37">
                            </picture>
                        </picture>

                    </a>
                    <!-- Navigation -->
                    <div class="menu">
                        <nav class="navbar">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'container' => false,
                                'menu_class' => 'navbar-nav',
                                'depth' => 2,
                                'fallback_cb' => false,
                                'walker' => new Teri_Shop_Walker_Nav_Menu(),
                            ));
                            ?>
                        </nav>
                    </div>
                    <!-- Header right area -->
                    <div class="header-right">
                        <div class="world">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                    <g id="world" transform="translate(-0.45 511.582)">
                                        <path data-name="Path 14890"
                                            d="M9.494-511.555a10.234,10.234,0,0,0-5.222,2.1,13.331,13.331,0,0,0-1.695,1.694A11.1,11.1,0,0,0,1.035-505a12.78,12.78,0,0,0-.509,2.035,12.68,12.68,0,0,0,0,2.778,12.832,12.832,0,0,0,.513,2.039A10.988,10.988,0,0,0,2.577-495.4a14.117,14.117,0,0,0,1.613,1.632,11.274,11.274,0,0,0,2.834,1.6,12.835,12.835,0,0,0,2.039.513,14,14,0,0,0,2.623.023,10.222,10.222,0,0,0,4.952-2.074,14.388,14.388,0,0,0,1.628-1.612,11.392,11.392,0,0,0,1.6-2.833,12.832,12.832,0,0,0,.513-2.039,8.709,8.709,0,0,0,.07-1.389,8.71,8.71,0,0,0-.07-1.389,12.834,12.834,0,0,0-.513-2.039,11.324,11.324,0,0,0-1.6-2.833,14.117,14.117,0,0,0-1.57-1.565,10.172,10.172,0,0,0-4.834-2.094A14.5,14.5,0,0,0,9.494-511.555Zm.372,2.951v1.7H8.535c-.732,0-1.331,0-1.331-.012a11.005,11.005,0,0,1,.489-1.119A4.874,4.874,0,0,1,9.572-510.2a1.112,1.112,0,0,1,.247-.11A8.824,8.824,0,0,1,9.866-508.6Zm1.566-1.538a4.814,4.814,0,0,1,1.315,1.3,9.963,9.963,0,0,1,.814,1.561c.078.2.141.356.141.364s-.6.012-1.331.012H11.04v-1.7a8.053,8.053,0,0,1,.051-1.7A1.989,1.989,0,0,1,11.432-510.142Zm-4.27.685a11.7,11.7,0,0,0-1.029,2.066l-.172.47-1.28.012L3.4-506.9l.078-.11a9.5,9.5,0,0,1,2.215-2.019,9.854,9.854,0,0,1,1.714-.845A2.289,2.289,0,0,1,7.161-509.457Zm6.686-.286a9.153,9.153,0,0,1,2.517,1.589,10.662,10.662,0,0,1,1.061,1.139l.082.113-1.28-.008-1.28-.012-.172-.47a11.652,11.652,0,0,0-1-2.015c-.137-.2-.266-.4-.282-.423C13.447-509.9,13.514-509.888,13.847-509.743Zm-8.29,4.355c-.039.192-.117.626-.168.971-.086.556-.125.924-.2,1.964l-.023.286H1.634l.027-.34a9.165,9.165,0,0,1,.771-2.794l.2-.427H5.627Zm4.31,1.44v1.781H6.339l.023-.305a17.782,17.782,0,0,1,.36-2.747c.055-.247.106-.462.117-.481s.693-.027,1.523-.027h1.5Zm4.294-1.389a19.042,19.042,0,0,1,.384,2.865l.023.305H11.04v-3.561l1.515.008,1.515.012Zm4.31.031a8.919,8.919,0,0,1,.571,1.616,8.486,8.486,0,0,1,.219,1.366v.157H15.745l-.023-.247c-.008-.133-.039-.5-.063-.81a20.134,20.134,0,0,0-.309-2.164l-.07-.34H18.27ZM5.184-500.692a23.7,23.7,0,0,0,.4,3.091l.023.129H2.62l-.2-.419a8.984,8.984,0,0,1-.759-2.763l-.027-.34H5.161Zm4.681,1.46v1.761H6.824l-.106-.481a18.75,18.75,0,0,1-.356-2.739l-.023-.3H9.866Zm4.678-1.46a18.75,18.75,0,0,1-.356,2.739l-.106.481H11.04v-3.522h3.527Zm4.717-.145a8.356,8.356,0,0,1-.219,1.366,9.054,9.054,0,0,1-.564,1.6l-.192.4H16.8c-1.268,0-1.491-.008-1.491-.055a3.078,3.078,0,0,1,.063-.344,19.514,19.514,0,0,0,.29-2.055c.023-.317.055-.689.063-.826l.023-.243H19.26ZM6.128-495.78a11.867,11.867,0,0,0,1.053,2.105,2.919,2.919,0,0,1,.239.384,5.417,5.417,0,0,1-.975-.415,9.669,9.669,0,0,1-1.53-.986,11.189,11.189,0,0,1-1.362-1.362l-.188-.243H5.94Zm3.738,1.209v1.722l-.086-.023a2.755,2.755,0,0,1-.994-.7,5.708,5.708,0,0,1-1.092-1.554,9.047,9.047,0,0,1-.489-1.139c0-.016.6-.031,1.331-.031H9.866Zm3.836-1.691a9.912,9.912,0,0,1-.571,1.291,5.177,5.177,0,0,1-1.014,1.4,2.772,2.772,0,0,1-.986.7l-.09.023V-496.3h1.331A12,12,0,0,1,13.7-496.262Zm3.679.168a9.075,9.075,0,0,1-2.783,2.317,6.671,6.671,0,0,1-1.1.485,1.473,1.473,0,0,1,.223-.384,11.867,11.867,0,0,0,1.053-2.105l.188-.517h2.58Z"
                                            fill="#d6d6d6" />
                                    </g>
                                </svg>
                            </span>
                            <ul class="language-box">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Francaise</a></li>
                            </ul>
                        </div>

                        <?php if (!is_user_logged_in()) { ?>
                            <div class="h-loginup">
                                <button class="h-btn signin-btn active" data-toggle="modal" data-target="#signin">
                                    <span class="login-text">Login</span>
                                </button>
                                <button class="h-btn signup-btn active" data-toggle="modal"
                                    data-target="#signup">Signup</button>
                                <div id="toggle" class="">
                                    <div class="one"></div>
                                    <div class="two"></div>
                                    <div class="three"></div>
                                </div>
                            </div>
                            <?php
                        } else {
                            $current_user = wp_get_current_user();
                            ?>
                            <div class="h-loginup">
                                <a class="h-btn profile-btn" href="<?php echo site_url('/my-account'); ?>">
                                    👤 <?php echo $current_user->display_name; ?>
                                </a>
                                <a class="h-btn logout-btn" href="<?php echo wp_logout_url(home_url()); ?>">
                                    Logout
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </header>
        <!-- user signup -->
        <div class="modal fade" id="signup">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <a href="index.html" class="f-logo">
                            <picture>
                                <img class="white-logo" src="<?php echo esc_url($image[0]); ?>" alt="logo" width="166"
                                    height="37">
                            </picture>
                        </a>
                        <button type="button" class="close" data-dismiss="modal"><img
                                src="<?php echo get_template_directory_uri() ?>/assets/images/close-modal-icon.svg"
                                alt="close"> </button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <h2>Sign Up</h2>
                        <form class="custom-form" method="POST">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>First Name *</label>
                                        <input type="text" class="form-control" name="first_name"
                                            placeholder="Enter First Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Last Name *</label>
                                        <input type="text" class="form-control" name="last_name"
                                            placeholder="Enter Last Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Email Address *</label>
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Enter Email Address">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Password *</label>
                                        <input type="Password" class="form-control" name="password"
                                            placeholder="Enter Password">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Phone Number *</label>
                                        <input type="text" class="form-control" name="phone_number"
                                            placeholder="Enter Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Dealership Name *</label>
                                        <input type="text" class="form-control" name="dealership_name"
                                            placeholder="Enter Dealership Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Dealership Type *</label>
                                        <input type="text" class="form-control" name="dealership_type"
                                            placeholder="Enter Dealership Type">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Comments</label>
                                        <textarea class="form-control" rows="3" name="comments"
                                            placeholder="Type Comments"></textarea>
                                    </div>
                                </div>

                                <div class="col-12 text-center mt-3">
                                    <button class="btn common-btn" type="submit" name="signup">Signup</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer text-center">
                        <h4>Already have an account? <a href="#">Sign in</a></h4>
                    </div>
                </div>
            </div>
        </div>

        <?php
        global $wpdb;
        $table = $wpdb->prefix . 'registration';

        if (isset($_POST['signup'])) {
            $fname = ($_POST['first_name']);
            $lname = ($_POST['last_name']);
            $email = ($_POST['email']);
            $password = $_POST['password'];
            $phone = ($_POST['phone_number']);
            $d_name = ($_POST['dealership_name']);
            $dtype = ($_POST['dealership_type']);
            $comments = ($_POST['comments']);

            $insert = $wpdb->insert(
                $table,
                array(
                    'first_name' => $fname,
                    'last_name' => $lname,
                    'email' => $email,
                    'password' => wp_hash_password($password),
                    'phone_number' => $phone,
                    'dealership_name' => $d_name,
                    'dealership_type' => $dtype,
                    'comments' => $comments
                ),
                array('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')
            );
            if ($insert) {
                echo "<script>alert('Signup Successful!');</script>";
            } else {

                echo "<script>alert('Error! Email already exists or DB issue.');</script>";
            }
        }


        ?>

        <!-- user signin-->
        <div class="modal fade" id="signin">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <a href="index.html" class="f-logo">
                            <picture>
                                <img class="white-logo" src="<?php echo esc_url($image[0]); ?>" alt="logo" width="166"
                                    height="37">
                            </picture>
                        </a>
                        <button type="button" class="close" data-dismiss="modal"><img
                                src="<?php echo get_template_directory_uri() ?>/assets/images/close-modal-icon.svg"
                                alt="close"> </button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <h2>Sign in</h2>
                        <form class="custom-form" method="POST">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Email Address *</label>
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Enter Email Address">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Password *</label>
                                        <input type="Password" class="form-control" name="password"
                                            placeholder="Enter Password">
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-3">
                                    <button class="btn common-btn" type="submit" name="signin">Signin</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer text-center">
                        <h4>you don't have an account? <a href="#">Sign up</a></h4>
                    </div>
                </div>
            </div>
        </div>

        <?php
        global $wpdb;
        $table = $wpdb->prefix . 'registration';

        if (isset($_POST['signin'])) {

            $email = sanitize_email($_POST['email']);
            $pass = sanitize_text_field($_POST['password']);

            // Get user by email
            $user = $wpdb->get_row(
                $wpdb->prepare("SELECT * FROM $table WHERE email = %s", $email)
            );

            // If user exists
            if ($user) {

                // Check password using wp_check_password()
                if (wp_check_password($pass, $user->password)) {

                    // Load WP user by email
                    $wp_user = get_user_by('email', $email);

                    // If user does not exist in WordPress users table, create one
                    if (!$wp_user) {
                        $user_id = wp_create_user($user->username, wp_generate_password(), $email);
                        $wp_user = get_user_by('id', $user_id);
                    }

                    // Create WordPress login session
                    wp_set_current_user($wp_user->ID);
                    wp_set_auth_cookie($wp_user->ID);

                    // Redirect
                    echo "<script>alert('Login successful!'); window.location.href='" . home_url() . "';</script>";
                    exit;
                }


            } else {
                echo "<script>alert('Email not found!');</script>";
            }
        }
        ?>