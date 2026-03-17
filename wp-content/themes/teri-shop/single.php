<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Teri-shop
 */

get_header();
?>
<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--  Title Name  -->
    <title>Blog Details</title>
</head>

<body>
    <div class="wrapper-main blogs-page">
            <section class="blog-details-section">
                <div class="container">
                    <a class="back2b" href="<?php echo site_url('/blog'); ?>">Blogs</a>
                    <div class="blog-details-header">
                        <div class="details-header-left">
                            <h2><?php the_title(); ?></h2>
                                       
                            <h3 class="category-title"><?php the_field("car_brand_name"); ?></h3>
                        </div>
                        <div class="details-header-right">
                            <div class="published-person">
                                <a href="#" class="published-name"><?php  the_author(); ?></a>
                                <a href="#" class="publishes-img">
                                    <picture>
                                        <img class="lazyload" data-src="images/testimonials-one.webp" src="images/placeholder.webp" alt="published img" width="60" height="60">
                                    </picture>
                                </a>
                            </div>
                            <div class="published-date">
                                <span class="published-date-title">Published On:</span>
                                <span class="published-fixd-date"><?php the_date(); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="cms-wrapper">
                        <div class="blog-banner">
                            <picture>
                                <img class="lazyload" data-src="<?php the_post_thumbnail_url('medium'); ?>" src="<?php the_post_thumbnail_url('medium'); ?>" alt="blog detalis banner">
                            </picture>
                            <div class="share-button">
                                <div class="inner-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24.225" height="24.225" viewBox="0 0 24.225 24.225">
                                        <path data-name="Icon metro-share" d="M23.01,18.583a3.773,3.773,0,0,0-2.721,1.155l-10.2-5.1a3.787,3.787,0,0,0,0-1.2l10.2-5.1a3.784,3.784,0,1,0-1.064-2.63,3.811,3.811,0,0,0,.048.6l-10.2,5.1a3.785,3.785,0,1,0,0,5.26l10.2,5.1a3.785,3.785,0,1,0,3.737-3.186Z" transform="translate(-2.571 -1.928)" fill="#ca0e00"/>
                                    </svg>                                      
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank" rel="noopener noreferrer nofollow">
                                                <svg data-name="Component 63 – 3" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                                    <circle data-name="Ellipse 172" cx="20" cy="20" r="20" fill="#636363"/>
                                                    <path data-name="Icon material-email" d="M19.875,6h-15A1.872,1.872,0,0,0,3.009,7.875L3,19.125A1.881,1.881,0,0,0,4.875,21h15a1.881,1.881,0,0,0,1.875-1.875V7.875A1.881,1.881,0,0,0,19.875,6Zm0,3.75-7.5,4.688L4.875,9.75V7.875l7.5,4.688,7.5-4.687Z" transform="translate(7.625 6.5)" fill="#fff"/>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" rel="noopener noreferrer nofollow">
                                                <svg data-name="Component 62 – 3" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                                    <circle data-name="Ellipse 171" cx="20" cy="20" r="20" fill="#c23321"/>
                                                    <g data-name="Icon ionic-logo-googleplus" transform="translate(7.701 12.169)">
                                                      <path data-name="Path 801" d="M15.287,13.164l-.077-.336H7.687v3.08h4.357A3.9,3.9,0,0,1,8,18.963a4.607,4.607,0,0,1-3.281-1.215,4.846,4.846,0,0,1-.062-6.726,4.531,4.531,0,0,1,3.3-1.22,4.159,4.159,0,0,1,2.791,1.014l2.306-2.292A7.808,7.808,0,0,0,7.884,6.539h0a7.967,7.967,0,0,0-5.655,2.3A7.974,7.974,0,0,0,0,14.37a7.88,7.88,0,0,0,2.143,5.443,8.186,8.186,0,0,0,5.9,2.388,7.286,7.286,0,0,0,5.3-2.224,7.8,7.8,0,0,0,2.037-5.414A9.006,9.006,0,0,0,15.287,13.164Z" transform="translate(0 -6.539)" fill="#fff"/>
                                                      <path data-name="Path 802" d="M32.548,14.481H29.81V11.742H27.84v2.738H25.1v1.97H27.84v2.738h1.97V16.45h2.738Z" transform="translate(-7.95 -8.187)" fill="#fff"/>
                                                    </g>
                                                </svg>

                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" rel="noopener noreferrer nofollow">
                                                <svg data-name="Component 61 – 3" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                                    <circle data-name="Ellipse 121" cx="20" cy="20" r="20" fill="#066492"/>
                                                    <g id="da6195985f5ffa1c15b90147f61b9269" transform="translate(11 11)">
                                                      <path data-name="Path 686" d="M0,5H4.025V18H0Zm14.99.152c-.043-.014-.083-.03-.128-.043s-.108-.024-.163-.033A3.441,3.441,0,0,0,13.976,5,5.549,5.549,0,0,0,9.65,7.485V5H5.625V18H9.65V10.909s3.042-4.451,4.326-1.182V18H18V9.227a4.185,4.185,0,0,0-3.011-4.075Z" fill="#fff"/>
                                                      <circle data-name="Ellipse 119" cx="1.75" cy="1.75" r="1.75" fill="#fff"/>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" rel="noopener noreferrer nofollow">
                                                <svg data-name="Component 60 – 3" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                                    <circle data-name="Ellipse 120" cx="20" cy="20" r="20" fill="#00aced"/>
                                                    <path data-name="48da478fa6ca63ab6d70df54a8edf0ac" d="M21.869,5.787a8.434,8.434,0,0,1-2.344.636,4.1,4.1,0,0,0,1.8-2.255,8.156,8.156,0,0,1-2.593.993,4.073,4.073,0,0,0-6.954,3.715A11.564,11.564,0,0,1,3.381,4.615a4.133,4.133,0,0,0-.546,2.056,4.063,4.063,0,0,0,1.808,3.388,4.023,4.023,0,0,1-1.848-.507V9.6a4.073,4.073,0,0,0,3.278,3.974,3.9,3.9,0,0,1-1.093.169,4.868,4.868,0,0,1-.765-.07A4.083,4.083,0,0,0,8.02,16.5a8.166,8.166,0,0,1-5.027,1.748A7.879,7.879,0,0,1,2,18.185a11.494,11.494,0,0,0,6.249,1.838A11.514,11.514,0,0,0,19.882,8.42V7.893A8.375,8.375,0,0,0,21.869,5.787Z" transform="translate(8.066 8.063)" fill="#fff"/>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" rel="noopener noreferrer nofollow">
                                                <svg data-name="Component 59 – 3" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                                    <circle data-name="Ellipse 118" cx="20" cy="20" r="20" fill="#3b5897"/>
                                                    <path d="M15.971,5.652h2.068v-3.5A28.721,28.721,0,0,0,15.025,2C12.033,2,9.987,3.826,9.987,7.17v2.882H6.61v3.916H9.987V24h4.048V13.968H17.4l.506-3.916H14.035v-2.5C14.035,6.4,14.343,5.652,15.971,5.652Z" transform="translate(7.676 7)" fill="#fff"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="cms-content blog-details-content">
                            <p><?php the_content(); ?></p>
                            <div class="inner-box">
                                <p><?php the_content(); ?></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>


        <!--    Blog Details Section End -->

        <!--    Recent Blogs Section Start    -->
        <section class="recent-blogs-section blog-main-section">
            <div class="container">
                <div class="recent-title">
                    <h2>Recent Blogs</h2>
                </div>
                <div class="blog-boxes">
                    <div class="blog-box">
                        <div class="blog-img">
                            <a href="#">
                                <picture>
                                    <img class="lazyload" data-src="images/blog-01.webp" src="images/placeholder.webp"
                                        alt="blog 01" width="406" height="261">
                                </picture>
                            </a>
                            <div class="blog-date">May 1st, 2023</div>
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title"><a href="#">Phasellus Hendrerit Eros</a></h2>
                            <h4 class="blog-snall-title">Lorem ipsum.</h4>
                            <div class="common-para">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</p>
                            </div>
                            <a class="ream-more" href="#">Read More</a>
                        </div>
                    </div>

                    <div class="blog-box">
                        <div class="blog-img">
                            <a href="#">
                                <picture>
                                    <img class="lazyload" data-src="images/blog-02.webp" src="images/placeholder.webp"
                                        alt="blog 02" width="406" height="261">
                                </picture>
                            </a>
                            <div class="blog-date">May 1st, 2023</div>
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title"><a href="#">Phasellus Hendrerit Eros</a></h2>
                            <h4 class="blog-snall-title">Lorem ipsum.</h4>
                            <div class="common-para">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</p>
                            </div>
                            <a class="ream-more" href="#">Read More</a>
                        </div>
                    </div>

                    <div class="blog-box">
                        <div class="blog-img">
                            <a href="#">
                                <picture>
                                    <img class="lazyload" data-src="images/blog-03.webp" src="images/placeholder.webp"
                                        alt="blog 03" width="406" height="261">
                                </picture>
                            </a>
                            <div class="blog-date">May 1st, 2023</div>
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title"><a href="#">Phasellus Hendrerit Eros</a></h2>
                            <h4 class="blog-snall-title">Lorem ipsum.</h4>
                            <div class="common-para">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</p>
                            </div>
                            <a class="ream-more" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--    Recent Blogs Section Start    -->
    </div>

</body>

</html>
<?php get_footer(); ?>