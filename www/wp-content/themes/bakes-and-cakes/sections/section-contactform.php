<?php
/**
 * ContactForm Section
 *
 * @package Bakes And Cakes
 */

$contact_form_page  = get_theme_mod('bakes_and_cakes_contact_form_page');
if($contact_form_page){
    $contact_form_qry = new WP_Query(array(
        'post_type' => 'page',
        'p' => $contact_form_page,
    )); ?>

    <div class="container">
        <?php if($contact_form_qry->have_posts()){
            while( $contact_form_qry->have_posts() ){ $contact_form_qry->the_post(); ?>
                <div class="columns-2">
                    <header class="heading">
                        <h1 class="main-title"><?php the_title(); ?></h1>
                    </header>
                    <div class="text">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php  } }
        wp_reset_postdata();?>
        <div class="columns-2">
            <?php
            echo do_shortcode("[ninja_form id=3]");
            ?>
        </div>
    </div>
<?php } ?>