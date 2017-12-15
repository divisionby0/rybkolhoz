<?php
/*
Template Name: page-about_rybkolhoz
*/

$sidebar_layout = bakes_and_cakes_sidebar_layout();

get_header(); ?>


    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'page_about_rybkolhoz' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
if( $sidebar_layout == 'right-sidebar' ) get_sidebar();
get_footer();