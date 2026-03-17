<?php
/*
Template Name: contact us
*/
get_header();
?>

<body>
    <div class="wrapper-main contact-page">

        <!--    Header Section Start-->

        <!--    Header Section End-->

        <!--    banner Section Start    -->
        <section class="top-banner">

            <picture>
                <img class="lazyload"
                    data-src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-us-banner.webp"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-us-banner.webp"
                    alt="blogs banner" width="1349" height="287">
            </picture>
            <div class="banner-heading">
                <div class="container">
                    <h1 data-title="Contact Us"><?php the_title(); ?></h1>
                </div>
            </div>
        </section>
        <!--    banner Section End    -->

        <!--  Contact Section Start -->
        <section class="contact-us-sec">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-us-boxes">
                            <div class="contact-us-left-box">
                                <h3><?php the_field("title"); ?></h3>
                                <ul>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23.401" height="26"
                                            viewBox="0 0 23.401 26" style="margin-top: 5px;">
                                            <path
                                                d="M13.4,14.87V21.5a1.3,1.3,0,1,0,2.6,0V14.87a6.5,6.5,0,1,0-2.6,0ZM14.7,4.6a3.9,3.9,0,1,1-3.9,3.9,3.9,3.9,0,0,1,3.9-3.9Zm5.473,13.547a1.328,1.328,0,0,0-.546,2.6c2.951.585,4.173,1.638,4.173,2.054,0,.754-3.185,2.6-9.1,2.6s-9.1-1.846-9.1-2.6c0-.416,1.222-1.469,4.173-2.106a1.328,1.328,0,0,0-.546-2.6C5.275,19,3,20.708,3,22.8,3,26.22,8.889,28,14.7,28s11.7-1.781,11.7-5.2C26.4,20.708,24.126,19,20.174,18.147Z"
                                                transform="translate(-3 -2.001)" fill="#ca0e00" />
                                        </svg>
                                        <div class="">
                                            <h5><?php the_field("addres_title"); ?></h5>
                                            <p><?php the_field("mailing_address"); ?></p>
                                        </div>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23.106" height="23.146"
                                            viewBox="0 0 23.106 23.146">
                                            <path data-name="Icon feather-phone-call"
                                                d="M16.175,5.521a5.027,5.027,0,0,1,3.971,3.971M16.175,1.5a9.048,9.048,0,0,1,7.993,7.983m-1.005,8.023v3.016a2.011,2.011,0,0,1-2.192,2.011,19.9,19.9,0,0,1-8.676-3.086,19.6,19.6,0,0,1-6.032-6.032A19.9,19.9,0,0,1,3.176,4.7a2.011,2.011,0,0,1,2-2.192H8.193A2.011,2.011,0,0,1,10.2,4.235a12.909,12.909,0,0,0,.7,2.825,2.011,2.011,0,0,1-.452,2.121L9.178,10.458A16.086,16.086,0,0,0,15.21,16.49l1.277-1.277a2.011,2.011,0,0,1,2.121-.452,12.909,12.909,0,0,0,2.825.7A2.011,2.011,0,0,1,23.162,17.505Z"
                                                transform="translate(-2.167 -0.396)" fill="none" stroke="#ca0e00"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        </svg>
                                        <a href="<?php the_permalink(); ?>"><?php the_field("number"); ?></a>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.3" height="16.014"
                                            viewBox="0 0 22.3 16.014">
                                            <g data-name="mail (2)" transform="translate(-1.85 -5.85)">
                                                <path data-name="Path 165"
                                                    d="M21.643,21.714H4.357A2.357,2.357,0,0,1,2,19.357v-11A2.357,2.357,0,0,1,4.357,6H21.643A2.357,2.357,0,0,1,24,8.357v11A2.357,2.357,0,0,1,21.643,21.714ZM4.357,7.571a.786.786,0,0,0-.786.786v11a.786.786,0,0,0,.786.786H21.643a.786.786,0,0,0,.786-.786v-11a.786.786,0,0,0-.786-.786Z"
                                                    transform="translate(0)" fill="#ca0e00" stroke="#ca0e00"
                                                    stroke-width="0.3" />
                                                <path data-name="Path 166"
                                                    d="M13.231,14.868a.786.786,0,0,1-.432-.134L3.37,8.449a.786.786,0,0,1,.864-1.3l9.429,6.286a.786.786,0,0,1-.432,1.438Z"
                                                    transform="translate(-0.231 -0.225)" fill="#ca0e00" stroke="#ca0e00"
                                                    stroke-width="0.3" />
                                                <path data-name="Path 167"
                                                    d="M15.785,14.864a.786.786,0,0,1-.44-1.438L24.774,7.14a.786.786,0,0,1,.872,1.3L16.217,14.73A.786.786,0,0,1,15.785,14.864Z"
                                                    transform="translate(-2.785 -0.221)" fill="#ca0e00" stroke="#ca0e00"
                                                    stroke-width="0.3" />
                                            </g>
                                        </svg>
                                        <a href="mailto:info@wexpress.com"><?php the_field("email"); ?></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="contact-us-right-box">
                                <?php
                                echo do_shortcode(get_field('contact_form_shortcode'));
                                ?>

                                <!-- <form class="custom-form">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" name="fname">
                                                    <span class="first_error" style="color: red;"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" name="">
                                                    <span class="first_error" style="color: red;"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Email Address</label>
                                                    <input type="email" class="form-control">
                                                    <span class="first_error" style="color: red;"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input type="text" class="form-control">
                                                    <span class="first_error" style="color: red;"></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Message</label>
                                                    <textarea class="form-control" rows="3"
                                                        placeholder="Write your message..."></textarea>
                                                    <span class="first_error" style="color: red;"></span>
                                                </div>
                                            </div>

                                            <div class="col-12 text-center mt-3">
                                                <button class="btn common-btn">Submit</button>
                                            </div>
                                        </div>

                                    </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  Contact Section End -->
    </div>
    <!-- Sign up Modal -->
    </html>
</body>

<?php get_footer(); ?>