<?php
/**
 * The template part for displaying services
 *
 * @package ts-photography
 * @subpackage ts-photography
 * @since ts-photography 1.0
 */
?> 
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>  
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <div class="page-box">
        <h2 class="section-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
        <hr>
        <?php if( get_theme_mod( 'ts_photography_date_hide',true) != '') { ?>
            <span class="entry-date"><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
        <?php } ?>
        <div class="box-image">
            <?php
                if ( ! is_single() ) {

                    // If not a single post, highlight the gallery.
                    if ( get_post_gallery() ) {
                      echo '<div class="entry-gallery">';
                        echo get_post_gallery();
                      echo '</div>';
                    };
                };
            ?>
        </div>
        <div class="entry-content"><p><?php $excerpt = get_the_excerpt(); echo esc_html( ts_photography_string_limit_words( $excerpt, esc_attr(get_theme_mod('ts_photography_excerpt_number','20')))); ?></p></div>
        <hr class="con-hr">
        <div class="content-bttn">     
            <a href="<?php the_permalink();?>" class="blogbutton-small hvr-sweep-to-right" title="<?php esc_attr_e( 'Read More', 'ts-photography' ); ?>"><?php echo esc_html(get_theme_mod('ts_photography_button_text','Read More'));?><span class="screen-reader-text"><?php esc_html_e( 'Read More','ts-photography' );?></span></a>
        </div>
    </div>
</article>
