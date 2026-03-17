<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #content div element.
 *
 * @package Teri_Shop
 */
?>

<?php wp_footer(); ?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12">
                <!-- Logo and social icons -->
                <div class="footer-list footer-logo-main">
                    <a class="f-logo" href="<?php echo home_url(); ?>">
                        <picture class="logo-white">
                            <?php
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                            if ($image): ?>
                                <picture class="logo-white">
                                    <img src="<?php echo esc_url($image[0]); ?>" alt="brand-logo" width="103" height="70">
                                </picture>
                            <?php endif; ?>
                        </picture>

                    </a>
                    <ul class="f-social-group">
                        <li class="f-item"><a href="https://facebook.com" class="f-link" target="_blank"
                                rel="noopener noreferrer nofollow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="9.999" height="16.784"
                                    viewBox="0 0 9.999 16.784">
                                    <path data-name="0166e76c8b03227d1a839e7b916e2413"
                                        d="M15.337,1.561a21.7,21.7,0,0,0-2.355-.12A3.973,3.973,0,0,0,8.753,5.775V7.59H6.563a.387.387,0,0,0-.388.387v2.986a.387.387,0,0,0,.387.388H8.753v5.985a.387.387,0,0,0,.387.388h3.085a.387.387,0,0,0,.388-.387V11.351H14.8a.388.388,0,0,0,.385-.338l.385-2.986a.388.388,0,0,0-.334-.434.392.392,0,0,0-.05,0H12.613V6.071C12.613,5.319,12.764,5,13.7,5h1.581a.388.388,0,0,0,.388-.387V1.945A.388.388,0,0,0,15.337,1.561ZM14.9,4.229H13.7c-1.673,0-1.867,1.051-1.867,1.842V7.978a.387.387,0,0,0,.387.388h2.517l-.285,2.21H12.225a.388.388,0,0,0-.388.387v5.986H9.529V10.963a.387.387,0,0,0-.387-.388H6.95V8.365H9.141a.387.387,0,0,0,.388-.387v-2.2a3.223,3.223,0,0,1,3.453-3.559c.782,0,1.489.042,1.917.08V4.229Z"
                                        transform="translate(-5.925 -1.19)" fill="#fff" stroke="#fff"
                                        stroke-width="0.5" />
                                </svg></a></li>

                        <li class="f-item"><a href="https://twitter.com" class="f-link" target="_blank"
                                rel="noopener noreferrer nofollow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17.263" height="14.685"
                                    viewBox="0 0 17.263 14.685">
                                    <path
                                        d="M18.248,3.668a.784.784,0,0,0-1.185-.674,5.867,5.867,0,0,1-1.469.622,4.041,4.041,0,0,0-2.647-.974,4.1,4.1,0,0,0-4.1,3.972A8.653,8.653,0,0,1,3.505,3.536a.793.793,0,0,0-.673-.287.783.783,0,0,0-.616.392,4.138,4.138,0,0,0-.19,3.74l0,0a.817.817,0,0,0-.388.7,2.386,2.386,0,0,0,.021.345,4.067,4.067,0,0,0,1.23,2.6.783.783,0,0,0-.052.6,4.082,4.082,0,0,0,1.853,2.292,5.855,5.855,0,0,1-2.816.352.784.784,0,0,0-.522,1.438,10.152,10.152,0,0,0,5.5,1.617,10.031,10.031,0,0,0,9.777-7.345,10.057,10.057,0,0,0,.42-2.86c0-.051,0-.1,0-.157a4.526,4.526,0,0,0,1.2-3.3ZM15.654,6.187a.78.78,0,0,0-.183.551c.008.129.007.26.007.382a8.49,8.49,0,0,1-.356,2.417A8.381,8.381,0,0,1,6.85,15.757a8.58,8.58,0,0,1-2-.236,7.436,7.436,0,0,0,2.308-1.226.785.785,0,0,0-.472-1.4,2.516,2.516,0,0,1-1.737-.733q.176-.033.349-.083a.785.785,0,0,0-.063-1.524A2.509,2.509,0,0,1,3.47,9.2a4.157,4.157,0,0,0,.427.036.8.8,0,0,0,.771-.546A.784.784,0,0,0,4.355,7.8,2.507,2.507,0,0,1,3.238,5.7c0-.052,0-.1,0-.156A10.208,10.208,0,0,0,9.682,8.275a.8.8,0,0,0,.641-.281.785.785,0,0,0,.162-.681,2.476,2.476,0,0,1-.068-.571A2.534,2.534,0,0,1,12.947,4.21a2.5,2.5,0,0,1,1.839.8.779.779,0,0,0,.722.234,7.272,7.272,0,0,0,.951-.253,5.241,5.241,0,0,1-.805,1.2Z"
                                        transform="translate(-0.991 -2.642)" fill="#fff" />
                                </svg></a></li>

                        <li class="f-item"><a href="https://instagram.com" class="f-link" target="_blank"
                                rel="noopener noreferrer nofollow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17.865" height="17.865"
                                    viewBox="0 0 17.865 17.865">
                                    <path
                                        d="M15.7,5.091h0a1.072,1.072,0,1,0,1.072,1.072A1.072,1.072,0,0,0,15.7,5.091Zm4.109,2.162A6.78,6.78,0,0,0,19.4,5.082,4.413,4.413,0,0,0,18.364,3.5a4.2,4.2,0,0,0-1.581-1.027,6.521,6.521,0,0,0-2.171-.42C13.666,2,13.362,2,10.932,2S8.2,2,7.252,2.054a6.521,6.521,0,0,0-2.171.42A4.27,4.27,0,0,0,3.5,3.5,4.2,4.2,0,0,0,2.473,5.082a6.521,6.521,0,0,0-.42,2.171C2,8.2,2,8.5,2,10.932s0,2.733.054,3.68a6.521,6.521,0,0,0,.42,2.171A4.2,4.2,0,0,0,3.5,18.364a4.27,4.27,0,0,0,1.581,1.027,6.521,6.521,0,0,0,2.171.42c.947.054,1.251.054,3.68.054s2.733,0,3.68-.054a6.521,6.521,0,0,0,2.171-.42,4.2,4.2,0,0,0,1.581-1.027A4.332,4.332,0,0,0,19.4,16.783a6.78,6.78,0,0,0,.411-2.171c0-.947.054-1.251.054-3.68S19.865,8.2,19.811,7.252ZM18.2,14.505a5.011,5.011,0,0,1-.3,1.661,2.733,2.733,0,0,1-.67,1.027,2.849,2.849,0,0,1-1.027.67,5.011,5.011,0,0,1-1.661.3c-.893.045-1.224.054-3.573.054s-2.68,0-3.573-.054A5.118,5.118,0,0,1,5.662,17.9a2.921,2.921,0,0,1-.983-.67A2.68,2.68,0,0,1,4.019,16.2a4.949,4.949,0,0,1-.357-1.7c0-.893-.054-1.224-.054-3.573s0-2.68.054-3.573a4.949,4.949,0,0,1,.313-1.7A2.68,2.68,0,0,1,4.68,4.68a2.8,2.8,0,0,1,.983-.715,5.118,5.118,0,0,1,1.7-.3c.893,0,1.224-.054,3.573-.054s2.68,0,3.573.054a5.011,5.011,0,0,1,1.661.3,2.733,2.733,0,0,1,1.063.715,2.733,2.733,0,0,1,.67.983,5.011,5.011,0,0,1,.3,1.7c.045.893.054,1.224.054,3.573S18.248,13.612,18.2,14.505ZM10.932,6.35a4.573,4.573,0,1,0,3.249,1.336A4.582,4.582,0,0,0,10.932,6.35Zm0,7.557a2.975,2.975,0,1,1,2.975-2.975,2.975,2.975,0,0,1-2.975,2.975Z"
                                        transform="translate(-2 -2)" fill="#fff" />
                                </svg>
                            </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="footer-list footer-contact-main">
                    <h4 class="f-title">Contact Info</h4>
                    <ul class="f-contact-group">

                        <li class="f-contact-list">
                            <div class="f-contact">
                                <?php if (get_field('footer_contact_info', 'option')): ?>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.301" height="17"
                                        viewBox="0 0 15.301 17">
                                        <path
                                            d="M9.8,10.416v4.335a.85.85,0,1,0,1.7,0V10.416a4.25,4.25,0,1,0-1.7,0ZM10.65,3.7A2.55,2.55,0,1,1,8.1,6.25,2.55,2.55,0,0,1,10.65,3.7Zm3.579,8.857a.869.869,0,0,0-.357,1.7C15.8,14.64,16.6,15.329,16.6,15.6c0,.493-2.083,1.7-5.95,1.7S4.7,16.094,4.7,15.6c0-.272.8-.961,2.729-1.377a.869.869,0,1,0-.357-1.7C4.488,13.119,3,14.232,3,15.6,3,17.836,6.851,19,10.65,19s7.65-1.165,7.65-3.4C18.3,14.232,16.813,13.119,14.229,12.558Z"
                                            transform="translate(-3 -2.001)" fill="#a8a8a8" />
                                    </svg>
                                    <p><?php the_field('footer_contact_info', 'option'); ?>
                                    </p>

                                <?php endif; ?>

                            </div>

                        </li>

                        <li class="f-contact-list">
                            <div class="f-contact">
                                <?php if (get_field('footer_email', 'option')): ?>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="13.571"
                                        viewBox="0 0 19 13.571">
                                        <g data-name="mail (2)" transform="translate(-2 -6)">
                                            <path data-name="Path 165"
                                                d="M18.964,19.571H4.036A2.036,2.036,0,0,1,2,17.536v-9.5A2.036,2.036,0,0,1,4.036,6H18.964A2.036,2.036,0,0,1,21,8.036v9.5A2.036,2.036,0,0,1,18.964,19.571ZM4.036,7.357a.679.679,0,0,0-.679.679v9.5a.679.679,0,0,0,.679.679H18.964a.679.679,0,0,0,.679-.679v-9.5a.679.679,0,0,0-.679-.679Z"
                                                fill="#a8a8a8" />
                                            <path data-name="Path 166"
                                                d="M11.846,13.8a.679.679,0,0,1-.373-.115L3.33,8.258a.679.679,0,0,1,.746-1.126l8.143,5.429a.679.679,0,0,1-.373,1.242Z"
                                                transform="translate(-0.346 -0.338)" fill="#a8a8a8" />
                                            <path data-name="Path 167"
                                                d="M15.678,13.8a.679.679,0,0,1-.38-1.242l8.143-5.429a.679.679,0,0,1,.753,1.126L16.051,13.68A.679.679,0,0,1,15.678,13.8Z"
                                                transform="translate(-4.178 -0.331)" fill="#a8a8a8" />
                                        </g>
                                    </svg>
                                    <a href="mailto:<?php the_field('footer_email', 'option'); ?>">
                                        <?php the_field('footer_email', 'option'); ?>
                                    </a>
                                <?php endif; ?>

                            </div>
                        </li>

                        <li class="f-contact-list">
                            <div class="f-contact">
                                <?php
                                $footer_number = get_field('footer_number', 'option');
                                if ($footer_number): ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.896" height="16.926"
                                        viewBox="0 0 16.896 16.926">
                                        <path data-name="Icon feather-phone-call"
                                            d="M12.655,4.433a3.666,3.666,0,0,1,2.9,2.9m-2.9-5.83a6.6,6.6,0,0,1,5.83,5.822m-.733,5.852v2.2a1.467,1.467,0,0,1-1.6,1.467,14.512,14.512,0,0,1-6.328-2.251,14.3,14.3,0,0,1-4.4-4.4A14.512,14.512,0,0,1,3.174,3.832a1.467,1.467,0,0,1,1.459-1.6h2.2A1.467,1.467,0,0,1,8.3,3.495a9.415,9.415,0,0,0,.513,2.061A1.467,1.467,0,0,1,8.483,7.1l-.931.931a11.733,11.733,0,0,0,4.4,4.4l.931-.931a1.467,1.467,0,0,1,1.547-.33,9.415,9.415,0,0,0,2.061.513A1.467,1.467,0,0,1,17.751,13.174Z"
                                            transform="translate(-2.417 -0.672)" fill="none" stroke="#a8a8a8"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                    </svg>
                                    <a href="tel:<?php echo esc_attr($footer_number); ?>">
                                        <?php echo esc_html($footer_number); ?>
                                    </a>
                                <?php endif; ?>

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">

                <div class="footer-list footer-link-group">

                    <div class="footer-link-group-wrapper">
                        <h4 class="f-title">Quick Links</h4>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer_quick_links',
                            'container' => false,
                            'menu_class' => 'link-group',
                            'depth' => 1,
                            'fallback_cb' => false,
                            'walker' => new Teri_Shop_Footer_Walker(),
                        ));
                        ?>
                    </div>


                    <div class="footer-link-group-wrapper">
                        <h4 class="f-title">Other Links</h4>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer_other_links',
                            'container' => false,
                            'menu_class' => 'link-group',
                            'depth' => 1,
                            'fallback_cb' => false,
                            'walker' => new Teri_Shop_Footer_Walker(),
                        ));
                        ?>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="footer-bottom">
                    <p class="f-copyright">
                        <?php the_field("footer_year", "options");
                        the_field("footer_copyright", "options") ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

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
                        src="<?php echo get_template_directory_uri() ?>/assets/images/close-modal-icon.svg" alt="close">
                </button>
            </div>

            <!-- Modal body sigup-->
            <div class="modal-body" id="signup-popup">
                <h2>Sign Up</h2>
                <form class="custom-form" autocomplete="off" id="signup-form" method="POST">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>First Name *</label>
                                <input type="text" class="form-control" name="first_name"
                                    placeholder="Enter First Name">
                                <span class="first_name_error" style="color: red;"></span>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Last Name *</label>
                                <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name">
                                <span class="last_name_error" style="color: red;"></span>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Email Address *</label>
                                <input type="text" class="form-control" name="email" placeholder="Enter Email Address">
                                <span class="email_error" style="color: red;"></span>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Password *</label>
                                <input type="Password" class="form-control" name="password"
                                   autocomplete="new-password" placeholder="Enter Password">
                                <span class="password_error" style="color: red;"></span>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Phone Number *</label>
                                <input type="text" class="form-control" name="phone_number"
                                    placeholder="Enter Phone Number">
                                <span class="phone_number_error" style="color: red;"></span>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Dealership Name *</label>
                                <input type="text" class="form-control" name="dealership_name"
                                    placeholder="Enter Dealership Name">
                                <span class="dealership_name_error" style="color: red;"></span>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Dealership Type *</label>
                                <input type="text" class="form-control" name="dealership_type"
                                    placeholder="Enter Dealership Type">
                                <span class="dealership_type_error" style="color: red;"></span>
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
            <div class="modal-footer text-center" id="signup-footer">
                <h4>Already have an account? <a href="#" class="signup-footer">Sign in</a></h4>
            </div>

            <!-- Modal body sigin-->
            <div class="modal-body" id="signin-popup">
                <h2>Sign in</h2>
                <form class="custom-form" id="signin-form" autocomplete="off" method="POST">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Email Address *</label>
                                <input type="text" class="form-control" name="signin-email" autocomplete="off" placeholder="Enter Email Address"
                                 value="">
                                <span class="signin-email_error" style="color: red;"></span>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Password *</label>
                                <input type="Password" class="form-control" name="signin-password" autocomplete="new-password"
                                    placeholder="Enter Password" value="">
                                <span class="signin-password_error" style="color: red;"></span>
                            </div>
                        </div>
                        <div class="col-12 text-center mt-3">
                            <button class="btn common-btn" type="submit" name="signin">Signin</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Modal footer sigin-->
            <div class="modal-footer text-center" id="signin-footer">
                <h4>you don't have an account? <a href="#" class="signin-footer">Sign up</a></h4>
            </div>

        </div>
    </div>
</div>


</div>
</body>

</html>