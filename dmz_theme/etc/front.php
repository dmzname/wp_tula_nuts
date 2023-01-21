<?php

/*******************************************************
 * *РЕГИСТРАЦИЯ И ПОДКЛЮЧЕНИЕ СКРИПТОВ И СТИЛЕЙ ДЛЯ ТЕМЫ
 *******************************************************/

 define( 'DMZ_MAIN_URL', get_template_directory_uri());

	//---CSS---//
	function dmz_enqueue_styles()
	{
		//Регистрируем стили	
		wp_register_style( 'swiper-styles', DMZ_MAIN_URL . '/libs/css/swiper-bundle.min.css', '7.3.1' );
		wp_register_style( 'dmz-main', DMZ_MAIN_URL . '/dist/css/main.min.css', DMZ_THEME_VERSION );
		wp_register_style( 'dmz-theme-style', get_stylesheet_uri() );

		if ( is_page_template( 'template-page-home.php' ) ):

			wp_enqueue_style( 'swiper-styles' );

		endif;

		wp_enqueue_style( 'dmz-main' );
		wp_enqueue_style( 'dmz-theme-style' );
	}
	add_action( 'wp_enqueue_scripts', 'dmz_enqueue_styles' );

	//---JS---//
	function dmz_enqueue_scripts() 
	{
		//Регистрируем скрипты			
		wp_register_script( 'swiper', DMZ_MAIN_URL . '/libs/js/swiper-bundle.min.js', [], '7.3.1', true );
		wp_register_script( 'anime', DMZ_MAIN_URL . '/libs/js/anime.min.js', [], false, true );
		wp_register_script( 'simplebar', DMZ_MAIN_URL . '/libs/js/simplebar.min.js', [], '5.3.6', true );
		wp_register_script( 'fslightbox', DMZ_MAIN_URL . '/libs/js/fslightbox.js', [], false, true );
		wp_register_script( 'dmz-main-scripts', DMZ_MAIN_URL . '/dist/js/main.min.js', [], DMZ_THEME_VERSION, true );

		//Подключаем скрипты	
		if ( is_page_template( 'template-page-home.php' ) ):

			wp_enqueue_script( 'swiper' );
			wp_enqueue_script( 'fslightbox' );

		endif;

		wp_enqueue_script( 'simplebar' );
		wp_enqueue_script( 'anime' );
		wp_enqueue_script( 'dmz-main-scripts' );

	}
	add_action( 'wp_enqueue_scripts', 'dmz_enqueue_scripts' );	


