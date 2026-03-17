<?php
/**
 * Template Name: Custom Page Template
 * Description: A custom page template for displaying content.
 */

get_header(); // Includes the header.php file

?>

<div class="container">
    <div class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            // Start the Loop
            while (have_posts()):
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <?php
                        // Display the content of the page
                        the_content();

                        // If the page has children (sub-pages), you can display them here
                        wp_link_pages(); // For paginated pages (if applicable)
                        ?>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer">
                        <?php
                        // You can add footer elements here, like categories or tags
                        // For example: 
                        // echo 'Posted on: ' . get_the_date();
                        ?>
                    </footer><!-- .entry-footer -->
                </article><!-- #post-<?php the_ID(); ?> -->

                <?php
            endwhile; // End the Loop
            ?>

        </main><!-- #main -->
    </div><!-- .content-area -->
</div><!-- .container -->

<?php
get_sidebar(); // Includes the sidebar.php file (optional)
get_footer();  // Includes the footer.php file