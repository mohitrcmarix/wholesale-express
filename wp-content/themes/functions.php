<?php

// Load CSS
function teri_enqueue_files()
{

    // CSS files
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
    // wp_enqueue_style('teri-style', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime(get_template_directory() . '/assets/css/style.css'));
    wp_enqueue_style('teri-style', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime(get_template_directory() . '/assets/css/style.css'));

    // JS files
    wp_enqueue_script('jquery'); // WordPress built-in jQuery

    wp_enqueue_script('lazysizes', get_template_directory_uri() . '/assets/js/lazysizes.min.js', array(), false, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), false, true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), filemtime(get_template_directory() . '/assets/js/custom.js'), true);
    wp_enqueue_script('loadmore-js', get_template_directory_uri() . '/assets/js/loadmore.js', array('jquery'), filemtime(get_template_directory() . '/assets/js/loadmore.js'), true);

    wp_localize_script('loadmore-js', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'teri_enqueue_files');


// svg imge uplode //
function teri_shop_allow_svg_uploads($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'teri_shop_allow_svg_uploads');


// Fix SVG preview in Media Library
function teri_shop_fix_svg_display()
{
    echo '<style>
        .attachment-266x266, .thumbnail img {
            width: 100% !important;
            height: auto !important;
        }
    </style>';
}
add_action('admin_head', 'teri_shop_fix_svg_display');


// Enable menu support in your theme
function teri_shop_theme_setup()
{
    add_theme_support('menus');

    // Register specific menu locations
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'teri-shop'),
        'footer_quick_links' => __('Footer Quick Links', 'teri-shop'),
        'footer_other_links' => __('Footer Other Links', 'teri-shop'),
    ));
}
add_action('after_setup_theme', 'teri_shop_theme_setup');

// footer menu
function teri_shop_widgets_init()
{
    register_sidebar(array(
        'name' => 'Footer Area',
        'id' => 'footer-1',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="footer-title">',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'teri_shop_widgets_init');

// AFC add the contain footer data

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

class Teri_Shop_Walker_Nav_Menu extends Walker_Nav_Menu
{

    // Start each list item
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $active_class = in_array('current-menu-item', $classes) ? 'active' : '';
        $has_children = in_array('menu-item-has-children', $classes) ? 'dropdown' : '';

        // Decide classes depending on location
        if ($args->theme_location === 'footer_quick_links') {
            $class_names = 'f-item';
            $link_class = 'f-link';
        } else {
            $class_names = join(' ', array_filter(array('nav-item', $has_children, $active_class)));
            $link_class = $has_children ? 'nav-link dropdown-toggle' : 'nav-link';
        }

        // Open list item
        $output .= '<li class="' . esc_attr($class_names) . '">';

        // Link attributes
        $atts = array();
        $atts['class'] = $link_class;
        $atts['href'] = !empty($item->url) ? $item->url : '';

        if ($has_children && $args->theme_location !== 'footer_quick_links') {
            $atts['data-toggle'] = 'dropdown';
            $atts['aria-haspopup'] = 'true';
            $atts['aria-expanded'] = 'false';
        }

        // Build link HTML
        $attributes = '';
        foreach ($atts as $attr => $value) {
            $attributes .= ' ' . $attr . '="' . esc_attr($value) . '"';
        }

        $title = apply_filters('the_title', $item->title, $item->ID);
        $output .= '<a' . $attributes . '>' . $title . '</a>';
    }

    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $output .= '<ul class="dropdown-menu">';
    }

    function end_lvl(&$output, $depth = 0, $args = array())
    {
        $output .= '</ul>';
    }

    function end_el(&$output, $item, $depth = 0, $args = array())
    {
        $output .= '</li>';
    }
}


class Teri_Shop_Footer_Walker extends Walker_Nav_Menu
{

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $output .= '<li class="f-item">';

        $atts = array();
        $atts['href'] = !empty($item->url) ? esc_url($item->url) : '';
        $atts['class'] = 'f-link'; // link class

        $attributes = '';
        foreach ($atts as $attr => $value) {
            $attributes .= ' ' . $attr . '="' . esc_attr($value) . '"';
        }

        $title = apply_filters('the_title', $item->title, $item->ID);
        $output .= '<a' . $attributes . '>' . $title . '</a>';
    }

    function end_el(&$output, $item, $depth = 0, $args = array())
    {
        $output .= '</li>';
    }
}

add_theme_support('post-thumbnails');

function my_theme_setup()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');


// functions.php
function create_testimonial_cpt()
{
    $labels = array(
        'name' => 'Testimonials',
        'singular_name' => 'Testimonial',
        'menu_name' => 'Testimonials'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'testimonials'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-format-quote'
    );

    register_post_type('testimonial', $args);
}
add_action('init', 'create_testimonial_cpt');


function load_more_blog()
{
    $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $category = isset($_POST['category']) ? sanitize_text_field($_POST['category']) : 'all-car';

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 9,
        'paged' => $page
    );

    if ($category != 'all-car') {
        $args['category_name'] = $category; // filter by category slug
    }

    $query = new WP_Query($args);

    if ($query->have_posts()):
        while ($query->have_posts()):
            $query->the_post(); ?>
            <div class="blog-box">
                <div class="blog-img">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('medium', array('alt' => get_the_title(), 'class' => 'lazyload'));
                        } ?>
                    </a>
                    <div class="blog-date"><?php echo get_the_date('F jS, Y'); ?></div>
                </div>
                <div class="blog-content">
                    <h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="common-para">
                        <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                    </div>
                    <a class="ream-more" href="<?php the_permalink(); ?>">Read More</a>
                </div>
            </div>
        <?php endwhile;
    endif;

    wp_reset_postdata();
    wp_die();
}

add_action('wp_ajax_load_more_blog', 'load_more_blog');
add_action('wp_ajax_nopriv_load_more_blog', 'load_more_blog');


// functions.php
add_action('init', function () {
    //signup
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

    // sigin
    if (isset($_POST['signin'])) {
        global $wpdb;
        $table = $wpdb->prefix . 'registration';

        $email = sanitize_email($_POST['email']);
        $pass = sanitize_text_field($_POST['password']);
        $login_error = '';

        $user = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table WHERE email = %s", $email));
        if ($user) {
            if (wp_check_password($pass, $user->password)) {

                $wp_user = get_user_by('email', $email);
                if (!$wp_user) {
                    $username = !empty($user->username) ? sanitize_user($user->username, true) : 'user_' . wp_rand(1000, 9999);
                    $user_id = wp_create_user(wp_generate_password(), $email);
                    if (is_wp_error($user_id)) {
                        $login_error = $user_id->get_error_message();
                    } else {
                        $wp_user = get_user_by('ID', $user_id);
                    }
                }

                if ($wp_user) {
                    wp_set_current_user($wp_user->ID);
                    wp_set_auth_cookie($wp_user->ID);
                    wp_safe_redirect(home_url());
                    exit;
                }

            } else {
                $login_error = 'Incorrect password!';
            }
        } else {
            $login_error = 'Email not found!';
        }

        // Save error in session to display after redirect if needed
        if (!empty($login_error)) {
            $_SESSION['login_error'] = $login_error;
        }
    }
});
