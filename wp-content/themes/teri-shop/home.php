<?php
/*
Template Name: home page
*/
get_header();
?>                                                                                                                                                                                                                                                                                                                           
<?php if (have_rows('header_slider')): ?>
    <section class="hero-banner-section">
        <div class="banner-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div id="bannerText" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php
                                $i = 0;
                                while (have_rows("header_slider")):
                                    the_row();
                                    $title = get_sub_field('slider_title');
                                    $description = get_sub_field('header_description');
                                    $button = get_sub_field('contact_button');
                                    ?>
                                    <div class="carousel-item <?php echo ($i == 0) ? 'active' : ''; ?>">
                                        <div class="banner-text">
                                            <?php if ($title): ?>
                                                <h1 class="banner-title"><?php echo esc_html($title); ?></h1>
                                            <?php endif; ?>

                                            <?php if ($description): ?>
                                                <p class="banner-desc"><?php echo esc_html($description); ?></p>
                                            <?php endif; ?>

                                            <?php if ($button): ?>
                                                <a href="<?php echo esc_url($button['url']); ?>"
                                                    target="<?php echo esc_attr($button['target']); ?>" class="btn-outline-primary">
                                                    <?php echo esc_html($button['title']); ?>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="banner-slider">
                            <div id="homeBanner" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <?php
                                    $j = 0;
                                    while (have_rows('header_slider')):
                                        the_row();
                                        $car = get_sub_field('header_car');
                                        ?>
                                        <div class="carousel-item <?php echo ($j == 0) ? 'active' : ''; ?>">
                                            <picture>
                                                <?php if (!empty($car)): ?>
                                                    <img class="d-block lazyload" src="<?php echo esc_url($car['url']); ?>"
                                                        alt="<?php echo esc_attr($car['alt']); ?>" width="519" height="292">
                                                <?php endif; ?>
                                            </picture>
                                        </div>
                                        <?php
                                        $j++;
                                    endwhile;
                                    ?>
                                </div>
                                <ol class="carousel-indicators">
                                    <?php
                                    $k = 0;
                                    while (have_rows('header_slider')):
                                        the_row();
                                        ?>
                                        <li data-target="#homeBanner" data-slide-to="<?php echo $k; ?>"
                                            class="<?php echo ($k == 0) ? 'active' : ''; ?>">
                                        </li>
                                        <?php $k++; endwhile; ?>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div><!-- row -->
            </div>
        </div>
    </section>
<?php endif; ?>

<section class="our-services-section">
    <div class="container">
        <div class="services-inner">
            <div class="services-title">
                <?php
                $services = get_field('services');

                if ($services):
                    $title = $services['title'];
                    $description = $services['description'];
                    ?>
                    <div class="section-title">
                        <h2><?php echo esc_html($title); ?></h2>
                    </div>
                    <div class="common-para">
                        <p><?php echo esc_html("$description") ?></p>
                    </div>
                <?php endif; ?>
            </div>
            <div class="our-boxes">
                <?php
                if ($services && !empty($services["services"])):
                    foreach ($services["services"] as $data):
                        $title = $data["title"];
                        $description = $data["description"];
                        $image = $data["icon_image"];
                        $learn = $data["button"];
                        $icon = $data["icon"];
                        ?>
                        <div class="services-box">
                            <div class="service-icon">
                                <span class="service-icon">
                                    <img src="<?php echo esc_url($image["url"]); ?>"
                                        alt="<?php echo esc_attr($image["url"]); ?>">
                                </span>
                            </div>
                            <div class="service-content">
                                <h3><?php echo $title; ?></h3>
                                <div class="common-para">
                                    <p><?php echo $description; ?></p>
                                </div>
                                <div class="more-btn">
                                    <a href="<?php echo esc_url($learn['url']); ?>"
                                        target="<?php echo esc_attr($learn['target']); ?>">
                                        <?php echo esc_html($learn['title']); ?>
                                        <span>
                                            <img src="<?php echo esc_url($icon["url"]); ?>"
                                                alt="<?php echo esc_attr($image["url"]); ?>">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="recently-sold-section">
    <div class="recently-sold-title">
        <div class="container">
            <div class="sold-title-inner">
                <div class="section-title">
                    <?php if (get_field('Sold_Vehicles_title')): ?>
                        <h2><?php the_field("Sold_Vehicles_title"); ?></h2>
                    <?php endif; ?>
                </div>
                <div class="common-para">
                    <?php if (get_field("Sold_Vehicles_description")): ?>
                        <p><?php the_field("Sold_Vehicles_description"); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="recently_sold-slider">
            <div class="slide_next-prev">
                <div class="swiper-button-prev-new">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.804" height="14.261"
                            viewBox="0 0 19.804 14.261">
                            <g data-name="Group 19410" transform="translate(0.75 1.061)">
                                <path d="M6.07,0,0,6.07l6.07,6.07" transform="translate(0)" fill="none" stroke="#ca0e00"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                <path data-name="Vector" d="M16.83,0H0" transform="translate(1.474 6.07)" fill="none"
                                    stroke="#ca0e00" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" />
                            </g>
                        </svg>
                    </span>
                </div>
                <div class="swiper-button-next-new">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g data-name="vuesax/linear/arrow-right" transform="translate(-620 -188)">
                                <g>
                                    <g data-name="Group 19410" transform="translate(-0.511 0.029)">
                                        <path d="M0,0,6.07,6.07,0,12.14" transform="translate(635.745 193.971)"
                                            fill="none" stroke="#ca0e00" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" />
                                        <path data-name="Vector" d="M0,0H16.83" transform="translate(623.511 200.041)"
                                            fill="none" stroke="#ca0e00" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" />
                                    </g>
                                    <path data-name="Vector" d="M0,0H24V24H0Z"
                                        transform="translate(644 212) rotate(180)" fill="none" opacity="0" />
                                </g>
                            </g>
                        </svg>
                    </span>
                </div>
            </div>

            <div class="swiper rc-sold-slider" id="rc-sold-slider">
                <div class="swiper-wrapper">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 8,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()):
                        while ($query->have_posts()):
                            $query->the_post(); ?>
                            <?php
                            $car_image = get_the_post_thumbnail_url();
                            $car_title = get_the_title();
                            $car_description = get_the_content();
                            ?>

                            <div class="swiper-slide">
                                <div class="sold-height">
                                    <div class="slider-img">
                                        <a href="#">
                                            <picture>
                                                <?php if ($car_image): ?>
                                                    <img class="lazyload" data-src="<?php echo esc_url($car_image); ?>"
                                                        src="<?php echo esc_url($car_image); ?>"
                                                        alt="<?php echo esc_attr($car_title); ?>" width="380" height="254">
                                                <?php else: ?>
                                                    <p>No featured image found.</p>
                                                <?php endif; ?>
                                            </picture>
                                        </a>
                                    </div>
                                    <div class="slider-content">
                                        <a href="#"><?php echo ($car_title); ?></a>
                                        <div class="common-para">
                                            <p><?php echo ($car_description); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="sold-button">
        <div class="container">
            <div class="sold-button-inner">
                <button class="btn common-btn">Sign Up</button>
                <button class="btn common-btn">Login</button>
                <button class="btn common-btn">Learn More</button>
            </div>

        </div>
    </div>
</section>

<?php $home_id = get_option('page_on_front'); ?>
<section class="about-section">
    <div class="container">
        <?php
        $about_title = get_field('about_title', $home_id);
        $about_description = get_field('about_description', $home_id);
        $about_button = get_field('about_button', $home_id);
        $about_image = get_field('about_image', $home_id);
        ?>
        <div class="about-inner">
            <div class="about-content">
                <div class="section-title">
                    <h2><?php echo esc_html($about_title); ?></h2>
                </div>
                <div class="common-para">
                    <p><?php echo esc_html($about_description); ?></p>
                </div>

                <?php if ($about_button): ?>
                    <a href="<?php echo esc_url($about_button['url']); ?>"
                        target="<?php echo esc_attr($about_button['target'] ?: '_self'); ?>" class="btn common-btn">
                        <?php echo esc_html($about_button['title']); ?>
                    </a>
                <?php endif; ?>
            </div>
            <?php if ($about_image): ?>
                <div class="about-img">
                    <picture>
                        <img class="lazyload" data-src="<?php echo esc_url($about_image['url']); ?>"
                            src="<?php echo esc_url($about_image['url']); ?>"
                            alt="<?php echo esc_attr($about_image['alt']); ?>" width="519" height="180">
                    </picture>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="testimonials-wrapper">
        <?php
        $title = get_field('testimonials_title', $home_id);
        $description = get_field('testimonials_description', $home_id);
        $button = get_field('testimonials_button', $home_id);
        ?>
        <div class="testimonials-title">
            <div class="section-title">
                <h2><?php echo esc_html($title); ?></h2>
            </div>

            <div class="common-para">
                <p><?php echo esc_html($description); ?></p>
            </div>

            <?php if ($button): ?>
                <a href="<?php echo esc_url($button['url']); ?>" class="btn common-btn"
                    target="<?php echo esc_attr($button['target']); ?>">
                    <?php echo esc_html($button['title']); ?>
                </a>
            <?php endif; ?>
        </div>

        <div class="testimonials-slider-wrapper">
            <div class="slide_next-prev">
                <div class="swiper-button-prev">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.804" height="14.261"
                            viewBox="0 0 19.804 14.261">
                            <g data-name="Group 19410" transform="translate(0.75 1.061)">
                                <path d="M6.07,0,0,6.07l6.07,6.07" transform="translate(0)" fill="none" stroke="#ca0e00"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                <path data-name="Vector" d="M16.83,0H0" transform="translate(1.474 6.07)" fill="none"
                                    stroke="#ca0e00" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" />
                            </g>
                        </svg>
                    </span>
                </div>

                <div class="swiper-button-next">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g data-name="vuesax/linear/arrow-right" transform="translate(-620 -188)">
                                <g>
                                    <g data-name="Group 19410" transform="translate(-0.511 0.029)">
                                        <path d="M0,0,6.07,6.07,0,12.14" transform="translate(635.745 193.971)"
                                            fill="none" stroke="#ca0e00" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" />
                                        <path data-name="Vector" d="M0,0H16.83" transform="translate(623.511 200.041)"
                                            fill="none" stroke="#ca0e00" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" />
                                    </g>
                                    <path data-name="Vector" d="M0,0H24V24H0Z"
                                        transform="translate(644 212) rotate(180)" fill="none" opacity="0" />
                                </g>
                            </g>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="swiper testimonials-slider" id="testimonials-slider">
                <div class="swiper-wrapper">
                    <?php
                    $args = array(
                        'post_type' => 'testimonial',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()):
                        while ($query->have_posts()):
                            $query->the_post();  

                            $testimonials_title = get_the_title();
                            $testimonials_description = get_the_content();
                            $testimonials_image = get_field('author_image');
                            $testimonials_rating = get_field('testimonial_rating');
                            // var_dump($testimonials_rating);
                    
                            ?>
                            <div class="swiper-slide">
                                <div class="testi-inner">
                                    <div class="testimonial-content">
                                        <div class="common-para">
                                            <p>
                                                <?php echo $testimonials_description; ?>
                                            </p>
                                        </div>
                                        <div class="testimo-reting">
                                            <?php
                                            $rating = intval($testimonials_rating);
                                            if ($rating <= 0) {
                                                $rating = 5;
                                            }

                                            for ($i = 1; $i <= $rating; $i++) {
                                                echo '<img src="' . get_template_directory_uri() . '/assets/images/star-icon.svg" alt="star">';
                                            }
                                            ?>
                                        </div>

                                    </div>
                                    <div class="testimonial-footer">
                                        <div class="testimonial-name">
                                            <?php echo $testimonials_title; ?>
                                        </div>
                                        <div class="testimonial-img">
                                            <picture>
                                                <img class="lazyload"
                                                    data-src="<?php echo esc_url($testimonials_image['url']) ?>"
                                                    src="<?php echo esc_url($testimonials_image['url']) ?>"
                                                    alt="<?php echo esc_url($testimonials_image['url']) ?>" width="40"
                                                    height="40">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--    about-section End   -->

<!--    Trusted Partners Section Start  -->

<section class="trusted-partners-section">
    <div class="container">
        <div class="section-title">
            <h2><?php the_field('trusted_partners_title', $home_id); ?></h2>
        </div>
    </div>
    <?php if (have_rows("trusted_partners_image", $home_id)): ?>
        <div class="trusted-partners-slider">
            <div class=" trusted-partners">
                <div class="swiper-wrapper">
                    <?php while (have_rows("trusted_partners_image", $home_id)):
                        the_row();
                        $image = get_sub_field("image", $home_id);
                        ?>
                        <div class="swiper-slide">
                            <picture>
                                <img class="lazyload" data-src="<?php echo esc_url($image["url"]) ?>"
                                    src="<?php echo esc_url($image["url"]) ?>" alt="partners img" width="158" height="41">
                            </picture>
                        </div>
                    <?php endwhile; ?>                    
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>
<?php get_footer(); ?>