<?php
/**
 * The template for displaying archive pages
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Teri Shop
 */

get_header();
?>
<section class="top-banner">
    <?php $bgimage = get_the_post_thumbnail_url();
    $bgtitle = get_the_title(); ?>
    <picture>
        <img class="lazyload" data-src="<?php echo esc_url($bgimage); ?>" src="<?php echo esc_url($bgimage); ?>"
            alt="blogs banner" width="1349" height="287">
    </picture>
    <div class="banner-heading">
        <div class="container">
            <h1 data-title="Blogs"><?php echo $bgtitle;?></h1>
        </div>
    </div>
</section>
<section class="blog-main-section">
    <div class="container">
        <div class="blog-inner">
            <div class="blog-tabs">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" data-category="all-car" data-toggle="pill" href="#all-car">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link category-btn" data-category="ferrari" data-toggle="pill"
                            href="#ferrari">ferrari</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link category-btn" data-category="mercedes" data-toggle="pill"
                            href="#mercedes">mercedes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link category-btn" data-category="rollsroyce" data-toggle="pill"
                            href="#rollsroyce">rollsroyce</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link category-btn" data-category="lamborghini" data-toggle="pill"
                            href="#lamborghini">lamborghini</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="all-car" aria-labelledby="all-car">
                    <div class="blog-boxes" id="blog-container">
                        <?php
                        $arg = array(
                            'post_type' => 'post',   // FIXED
                             'posts_per_page' => 9,
                            'orderby' => 'date',
                            'order' => 'DESC',
                        );
                        $query = new WP_Query($arg);
                        $max_pages = $query->max_num_pages;

                        if ($query->have_posts()):
                            while ($query->have_posts()):
                                $query->the_post(); ?>

                                <div class="blog-box">
                                    <div class="blog-img">
                                        <a href="<?php the_permalink(); ?>">
                                            <picture>
                                                <img class="lazyload" data-src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                    src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                    alt="<?php the_title(); ?>" width="406" height="261">
                                            </picture>
                                        </a>
                                        <div class="blog-date"><?php echo get_the_date('F jS, Y'); ?></div>
                                    </div>

                                    <div class="blog-content">
                                        <h4><?php the_title(); ?></h4>

                                        <h2 class="blog-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_field("car_brand_name"); ?></a>
                                        </h2>
                                        <div class="common-para">
                                            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                        </div>
                                        <a class="ream-more" href="<?php the_permalink(); ?>">Read More</a>
                                    </div>
                                </div>

                            <?php endwhile;
                        endif; ?>

                    </div>
                </div>

                <div class="tab-pane fade" id="rollsroyce" aria-labelledby="rollsroyce-tab">
                    <div class="blog-boxes">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                             'posts_per_page' => 9,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'category_name' => 'rollsroyce'
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()):
                            while ($query->have_posts()):
                                $query->the_post(); ?>

                                <div class="blog-box">
                                    <div class="blog-img">
                                        <a href="<?php the_permalink(); ?>">
                                            <picture>
                                                <img class="lazyload" data-src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                    src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                    alt="<?php the_title(); ?>" width="406" height="261">
                                            </picture>
                                        </a>
                                        <div class="blog-date"><?php echo get_the_date('F jS, Y'); ?></div>
                                    </div>

                                    <div class="blog-content">
                                        <h4><?php the_title(); ?></h4>

                                        <h2 class="blog-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_field("car_brand_name"); ?></a>
                                        </h2>
                                        <div class="common-para">
                                            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                        </div>
                                        <a class="ream-more" href="<?php the_permalink(); ?>">Read More</a>
                                    </div>
                                </div>

                            <?php endwhile;
                        endif; ?>

                        wp_reset_postdata();
                        ?>
                    </div>
                </div>

                <div class="tab-pane fade" id="ferrari" aria-labelledby="ferrari-tab">
                    <div class="blog-boxes">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                             'posts_per_page' => 9,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'category_name' => 'ferrari'
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()):
                            while ($query->have_posts()):
                                $query->the_post(); ?>

                                <div class="blog-box">
                                    <div class="blog-img">
                                        <a href="<?php the_permalink(); ?>">
                                            <picture>
                                                <img class="lazyload" data-src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                    src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                    alt="<?php the_title(); ?>" width="406" height="261">
                                            </picture>
                                        </a>
                                        <div class="blog-date"><?php echo get_the_date('F jS, Y'); ?></div>
                                    </div>

                                    <div class="blog-content">
                                        <h4><?php the_title(); ?></h4>

                                        <h2 class="blog-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_field("car_brand_name"); ?></a>
                                        </h2>
                                        <div class="common-para">
                                            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                        </div>
                                        <a class="ream-more" href="<?php the_permalink(); ?>">Read More</a>
                                    </div>
                                </div>

                            <?php endwhile;
                        endif; ?>
                    </div>
                </div>

                <div class="tab-pane fade" id="lamborghini" aria-labelledby="lamborghini-tab">

                    <div class="blog-boxes">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                             'posts_per_page' => 9,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'category_name' => 'lamborghini'
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()):
                            while ($query->have_posts()):
                                $query->the_post(); ?>

                                <div class="blog-box">
                                    <div class="blog-img">
                                        <a href="<?php the_permalink(); ?>">
                                            <picture>
                                                <img class="lazyload" data-src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                    src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                    alt="<?php the_title(); ?>" width="406" height="261">
                                            </picture>
                                        </a>
                                        <div class="blog-date"><?php echo get_the_date('F jS, Y'); ?></div>
                                    </div>

                                    <div class="blog-content">
                                        <h4><?php the_title(); ?></h4>

                                        <h2 class="blog-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_field("car_brand_name"); ?></a>
                                        </h2>
                                        <div class="common-para">
                                            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                        </div>
                                        <a class="ream-more" href="<?php the_permalink(); ?>">Read More</a>
                                    </div>
                                </div>

                            <?php endwhile;
                        endif; ?>
                    </div>
                </div>

                <div class="tab-pane fade" id="mercedes" aria-labelledby="mercedes-tab">
                    <div class="blog-boxes">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                             'posts_per_page' => 9,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'category_name' => 'mercedes'
                        );

                        $query = new WP_Query($args);

                       if ($query->have_posts()):
                            while ($query->have_posts()):
                                $query->the_post(); ?>

                                <div class="blog-box">
                                    <div class="blog-img">
                                        <a href="<?php the_permalink(); ?>">
                                            <picture>
                                                <img class="lazyload" data-src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                    src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                    alt="<?php the_title(); ?>" width="406" height="261">
                                            </picture>
                                        </a>
                                        <div class="blog-date"><?php echo get_the_date('F jS, Y'); ?></div>
                                    </div>

                                    <div class="blog-content">
                                        <h4><?php the_title(); ?></h4>

                                    <h2 class="blog-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_field("car_brand_name"); ?></a>
                                        </h2>
                                        <div class="common-para">
                                            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                        </div>
                                        <a class="ream-more" href="<?php the_permalink(); ?>">Read More</a>
                                    </div>
                                </div>

                            <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>

            <div class="more-blog">
                <button id="load-more" data-page="1" data-category="all-car" class="btn common-btn">Load More</button>
            </div>

        </div>
    </div>
</section>
<?php get_footer(); ?>