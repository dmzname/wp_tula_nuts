<?php

// *Инициализация TGM плагина
	function dmz_register_required_plugins( ) 
	{

		$plugins = [
			[
				'name'      => 'Cyrlitera – transliteration of links and file names',
				'slug'      => 'cyrlitera',
				'required'  => true,
			],
		];

		$theme_text_domain = 'dmz_tula_nuts';

		$config = [
			'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'tgmpa-install-plugins', // Menu slug.
			'parent_slug'  => 'themes.php',            // Parent menu slug.
			'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => true,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
		];

		tgmpa( $plugins, $config );
	}
	add_action( 'tgmpa_register', 'dmz_register_required_plugins' );