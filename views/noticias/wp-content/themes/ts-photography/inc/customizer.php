<?php
/**
 * TS Photography Theme Customizer
 *
 * @package ts-photography
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ts_photography_customize_register( $wp_customize ) {	

	//add home page setting pannel
	$wp_customize->add_panel( 'ts_photography_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'ts-photography' ),
	    'description' => __( 'Description of what this panel does.', 'ts-photography' ),
	) );

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'ts_photography_theme_color_option', 
		array( 'panel' => 'ts_photography_panel_id', 'title' => esc_html__( 'Theme Color Option', 'ts-photography' ) )
	);
	
  	$wp_customize->add_setting( 'ts_photography_theme_color_first', array(
	    'default' => '#ffcb08',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_photography_theme_color_first', array(
  		'label' => 'First Color Option',
  		'description' => __('One can change complete theme color on just one click.', 'ts-photography'),
	    'section' => 'ts_photography_theme_color_option',
	    'settings' => 'ts_photography_theme_color_first',
  	)));
  	
  	$wp_customize->add_setting( 'ts_photography_theme_color_second', array(
	    'default' => '#ec195c',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_photography_theme_color_second', array(
  		'label' => 'Second Color Option',
  		'description' => __('One can change complete theme color on just one click.', 'ts-photography'),
	    'section' => 'ts_photography_theme_color_option',
	    'settings' => 'ts_photography_theme_color_second',
  	)));

	//Layouts
	$wp_customize->add_section( 'ts_photography_left_right', array(
    	'title'      => __( 'Layout Settings', 'ts-photography' ),
		'priority'   => 30,
		'panel' => 'ts_photography_panel_id'
	) );

	//Sticky Header
	$wp_customize->add_setting( 'ts_photography_sticky_header',array(
      	'sanitize_callback'	=> 'sanitize_text_field'
    ) );
    $wp_customize->add_control('ts_photography_sticky_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Sticky Header','ts-photography' ),
        'section' => 'ts_photography_left_right'
    ));

	$wp_customize->add_setting('ts_photography_theme_options',array(
        'default' => __('Default','ts-photography'),
        'sanitize_callback' => 'ts_photography_sanitize_choices'
	));
	$wp_customize->add_control('ts_photography_theme_options',array(
        'type' => 'radio',
        'label' => __('Container Box','ts-photography'),
        'description' => __('Here you can change the Width layout. ','ts-photography'),
        'section' => 'ts_photography_left_right',
        'choices' => array(
            'Default' => __('Default','ts-photography'),
            'Container' => __('Container','ts-photography'),
            'Box Container' => __('Box Container','ts-photography'),
        ),
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('ts_photography_layout_options',array(
	        'default' => __('Right Sidebar','ts-photography'),
	        'sanitize_callback' => 'ts_photography_sanitize_choices'	        
	)  );
	$wp_customize->add_control('ts_photography_layout_options',array(
        'type' => 'radio',
        'label' => __('Sidebar Layouts','ts-photography'),
        'section' => 'ts_photography_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','ts-photography'),
            'Right Sidebar' => __('Right Sidebar','ts-photography'),
            'One Column' => __('One Column','ts-photography'),
            'Three Columns' => __('Three Columns','ts-photography'),
            'Four Columns' => __('Four Columns','ts-photography'),
            'Grid Layout' => __('Grid Layout','ts-photography')
        ),
	) );

	 $font_array = array(
        '' => 'No Fonts', 
        'Abril Fatface' =>'Abril Fatface', 
        'Acme' => 'Acme', 
        'Anton' => 'Anton', 
        'Architects Daughter' => 'Architects Daughter', 
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo', 
        'Alegreya' => 'Alegreya', 
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo', 
        'Bad Script' =>'Bad Script', 
        'Bitter' => 'Bitter', 
        'Bree Serif' => 'Bree Serif', 
        'BenchNine' => 'BenchNine', 
        'Cabin' =>  'Cabin', 
        'Cardo' => 'Cardo', 
        'Courgette' => 'Courgette', 
        'Cherry Swash' => 'Cherry Swash', 
        'Cormorant Garamond' => 'Cormorant Garamond', 
        'Crimson Text' => 'Crimson Text', 
        'Cuprum' => 'Cuprum', 
        'Cookie' =>  'Cookie', 
        'Chewy' => 'Chewy',
        'Days One' =>  'Days One',
        'Dosis' => 'Dosis', 
        'Droid Sans' => 'Droid Sans', 
        'Economica' => 'Economica', 
        'Fredoka One' => 'Fredoka One', 
        'Fjalla One' => 'Fjalla One', 
        'Francois One' => 'Francois One', 
        'Frank Ruhl Libre' =>  'Frank Ruhl Libre', 
        'Gloria Hallelujah' => 'Gloria Hallelujah', 
        'Great Vibes' =>  'Great Vibes', 
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One', 
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One', 
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster',
        'Lato' => 'Lato', 
        'Lora' => 'Lora', 
        'Libre Baskerville' => 'Libre Baskerville',
        'Lobster Two' =>'Lobster Two', 
        'Merriweather' => 'Merriweather',
        'Monda' => 'Monda', 
        'Montserrat' =>  'Montserrat',
        'Muli' =>  'Muli', 
        'Marck Script' => 'Marck Script', 
        'Noto Serif' => 'Noto Serif', 
        'Open Sans' => 'Open Sans',
        'Overpass' =>'Overpass', 
        'Overpass Mono' => 'Overpass Mono', 
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico', 
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball', 
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans', 
        'Philosopher' => 'Philosopher', 
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' =>  'Russo One',
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' => 'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light',
        'Sacramento' =>'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' =>  'Tangerine', 
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One', 
        'Vollkorn' => 'Vollkorn', 
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz'
    );

	//Typography
	$wp_customize->add_section( 'ts_photography_typography', array(
    	'title'      => __( 'Typography', 'ts-photography' ),
		'priority'   => 30,
		'panel' => 'ts_photography_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'ts_photography_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_photography_paragraph_color', array(
		'label' => __('Paragraph Color', 'ts-photography'),
		'section' => 'ts_photography_typography',
		'settings' => 'ts_photography_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('ts_photography_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_photography_sanitize_choices'
	));
	$wp_customize->add_control('ts_photography_paragraph_font_family', array(
	    'section'  => 'ts_photography_typography',
	    'label'    => __( 'Paragraph Fonts','ts-photography'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('ts_photography_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('ts_photography_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','ts-photography'),
		'section'	=> 'ts_photography_typography',
		'setting'	=> 'ts_photography_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'ts_photography_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_photography_atag_color', array(
		'label' => __('"a" Tag Color', 'ts-photography'),
		'section' => 'ts_photography_typography',
		'settings' => 'ts_photography_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('ts_photography_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_photography_sanitize_choices'
	));
	$wp_customize->add_control('ts_photography_atag_font_family', array(
	    'section'  => 'ts_photography_typography',
	    'label'    => __( '"a" Tag Fonts','ts-photography'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'ts_photography_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_photography_li_color', array(
		'label' => __('"li" Tag Color', 'ts-photography'),
		'section' => 'ts_photography_typography',
		'settings' => 'ts_photography_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('ts_photography_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_photography_sanitize_choices'
	));
	$wp_customize->add_control(
	    'ts_photography_li_font_family', array(
	    'section'  => 'ts_photography_typography',
	    'label'    => __( '"li" Tag Fonts','ts-photography'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'ts_photography_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_photography_h1_color', array(
		'label' => __('H1 Color', 'ts-photography'),
		'section' => 'ts_photography_typography',
		'settings' => 'ts_photography_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('ts_photography_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_photography_sanitize_choices'
	));
	$wp_customize->add_control('ts_photography_h1_font_family', array(
	    'section'  => 'ts_photography_typography',
	    'label'    => __( 'H1 Fonts','ts-photography'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('ts_photography_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_photography_h1_font_size',array(
		'label'	=> __('H1 Font Size','ts-photography'),
		'section'	=> 'ts_photography_typography',
		'setting'	=> 'ts_photography_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'ts_photography_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_photography_h2_color', array(
		'label' => __('h2 Color', 'ts-photography'),
		'section' => 'ts_photography_typography',
		'settings' => 'ts_photography_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('ts_photography_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_photography_sanitize_choices'
	));
	$wp_customize->add_control('ts_photography_h2_font_family', array(
	    'section'  => 'ts_photography_typography',
	    'label'    => __( 'h2 Fonts','ts-photography'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('ts_photography_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('ts_photography_h2_font_size',array(
		'label'	=> __('h2 Font Size','ts-photography'),
		'section'	=> 'ts_photography_typography',
		'setting'	=> 'ts_photography_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'ts_photography_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_photography_h3_color', array(
		'label' => __('h3 Color', 'ts-photography'),
		'section' => 'ts_photography_typography',
		'settings' => 'ts_photography_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('ts_photography_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_photography_sanitize_choices'
	));
	$wp_customize->add_control('ts_photography_h3_font_family', array(
	    'section'  => 'ts_photography_typography',
	    'label'    => __( 'h3 Fonts','ts-photography'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('ts_photography_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('ts_photography_h3_font_size',array(
		'label'	=> __('h3 Font Size','ts-photography'),
		'section'	=> 'ts_photography_typography',
		'setting'	=> 'ts_photography_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'ts_photography_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_photography_h4_color', array(
		'label' => __('h4 Color', 'ts-photography'),
		'section' => 'ts_photography_typography',
		'settings' => 'ts_photography_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('ts_photography_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_photography_sanitize_choices'
	));
	$wp_customize->add_control('ts_photography_h4_font_family', array(
	    'section'  => 'ts_photography_typography',
	    'label'    => __( 'h4 Fonts','ts-photography'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('ts_photography_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('ts_photography_h4_font_size',array(
		'label'	=> __('h4 Font Size','ts-photography'),
		'section'	=> 'ts_photography_typography',
		'setting'	=> 'ts_photography_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'ts_photography_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_photography_h5_color', array(
		'label' => __('h5 Color', 'ts-photography'),
		'section' => 'ts_photography_typography',
		'settings' => 'ts_photography_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('ts_photography_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_photography_sanitize_choices'
	));
	$wp_customize->add_control('ts_photography_h5_font_family', array(
	    'section'  => 'ts_photography_typography',
	    'label'    => __( 'h5 Fonts','ts-photography'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('ts_photography_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('ts_photography_h5_font_size',array(
		'label'	=> __('h5 Font Size','ts-photography'),
		'section'	=> 'ts_photography_typography',
		'setting'	=> 'ts_photography_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'ts_photography_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_photography_h6_color', array(
		'label' => __('h6 Color', 'ts-photography'),
		'section' => 'ts_photography_typography',
		'settings' => 'ts_photography_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('ts_photography_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_photography_sanitize_choices'
	));
	$wp_customize->add_control('ts_photography_h6_font_family', array(
	    'section'  => 'ts_photography_typography',
	    'label'    => __( 'h6 Fonts','ts-photography'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('ts_photography_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('ts_photography_h6_font_size',array(
		'label'	=> __('h6 Font Size','ts-photography'),
		'section'	=> 'ts_photography_typography',
		'setting'	=> 'ts_photography_h6_font_size',
		'type'	=> 'text'
	));

	//Social Icons(topbar)
	$wp_customize->add_section('ts_photography_topbar_header',array(
		'title'	=> __('Social Icon Section','ts-photography'),
		'description'	=> __('Add Header Content here','ts-photography'),
		'priority'	=> null,
		'panel' => 'ts_photography_panel_id',
	) );

	$wp_customize->add_setting('ts_photography_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('ts_photography_youtube_url',array(
		'label'	=> __('Add Youtube link','ts-photography'),
		'section'	=> 'ts_photography_topbar_header',
		'setting'	=> 'ts_photography_youtube_url',
		'type'		=> 'url'
	) );

	$wp_customize->add_setting('ts_photography_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('ts_photography_facebook_url',array(
		'label'	=> __('Add Facebook link','ts-photography'),
		'section'	=> 'ts_photography_topbar_header',
		'setting'	=> 'ts_photography_facebook_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('ts_photography_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('ts_photography_twitter_url',array(
		'label'	=> __('Add Twitter link','ts-photography'),
		'section'	=> 'ts_photography_topbar_header',
		'setting'	=> 'ts_photography_twitter_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('ts_photography_rss_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('ts_photography_rss_url',array(
		'label'	=> __('Add RSS link','ts-photography'),
		'section'	=> 'ts_photography_topbar_header',
		'setting'	=> 'ts_photography_rss_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('ts_photography_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('ts_photography_insta_url',array(
		'label'	=> __('Add Instagram link','ts-photography'),
		'section'	=> 'ts_photography_topbar_header',
		'setting'	=> 'ts_photography_insta_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('ts_photography_pint_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('ts_photography_pint_url',array(
		'label'	=> __('Add Pintrest link','ts-photography'),
		'section'	=> 'ts_photography_topbar_header',
		'setting'	=> 'ts_photography_pint_url',
		'type'	=> 'url'
	) );

	//home page slider
	$wp_customize->add_section( 'ts_photography_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'ts-photography' ),
		'priority'   => 30,
		'panel' => 'ts_photography_panel_id'
	) );
	
	$wp_customize->add_setting('ts_photography_slider_hide_show',array(
      'default' => 'false',
      'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_photography_slider_hide_show',array(
	  'type' => 'checkbox',
	  'label' => __('Show / Hide slider','ts-photography'),
	  'section' => 'ts_photography_slidersettings',
	));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'ts_photography_slidersettings-page-' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'ts_photography_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'ts_photography_slidersettings-page-' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'ts-photography' ),
			'section'  => 'ts_photography_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	//content layout
    $wp_customize->add_setting('ts_photography_slider_content_alignment',array(
    'default' => __('Left','ts-photography'),
        'sanitize_callback' => 'ts_photography_sanitize_choices'
	));
	$wp_customize->add_control('ts_photography_slider_content_alignment',array(
        'type' => 'radio',
        'label' => __('Slider Content Alignment','ts-photography'),
        'section' => 'ts_photography_slidersettings',
        'choices' => array(
            'Center' => __('Center','ts-photography'),
            'Left' => __('Left','ts-photography'),
            'Right' => __('Right','ts-photography'),
        ),
	) );

    //Slider excerpt
	$wp_customize->add_setting( 'ts_photography_slider_excerpt_length', array(
		'default'              => 10,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'ts_photography_slider_excerpt_length', array(
		'label'       => esc_html__( 'Slider Excerpt length','ts-photography' ),
		'section'     => 'ts_photography_slidersettings',
		'type'        => 'number',
		'settings'    => 'ts_photography_slider_excerpt_length',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('ts_photography_slider_image_opacity',array(
      'default'              => 0.7,
      'sanitize_callback' => 'ts_photography_sanitize_choices'
	));
	$wp_customize->add_control( 'ts_photography_slider_image_opacity', array(
	'label'       => esc_html__( 'Slider Image Opacity','ts-photography' ),
	'section'     => 'ts_photography_slidersettings',
	'type'        => 'select',
	'settings'    => 'ts_photography_slider_image_opacity',
	'choices' => array(
		'0' =>  esc_attr('0','ts-photography'),
		'0.1' =>  esc_attr('0.1','ts-photography'),
		'0.2' =>  esc_attr('0.2','ts-photography'),
		'0.3' =>  esc_attr('0.3','ts-photography'),
		'0.4' =>  esc_attr('0.4','ts-photography'),
		'0.5' =>  esc_attr('0.5','ts-photography'),
		'0.6' =>  esc_attr('0.6','ts-photography'),
		'0.7' =>  esc_attr('0.7','ts-photography'),
		'0.8' =>  esc_attr('0.8','ts-photography'),
		'0.9' =>  esc_attr('0.9','ts-photography')
	),
	));

	//Photography section
  	$wp_customize->add_section('ts_photography_photo_section',array(
	    'title' => __('Photography Section','ts-photography'),
	    'description' => '',
	    'priority'  => null,
	    'panel' => 'ts_photography_panel_id',
	));  
 
	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('ts_photography_category',array(
	    'default' => 'select',
	    'sanitize_callback' => 'ts_photography_sanitize_choices',
  	));
  	$wp_customize->add_control('ts_photography_category',array(
	    'type'    => 'select',
	    'choices' => $cat_post,
	    'label' => __('Select Category to display Latest Post','ts-photography'),
	    'section' => 'ts_photography_photo_section',
	));

	//Blog Post
	$wp_customize->add_section('ts_photography_blog_post',array(
		'title'	=> __('Blog Page Settings','ts-photography'),
		'panel' => 'ts_photography_panel_id',
	));	

	$wp_customize->add_setting('ts_photography_date_hide',array(
       'default' => 'false',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('ts_photography_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','ts-photography'),
       'section' => 'ts_photography_blog_post'
    ));

    $wp_customize->add_setting('ts_photography_comment_hide',array(
       'default' => 'false',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('ts_photography_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Comments','ts-photography'),
       'section' => 'ts_photography_blog_post'
    ));

    $wp_customize->add_setting('ts_photography_author_hide',array(
       'default' => 'false',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('ts_photography_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Author','ts-photography'),
       'section' => 'ts_photography_blog_post'
    ));

    $wp_customize->add_setting('ts_photography_tags_hide',array(
       'default' => 'false',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('ts_photography_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','ts-photography'),
       'section' => 'ts_photography_blog_post'
    ));

    $wp_customize->add_setting( 'ts_photography_excerpt_number', array(
		'default'              => 20,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'ts_photography_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','ts-photography' ),
		'section'     => 'ts_photography_blog_post',
		'type'        => 'textfield',
		'settings'    => 'ts_photography_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('ts_photography_button_text',array(
		'default'=> 'READ MORE',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_photography_button_text',array(
		'label'	=> __('Add Button Text','ts-photography'),
		'section'=> 'ts_photography_blog_post',
		'type'=> 'text'
	));

	//footer
	$wp_customize->add_section('ts_photography_footer_section',array(
		'title'	=> __('Footer Text','ts-photography'),
		'priority'	=> null,
		'panel' => 'ts_photography_panel_id',
	));

	$wp_customize->add_setting('ts_photography_footer_widget_areas',array(
        'default'           => '4',
        'sanitize_callback' => 'ts_photography_sanitize_choices',
    ));
    $wp_customize->add_control('ts_photography_footer_widget_areas',array(
        'type'        => 'select',
        'label'       => __('Footer widget area', 'ts-photography'),
        'section'     => 'ts_photography_footer_section',
        'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'ts-photography'),
        'choices' => array(
            '1'     => __('One', 'ts-photography'),
            '2'     => __('Two', 'ts-photography'),
            '3'     => __('Three', 'ts-photography'),
            '4'     => __('Four', 'ts-photography')
        ),
    ));
	
	$wp_customize->add_setting('ts_photography_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));	
	$wp_customize->add_control('ts_photography_footer_copy',array(
		'label'	=> __('Copyright Text','ts-photography'),
		'section'	=> 'ts_photography_footer_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('ts_photography_enable_disable_scroll',array(
        'default' => 'true',
        'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_photography_enable_disable_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll Top Button','ts-photography'),
      	'section' => 'ts_photography_footer_section',
	));

	$wp_customize->add_setting('ts_photography_scroll_setting',array(
        'default' => __('Right','ts-photography'),
        'sanitize_callback' => 'ts_photography_sanitize_choices'
	));
	$wp_customize->add_control('ts_photography_scroll_setting',array(
        'type' => 'select',
        'label' => __('Scroll Back to Top Position','ts-photography'),
        'section' => 'ts_photography_footer_section',
        'choices' => array(
            'Left' => __('Left','ts-photography'),
            'Right' => __('Right','ts-photography'),
            'Center' => __('Center','ts-photography'),
        ),
	) );
	
}
add_action( 'customize_register', 'ts_photography_customize_register' );	

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class TS_Photography_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'TS_Photography_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new TS_Photography_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority'	=> 9,
					'title'    => esc_html__( 'Photography Pro', 'ts-photography' ),
					'pro_text' => esc_html__( 'Go Pro','ts-photography' ),
					'pro_url'  => esc_url('https://www.themeshopy.com/themes/premium-photography-wordPress-theme/')
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'ts-photography-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'ts-photography-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
TS_Photography_Customize::get_instance();