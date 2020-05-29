<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-ts">
 *
 * @package ts-photography
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'ts-photography' ) ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  
  <div class="<?php if( get_theme_mod( 'ts_photography_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
    <header role="banner">
      <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'ts-photography' ); ?></a>
      <div class="container">
        <div class="main-header">
          <div id="header">
            <div class="row">
              <div class="logo col-lg-3 col-md-9 col-9">
                <?php if ( has_custom_logo() ) : ?>
                <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php else: ?>
                <?php $blog_info = get_bloginfo( 'name' ); ?>
                <?php if ( ! empty( $blog_info ) ) : ?>
                  <?php if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                  <?php else : ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php endif; ?>
                <?php endif; ?>
                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) :
                  ?>
                <p class="site-description">
                  <?php echo esc_html($description); ?>
                </p>
              <?php endif; ?>
              <?php endif; ?>
              </div>
              <div class="col-lg-8 col-md-3 col-3 padremove">
                <div class="toggle-menu responsive-menu">
                  <button onclick="resMenu_open()"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','ts-photography'); ?></span></button>
                </div>
                <div id="menu-sidebar" class="nav sidebar">
                  <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'ts-photography' ); ?>">
                    <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="resMenu_close()"><i class="far fa-times-circle"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','ts-photography'); ?></span></a>
                    <?php 
                      wp_nav_menu( array( 
                        'theme_location' => 'primary',
                        'container_class' => 'main-menu-navigation clearfix' ,
                        'menu_class' => 'clearfix',
                        'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                        'fallback_cb' => 'wp_page_menu',
                      ) ); 
                    ?>
                    <div id="contact-info">
                      <div class="social-media">
                        <?php if( get_theme_mod( 'ts_photography_facebook_url') != '') { ?>
                          <a href="<?php echo esc_url( get_theme_mod( 'ts_photography_facebook_url','' ) ); ?>"><i class="fab fa-facebook-square"></i><span class="screen-reader-text"><?php esc_attr_e( 'Facebook','ts-photography' );?></span></a>
                        <?php } ?>                       
                        <?php if( get_theme_mod( 'ts_photography_twitter_url') != '') { ?>
                          <a href="<?php echo esc_url( get_theme_mod( 'ts_photography_twitter_url','' ) ); ?>"><i class="fab fa-twitter-square"></i><span class="screen-reader-text"><?php esc_attr_e( 'Twitter','ts-photography' );?></span></a>
                        <?php } ?>
                        <?php if( get_theme_mod( 'ts_photography_youtube_url') != '') { ?>
                          <a href="<?php echo esc_url( get_theme_mod( 'ts_photography_youtube_url','' ) ); ?>"><i class="fab fa-youtube-square"></i><span class="screen-reader-text"><?php esc_attr_e( 'Youtube','ts-photography' );?></span></a>
                        <?php } ?> 
                        <?php if( get_theme_mod( 'ts_photography_rss_url') != '') { ?>
                          <a href="<?php echo esc_url( get_theme_mod( 'ts_photography_rss_url','' ) ); ?>"><i class="fas fa-rss-square"></i><span class="screen-reader-text"><?php esc_attr_e( 'RSS','ts-photography' );?></span></a>
                        <?php } ?>
                        <?php if( get_theme_mod( 'ts_photography_insta_url') != '') { ?>
                          <a href="<?php echo esc_url( get_theme_mod( 'ts_photography_insta_url','' ) ); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php esc_attr_e( 'Instagram','ts-photography' );?></span></a>
                        <?php } ?>
                        <?php if( get_theme_mod( 'ts_photography_pint_url') != '') { ?>
                          <a href="<?php echo esc_url( get_theme_mod( 'ts_photography_pint_url','' ) ); ?>"><i class="fab fa-pinterest-square"></i><span class="screen-reader-text"><?php esc_attr_e( 'Pinterest','ts-photography' );?></span></a>
                        <?php } ?>
                      </div>
                      <?php get_search_form();?>
                    </div>
                  </nav>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <a href="#" onclick="search_open()" class="search-box">
                  <i class="fas fa-search"></i><span class="screen-reader-text"><?php esc_html_e( 'Search','ts-photography' );?></span>
                </a>
              </div>
            </div>
            <div class="serach_outer">
              <a href="#" onclick="search_close()" class="closepop">X<span class="screen-reader-text"><?php esc_html_e( 'serach-outer','ts-photography' );?></span></a>
              <div class="serach_inner">
                <?php get_search_form(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
  </div>
  <div class="clearfix"></div>   
</div>