<?php
/**
 * Counters Section
 *
 * @package Bakes And Cakes
 */
$justtext_page  = get_theme_mod('bakes_and_cakes_counters_page');
if($justtext_page){
    $justtext_query = new WP_Query(array(
        'post_type' => 'page',
        'p' => $justtext_page,
    )); ?>

    <div class="container">
        <?php if($justtext_query->have_posts()){
            while( $justtext_query->have_posts() ){ $justtext_query->the_post();
                ?>
                <div class="fullwidth">
                    <?php

                    $page_id = get_the_ID();

                    $counter_1 = get_post_meta($page_id, "counter_1", true);
                    $counter_2 = get_post_meta($page_id, "counter_2", true);
                    $counter_3 = get_post_meta($page_id, "counter_3", true);

                    echo "<div style='width: 100%;'>";
                    echo "<div class='counters_circle'><img src=".get_template_directory_uri()."'/images/circle_1.png'></div>";
                    echo "<div class='counters_circle'><img src=".get_template_directory_uri()."'/images/circle_2.png'></div>";
                    echo "<div class='counters_circle'><img src=".get_template_directory_uri()."'/images/circle_3.png'></div>";
                    echo "</div>";
                    ?>
                </div>

                <?php
            }
        }
        wp_reset_postdata();
        ?>
    </div>
<?php } ?>