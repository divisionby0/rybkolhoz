<?php
/**
 * Gallery Section
 *
 * @package Bakes And Cakes
 */
$gallery_page  = get_theme_mod('bakes_and_cakes_gallery_page');
if($gallery_page){
    $gallery_qry = new WP_Query(array(
        'post_type' => 'page',
        'p' => $gallery_page,
    )); ?>

    <div class="container">
        <?php if($gallery_qry->have_posts()){
            while( $gallery_qry->have_posts() ){ $gallery_qry->the_post(); ?>
                <div class="fullwidth">
                    <header class="heading">
                        <h1 class="main-title"><?php the_title(); ?></h1>
                    </header>
                    <div class="text">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php  } }
        wp_reset_postdata();?>
    </div>
<?php } ?>