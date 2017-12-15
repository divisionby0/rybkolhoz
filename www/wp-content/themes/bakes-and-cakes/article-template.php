<?php
/*
 * Template Name: Article Template
 * Template Post Type: post, page, product
 */

get_header(); ?>

    <div id="primary" class="fullwidth" style="padding-left:10px; padding-right:10px;">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content', "article" );
            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
