<?php
/**
 * Шаблон для отображения всех отдельных сообщений
 *
 * @package dmz_tula_nuts
 */

   get_header();

	$dmz_link_assets = DMZ_URL_ASSETS;

	while ( have_posts() ) : the_post(); 
?>

		<main id="main" class="main">
			<?php get_template_part( 'snippets/menu' ); ?>

			<section class="single-post-hero beige single-post-hero_post_1">
				<div class="single-post-hero__container container">
					<div class="single-post-hero__title-wrapper" style="background: linear-gradient(0deg, rgba(0,0,0,0.5) 36%, rgba(46,46,46,0.3) 100%), url('<?php echo get_field('dmz_post_img'); ?>') no-repeat center center /cover;">
						<h1 class="single-post-hero__title animate-title">
							<?php echo get_the_title(); ?>
						</h1>
					</div>
					<p class="single-post-hero__subtitle">
						<?php echo get_field('dmz_subtitle'); ?>
					</p>
				</div>			
			</section>
			
			<section class="posts-content beige">
				<div class="container">
					<?php echo get_the_content(); ?>
					<div class="single-post-signature">
						<p class="single-post-signature__txt">Е.А.Васин,</p>
						<p class="single-post-signature__txt">кандидат с/х наук</p>
					</div>
				</div>
			</section>
		</main>

<?php
	endwhile;	
  get_footer();