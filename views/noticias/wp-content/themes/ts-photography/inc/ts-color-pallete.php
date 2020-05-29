<?php
	
	$ts_photography_theme_color_first = get_theme_mod('ts_photography_theme_color_first');

	$custom_css = '';

	if($ts_photography_theme_color_first != false){
		$custom_css .='input[type="submit"], .search-box i, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce input.button.alt, #footer .tagcloud a:hover, #sidebar input[type="submit"], .pagination a:hover, .pagination .current, .woocommerce button.button.alt, #sidebar .tagcloud a:hover,#menu-sidebar input[type="submit"]{';
			$custom_css .='background-color: '.esc_html($ts_photography_theme_color_first).';';
		$custom_css .='}';
	}
	if($ts_photography_theme_color_first != false){
		$custom_css .='.social-media i:hover, .serach_outer i, #slider .inner_carousel h1 a, #footer li a:hover{';
			$custom_css .='color: '.esc_html($ts_photography_theme_color_first).';';
		$custom_css .='}';
	}
	if($ts_photography_theme_color_first != false){
		$custom_css .='#sidebar form{';
			$custom_css .='border-color: '.esc_html($ts_photography_theme_color_first).';';
		$custom_css .='}';
	}
	if($ts_photography_theme_color_first != false){
		$custom_css .='.page-box hr, #sidebar h3{';
			$custom_css .='border-top-color: '.esc_html($ts_photography_theme_color_first).';';
		$custom_css .='}';
	}
	if($ts_photography_theme_color_first != false){
		$custom_css .='#sidebar h3{';
			$custom_css .='border-bottom-color: '.esc_html($ts_photography_theme_color_first).';';
		$custom_css .='}';
	}

	$ts_photography_theme_color_second = get_theme_mod('ts_photography_theme_color_second');

	if($ts_photography_theme_color_second != false){
		$custom_css .='.hvr-sweep-to-right:before, a.button, .pagination span,.pagination a {';
			$custom_css .='background-color: '.esc_html($ts_photography_theme_color_second).';';
		$custom_css .='}';
	}
	if($ts_photography_theme_color_second != false){
		$custom_css .='nav.woocommerce-MyAccount-navigation ul li, #comments input[type="submit"].submit, #footer input[type="submit"],.tags p a:hover,.meta-nav:hover{';
			$custom_css .='background-color: '.esc_html($ts_photography_theme_color_second).'!important;';
		$custom_css .='}';
	}
	if($ts_photography_theme_color_second != false){
		$custom_css .='input[type="submit"], #header .nav ul li a:active, .page-box h4 a,.woocommerce-message::before, .woocommerce #respond input#submit, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce input.button.alt, .know-btn a, #sidebar input[type="submit"], #footer h3, .primary-navigation a:hover , .woocommerce-MyAccount-content a,#menu-sidebar input[type="submit"],#sidebar ul li a:hover,.primary-navigation a:focus,.metabox a:hover{';
			$custom_css .='color: '.esc_html($ts_photography_theme_color_second).';';
		$custom_css .='}';
	}
	if($ts_photography_theme_color_second != false){
		$custom_css .='#header, #footer h3{';
			$custom_css .='border-bottom-color: '.esc_html($ts_photography_theme_color_second).';';
		$custom_css .='}';
	}
	if($ts_photography_theme_color_second != false){
		$custom_css .='.woocommerce-message, .primary-navigation ul ul{';
			$custom_css .='border-top-color: '.esc_html($ts_photography_theme_color_second).';';
		$custom_css .='}';
	}
	if($ts_photography_theme_color_second != false){
		$custom_css .='.primary-navigation ul ul{';
			$custom_css .='border-top-color: '.esc_html($ts_photography_theme_color_second).'!important;';
		$custom_css .='}';
	}
	if($ts_photography_theme_color_second != false){
		$custom_css .='.primary-navigation ul ul{';
			$custom_css .='border-color: '.esc_html($ts_photography_theme_color_second).';';
		$custom_css .='}';
	}
	if($ts_photography_theme_color_second != false){
		$custom_css .='.woocommerce-MyAccount-content a, td.product-name a, a.shipping-calculator-button, .woocommerce-info a, .woocommerce-privacy-policy-text a,.primary-navigation li a:hover, .primary-navigation li:hover a,.primary-navigation ul ul a,.tags i{';
			$custom_css .='color: '.esc_html($ts_photography_theme_color_second).'!important;';
		$custom_css .='}';
	}

	// media

	$custom_css .='@media screen and (max-width:1000px) {';
	if($ts_photography_theme_color_second != false || $ts_photography_theme_color_first != false){
	$custom_css .='#menu-sidebar, .primary-navigation ul ul a, .primary-navigation li a:hover, .primary-navigation li:hover a, #contact-info{
	background-image: linear-gradient(-90deg, '.esc_html($ts_photography_theme_color_second).' 0%, '.esc_html($ts_photography_theme_color_first).' 120%);
		} ';
	}
	$custom_css .='}';

	/*---------------------------Width Layout -------------------*/

	$theme_lay = get_theme_mod( 'ts_photography_theme_options','Default');
    if($theme_lay == 'Default'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
	}else if($theme_lay == 'Container'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
		$custom_css .='.serach_outer{';
			$custom_css .='width: 97.7%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto';
		$custom_css .='}';
		$custom_css .='
		@media screen and (max-width: 1024px) and (min-width: 1000px){
		.page-template-custom-front-page #header{';
		$custom_css .='width:97%;';
		$custom_css .='} }';
	}else if($theme_lay == 'Box Container'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
		$custom_css .='.serach_outer{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; right:0;';
		$custom_css .='}';
		$custom_css .='.page-template-custom-front-page #header{';
			$custom_css .='width:97%';
		$custom_css .='}';
		$custom_css .='
		@media screen and (max-width: 1024px) and (min-width: 1000px){
		.page-template-custom-front-page #header{';
		$custom_css .='width:97%;';
		$custom_css .='} }';
		$custom_css .='
		@media screen and (max-width: 1000px){
		.page-template-custom-front-page #header{';
		$custom_css .='width:100%;';
		$custom_css .='} }';
	}

	/*---------------------------Slider Content Layout -------------------*/

	$theme_lay = get_theme_mod( 'ts_photography_slider_content_alignment','Left');
    if($theme_lay == 'Left'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$custom_css .='text-align:left; left:20%; right:20%;';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$custom_css .='text-align:center; left:20%; right:20%;';
		$custom_css .='}';
	}else if($theme_lay == 'Right'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$custom_css .='text-align:right; left:20%; right:20%;';
		$custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$theme_lay = get_theme_mod( 'ts_photography_slider_image_opacity','0.7');
	if($theme_lay == '0'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
		}else if($theme_lay == '0.1'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
		}else if($theme_lay == '0.2'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
		}else if($theme_lay == '0.3'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
		}else if($theme_lay == '0.4'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
		}else if($theme_lay == '0.5'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
		}else if($theme_lay == '0.6'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
		}else if($theme_lay == '0.7'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
		}else if($theme_lay == '0.8'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
		}else if($theme_lay == '0.9'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
		}



