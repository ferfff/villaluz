<?php
/**
 * The template for displaying image attachments.
 *
 * @package ts-photography
 */

get_header(); ?>

<main id="maincontent" role="main" class="our-services">
    <div class="container">
        <?php
            $left_right = get_theme_mod( 'ts_photography_layout_options','Right Sidebar');
            if($left_right == 'Left Sidebar'){ ?>
            <div class="row">
                <div class="col-lg-4 col-md-4"><?php get_sidebar();?></div>
                <div class="col-lg-8 col-md-8">
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>
                    <?php if ( have_posts() ) :
                      /* Start the Loop */
                      while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/image-layout' ); 
                      endwhile;
                      else :
                        get_template_part( 'no-results' ); 
                      endif; 
                    ?>                
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'ts-photography' ),
                                'next_text'          => __( 'Next page', 'ts-photography' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ts-photography' ) . ' </span>',
                            ) );
                        ?>
                    </div> 
                </div>
            </div>
        <?php }else if($left_right == 'Right Sidebar'){ ?>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>
                    <?php if ( have_posts() ) :
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/image-layout' ); 
                        endwhile;
                        else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'ts-photography' ),
                                'next_text'          => __( 'Next page', 'ts-photography' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ts-photography' ) . ' </span>',
                            ) );
                        ?>
                     </div> 
                </div>
              <div class="col-lg-4 col-md-4"><?php get_sidebar();?></div>
            </div>
        <?php }else if($left_right == 'One Column'){ ?>
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>
                    <?php if ( have_posts() ) :
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/image-layout' ); 
                        endwhile;
                        else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'ts-photography' ),
                                'next_text'          => __( 'Next page', 'ts-photography' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ts-photography' ) . ' </span>',
                            ) );
                        ?>
                    </div> 
        <?php }else if($left_right == 'Three Columns'){ ?>
            <div class="row">
               <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
                <div class="col-lg-6 col-md-6">
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>
                    <?php if ( have_posts() ) :
                      /* Start the Loop */
                      while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/image-layout' ); 
                      endwhile;
                      else :
                        get_template_part( 'no-results' ); 
                      endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'ts-photography' ),
                                'next_text'          => __( 'Next page', 'ts-photography' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ts-photography' ) . ' </span>',
                            ) );
                        ?>
                    </div> 
                </div>
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?></div>
            </div>
        <?php }else if($left_right == 'Four Columns'){ ?>
            <div class="row">
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
                <div class="col-lg-3 col-md-3">
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>
                    <?php if ( have_posts() ) :
                      /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/image-layout' ); 
                        endwhile;
                        else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'ts-photography' ),
                                'next_text'          => __( 'Next page', 'ts-photography' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ts-photography' ) . ' </span>',
                            ) );
                        ?>
                    </div> 
                </div>
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?></div>
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-3');?></div>
            </div>
        <?php }else if($left_right == 'Grid Layout'){ ?>
            <div class="row">
                <div class="col-lg-9 col-md-9 col-xs-12">
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>
                    <?php if ( have_posts() ) :
                      /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/image-layout' ); 
                        endwhile;
                        else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'ts-photography' ),
                                'next_text'          => __( 'Next page', 'ts-photography' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ts-photography' ) . ' </span>',
                            ) );
                        ?>
                    </div> 
                </div>
                <div class="col-lg-3 col-md-3"><?php get_sidebar();?></div>
            </div>
        <?php }else {?>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>
                    <?php if ( have_posts() ) :
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/image-layout' ); 
                        endwhile;
                        else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'ts-photography' ),
                                'next_text'          => __( 'Next page', 'ts-photography' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ts-photography' ) . ' </span>',
                            ) );
                        ?>
                    </div> 
                </div>
                <div class="col-lg-4 col-md-4"><?php get_sidebar();?></div>
            </div>
        <?php }?>
        <div class="clearfix"></div>
    </div>
</main>

<?php get_footer(); ?>