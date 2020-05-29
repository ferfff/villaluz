<?php
/**
 * The template part for displaying slider
 *
 * @package ts-photography
 * @subpackage ts-photography
 * @since ts-photography 1.0
 */
?>	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
        <h2><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
        <div class="entry-attachment">
            <div class="attachment">
                <?php ts_photography_the_attached_image(); ?>
            </div>

            <?php if ( has_excerpt() ) : ?>
                <div class="entry-caption">
                    <div class="entry-content"><p><?php the_excerpt();?></p></div>
                </div>
            <?php endif; ?>
        </div>    
        <?php
            the_content();
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'ts-photography' ),
                'after'  => '</div>',
            ) );
        ?>
    </div>    
    <?php edit_post_link( __( 'Edit', 'ts-photography' ), '<footer  role="contentinfo" class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
    <?php
        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || '0' != get_comments_number() )
            comments_template();

        if ( is_singular( 'attachment' ) ) {
            // Parent post navigation.
            the_post_navigation( array(
                'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'ts-photography' ),
            ) );
        }   elseif ( is_singular( 'post' ) ) {
            // Previous/next post navigation.
            the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next <i class="far fa-long-arrow-alt-right"></i>', 'ts-photography' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Next post:', 'ts-photography' ) . '</span> ' ,
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( '<i class="far fa-long-arrow-alt-left"></i> Previous', 'ts-photography' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'ts-photography' ) . '</span> ' ,
            ) );
        }

    ?>
</article>