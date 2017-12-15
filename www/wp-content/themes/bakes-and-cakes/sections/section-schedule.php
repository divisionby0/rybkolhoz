<?php
/**
 * Our Story Section
 *
 * @package Bakes And Cakes
 */

$schedule_page  = get_theme_mod('bakes_and_cakes_schedule_page');
if($schedule_page){
    $schedule_qry = new WP_Query(array(
        'post_type' => 'page',
        'p' => $schedule_page,
    )); ?>

    <div class="container">

        <?php if($schedule_qry->have_posts()){
            while( $schedule_qry->have_posts() ){ $schedule_qry->the_post(); ?>
                <div class="columns-2">
                    <header class="heading">
                        <h1 class="main-title"><?php the_title(); ?></h1>
                    </header>
                    <div class="text">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="columns-2">
                    <a href="https://yandex.ru/maps/?um=constructor%3A28b49f038ea7cf014ba6e69a056d652bb7c36e30e30d36fdcc019514033bd394&amp;source=constructorStatic" target="_blank"><img src="https://api-maps.yandex.ru/services/constructor/1.0/static/?um=constructor%3A28b49f038ea7cf014ba6e69a056d652bb7c36e30e30d36fdcc019514033bd394&amp;width=500&amp;height=400&amp;lang=ru_RU" alt="" style="border: 0;" /></a>
                </div>


                <?php  } }
        wp_reset_postdata();?>
    </div>
<?php } ?>