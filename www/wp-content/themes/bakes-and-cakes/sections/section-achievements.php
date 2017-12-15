<?php
/**
 * Our Story Section
 *
 * @package Bakes And Cakes
 */

$achievements_page  = get_theme_mod('bakes_and_cakes_achievements_page');
if($achievements_page){
    $achievements_qry = new WP_Query(array(
        'post_type' => 'page',
        'p' => $achievements_page,
    )); ?>

    <div class="container">

        <?php if($achievements_qry->have_posts()){
            while( $achievements_qry->have_posts() ){ $achievements_qry->the_post(); ?>

                <div class="columns-2">
                    <header class="heading">
                        <h1 class="main-title"><?php the_title(); ?></h1>
                    </header>
                    <div class="text">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
                <div class="columns-2 image-holder">
                    <?php the_post_thumbnail('bakes-and-cakes-about-thumb'); ?>
                </div>
                <?php  } }
        wp_reset_postdata();?>
    </div>
<?php } ?>