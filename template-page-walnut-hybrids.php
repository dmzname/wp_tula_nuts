<?php
/**
* *Template Name: Гибриды ореха грецкого
*
*@package dmz_tula_nuts
*
*/
get_header();

	$dmz_link_assets = DMZ_URL_ASSETS; ?>

<style>   
		.mesg {
			position: fixed;
			inset: 0 0 0 0;
			display: flex;
			justify-content: center;
			align-items: center;
			text-transform: uppercase;
			color: darkred;
			font-size: 24px;
		}
	</style>

<main class="main" id="main">
  <?php get_template_part( 'snippets/menu' ); ?> 

	<P>Гибриды ореха грецкого</P>

   <div class="mesg">
		Страница в разработке.
	</div>

</main>

<?php
	get_footer();