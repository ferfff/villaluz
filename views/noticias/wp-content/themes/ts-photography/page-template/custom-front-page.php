<?php
/**
 * Template Name: Custom home
 */

get_header(); ?>

<main role="main" id="maincontent">
  <?php do_action( 'ts_photography_before_slider' ); ?>

  <?php /** slider section **/ ?>
  <?php if( get_theme_mod('ts_photography_slider_hide_show',true) != ''){ ?>

    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
        <?php $slider_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'ts_photography_slidersettings-page-' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $slider_pages[] = $mod;
            }
          }
          if( !empty($slider_pages) ) :
          $args = array(
              'post_type' => 'page',
              'post__in' => $slider_pages,
              'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <?php the_post_thumbnail(); ?>
            <div class="carousel-caption">
              <div class="inner_carousel">
                <h1><?php the_title();?></h1>
                <p><?php $excerpt = get_the_excerpt(); echo esc_html( ts_photography_string_limit_words( $excerpt, esc_attr(get_theme_mod('ts_photography_slider_excerpt_length','10')))); ?></p>
                <div class="know-btn">
                  <a href="<?php the_permalink(); ?>"><?php echo esc_html_e('DISCOVER MORE','ts-photography'); ?><span class="screen-reader-text"><?php esc_html_e( 'DISCOVER MORE','ts-photography' );?></span></a>
                </div>
              </div>
            </div>
          </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','ts-photography' );?></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','ts-photography' );?></span>
        </a>
      </div>  
      <div class="clearfix"></div>
    </section> 
    
  <?php }?>
  <?php do_action( 'ts_photography_after_slider' ); ?>

  <?php /** post section **/ ?>
    <section id="ts-photography">
      <div class="container">
        <div class="row">
          <?php 
            $catData=  get_theme_mod('ts_photography_category');
              if($catData){
                $page_query = new WP_Query(array( 'category_name' => esc_html($catData,'ts-photography')));?>
                  <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                  <div class="col-lg-4 col-md-4"> 
                    <div class="photo-content">
                      <div class="imagebox">
                        <?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?>
                        <div class="contentbox">
                          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
                          <p><?php $excerpt = get_the_excerpt(); echo esc_html( ts_photography_string_limit_words( $excerpt,10 ) ); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php endwhile;
            wp_reset_postdata();
            }?>
          <div class="clearfix"></div>
        </div>
      </div>
    </section>

  <?php do_action( 'ts_photography_after_photography_section' ); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>