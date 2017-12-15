<?php
$ed_full_content = get_theme_mod( 'bakes_and_cakes_ed_full_content' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-thumbnail" style="text-align: center;">
        <?php
        $postId = get_the_ID();
        echo get_the_post_thumbnail($postId, 'post-thumbnail');
        ?>
    </div>

    <div class="text-holder">
        <header class="entry-header">
            <?php
            if ( is_single() ) {
                the_title( '<h1 style="text-align: center;" class="entry-title">', '</h1>' );
            } else {
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            }

            if ( 'post' === get_post_type() ) : ?>
                <?php
            endif; ?>
        </header><!-- .entry-header -->

        <div class="entry-content" style="padding-left: 20px; padding-right: 20px;">
            <?php
            if( is_single() ){
                the_content( sprintf(
                    wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bakes-and-cakes' ), array( 'span' => array( 'class' => array() ) ) ),
                    the_title( '<span class="screen-reader-text">"', '"</span>', false )
                ) );
            }else{
                if( false === get_post_format() && !$ed_full_content  ){
                    the_excerpt();
                }else{
                    the_content( sprintf(
                    /* translators: %s: Name of current post. */
                        wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bakes-and-cakes' ), array( 'span' => array( 'class' => array() ) ) ),
                        the_title( '<span class="screen-reader-text">"', '"</span>', false )
                    ) );
                }
            }
            ?>
        </div>
    </div>

</article><!-- #post-## -->
