<?php
/*
Template Name: page-articles
*/
$sidebar_layout = bakes_and_cakes_sidebar_layout();
get_header();
$args = array(
    'posts_per_page'   => 0,
    'offset'           => 0,
    'category'         => '6',
    'category_name'    => '',
    'orderby'          => 'date',
    'order'            => 'DESC',
    'include'          => '',
    'exclude'          => '',
    'meta_key'         => '',
    'meta_value'       => '',
    'post_type'        => 'post',
    'post_mime_type'   => '',
    'post_parent'      => '',
    'author'	   => '',
    'author_name'	   => '',
    'post_status'      => 'publish',
    'suppress_filters' => true
);
$posts_array = get_posts( $args );


echo "<div id=\"primary\" class=\"content-area\">";
echo "<main id=\"main\" class=\"site-main\" role=\"main\">";

foreach ( $posts_array as $post ) : setup_postdata( $post );
    echo "<div class='fullwidth' style='padding-left: 10px; min-height: 150px;'>";
    echo "<div style='display: block; float: left; width: 20%;'><a href='".get_the_permalink($post)."'>";
    the_post_thumbnail( 'thumbnail' );
    echo "</a></div><div style='display: block; float: left; width: 80%; padding-left: 20px;'>"
    ?>
    <header class="entry-header">
        <a href="<?php the_permalink();?>">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </a>
    </header><!-- .entry-header -->
    <div><?php the_excerpt();?></div>
    <div class="fullwidth" style="text-align: right;">
        <div class="btn-holder">
            <a href="<?php the_permalink(); ?>">
                <?php echo _e('Read More', 'bakes-and-cakes'); ?>
            </a>
        </div>
    </div>

    </div>


    <?php
    echo "</div>";
    //echo the_permalink();
    //echo the_title();
endforeach;

echo "</main>";
echo "</div>";
?>


<?php
wp_reset_postdata();
if( $sidebar_layout == 'right-sidebar' ) get_sidebar();
get_footer();