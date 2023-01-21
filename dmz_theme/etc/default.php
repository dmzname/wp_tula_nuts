<?php

/************************
* *Базовые установки
*************************/
	if ( ! function_exists( 'dmz_theme_setup' ) ) :

		function dmz_theme_setup() 
		{
		//Максимально допустимая ширина для любого контента в теме 
			if ( !isset( $content_width ) ) {
				$content_width = 600;
			}

		//Загружает файл перевода темы (.mo) в память, для дальнейшей работы с ним.
			load_theme_textdomain( 'dmz_tula_nuts', get_template_directory() . '/languages' );

		//Подключаем метатег <title>
			add_theme_support( 'title-tag' );

		//Включение поддержки миниатюр сообщений
			add_theme_support( 'post-thumbnails' );

		//Регистрируется сразу несколько расположений меню, к которым затем прикрепляются меню.
			register_nav_menus( [
				'main_menu'	=> esc_html__( 'Main Menu', 'dmz_tula_nuts' ),
			] );
		}

	endif;
	add_action( 'after_setup_theme', 'dmz_theme_setup' );