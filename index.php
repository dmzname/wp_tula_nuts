<?php
/**
* *Template Name: Страница статей
*
*@package dmz_tula_nuts
*
*/
get_header();

	$dmz_link_assets = DMZ_URL_ASSETS; ?>ы

<main class="main" id="main">
  <?php get_template_part( 'snippets/menu' ); ?> 

	<section class="single-hero single-hero_posts-list">
      <div class="single-hero__container container">
        <h1 class="single-hero__title animate-title">Статьи</h1>
        <p class="single-hero__subtitle">Наиболее популярные работы за все время</p>
      </div>
    </section>

    <section class="posts-content beige">
      <div class="container">
        <ul class="posts-list">
				<?php
						$dmz_posts = new WP_Query( [

						'post_type'			=> 'post',
						'posts_per_page'	=> 15,

						] );

						if( $dmz_posts->have_posts() ) : while ( $dmz_posts->have_posts() ) : $dmz_posts-> the_post();

							$featured_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );  
							$pdf_file_uri = get_field('dmz_pdf_post'); ?>

							<li class="posts-list__item">
								<a class="d-flex" <?php echo ($pdf_file_uri) ? 'href="' . esc_url( $pdf_file_uri ) . '" target="_blank"' : 'href="' . esc_url( get_permalink() ) . '"'?>>
								<?php if($featured_img_url): ?>
									<div class="posts-list__image">
										<span>
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
												<path d="M574.1 280.4l-45.38-181.8c-5.875-23.63-21.62-44-43-55.75c-21.5-11.75-46.1-14.13-70.25-6.375l-15.25 5.125c-8.375 2.75-12.87 11.88-10 20.25l5 15.13c2.75 8.375 11.88 12.88 20.25 10.13l13.12-4.375c10.88-3.625 23-3.625 33.25 1.75c10.25 5.375 17.5 14.5 20.38 25.75l38.38 153.9c-22.12-6.875-49.75-12.5-81.13-12.5c-34.88 0-73.1 7-114.9 26.75H251.4C210.5 258.6 171.4 251.6 136.5 251.6c-31.38 0-59 5.625-81.12 12.5l38.38-153.9c2.875-11.25 10.12-20.38 20.5-25.75C124.4 79.12 136.5 79.12 147.4 82.74l13.12 4.375c8.375 2.75 17.5-1.75 20.25-10.13l5-15.13C188.6 53.49 184.1 44.37 175.6 41.62l-15.25-5.125c-23.13-7.75-48.75-5.375-70.13 6.375c-21.37 11.75-37.12 32.13-43 55.75L1.875 280.4C.6251 285.4 .0001 290.6 .0001 295.9v70.25C.0001 428.1 51.63 480 115.3 480h37.13c60.25 0 110.4-46 114.9-105.4l2.875-38.63h35.75l2.875 38.63C313.3 433.1 363.4 480 423.6 480h37.13c63.62 0 115.2-51 115.2-113.9V295.9C576 290.6 575.4 285.5 574.1 280.4zM203.4 369.7c-2 26-24.38 46.25-51 46.25H115.2C87 415.1 64 393.6 64 366.1v-37.5c18.12-6.5 43.38-13 72.62-13c23.88 0 47.25 4.375 69.88 13L203.4 369.7zM512 366.1c0 27.5-23 49.88-51.25 49.88h-37.13c-26.62 0-49-20.25-51-46.25l-3.125-41.13c22.62-8.625 46.13-13 70-13c29 0 54.38 6.5 72.5 13V366.1z"></path>
											</svg>
										</span>
											<img src="<?php echo $featured_img_url; ?>" alt="Post Preview">
									</div>
								<?php endif; ?>
									<div class="posts-list__info">
										<h3 class="posts-list__title">
											<?php echo get_the_title(); ?>
										</h3>
										<p class="posts-list__subTitle">											
											<?php echo dmz_wp_kses(get_field('dmz_subtitle')); ?>
										</p>
										<p class="posts-list__description">
											<?php echo get_field('dmz_desc'); ?>
										</p>
									</div>
								</a>
							</li>
					<?php endwhile; endif; wp_reset_postdata(); ?>
        </ul>

        <div class="posts-signature">
          <p class="posts-signature__text">Благодарен всем посетителям моего сайта и&nbsp;читателям моих работ!
            <br>Очень радеюсь, что представленная здесь информация была вам полезна.
          </p>
          <p class="posts-signature__name">Евгений Васин</p>
        </div>
      </div>
    </section>

</main>

<?php
	get_footer();