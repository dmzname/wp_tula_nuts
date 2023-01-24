<?php
/**
* * Шаблон для отображения страницы архива «Новинки»
*
*@package dmz_tula_nuts
*
*/
get_header();

	$dmz_link_assets = DMZ_URL_ASSETS; ?>

<main class="main" id="main">
  <?php get_template_part( 'snippets/menu' ); ?> 

	<section class="single-hero single-hero_new">
      <div class="single-hero__container container">
        <h1 class="single-hero__title animate-title">Новинки</h1>
        <p class="single-hero__subtitle">Недавно добавленные в наш каталог</p>
      </div>
    </section>

    <section class="content content-first beige">
      <div class="content__container container">
        <div class="content-new__wrapper">

					<?php
						$dmz_novelties_posts = new WP_Query( [

						'post_type'			=> 'novelties',
						'posts_per_page'	=> 3,
						'order' => 'ASC',

						] );

						if( $dmz_novelties_posts->have_posts() ) : while ( $dmz_novelties_posts->have_posts() ) : $dmz_novelties_posts-> the_post(); 
						
								$featured_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' ); 
								$img_one_url = get_field( "novelty_img_one" );
								$img_two_url = get_field( "novelty_img_two" ); ?>

								<div class="content-new">
									<div class="content-new__image">
										<?php if($featured_img_url): ?>
											<img src="<?php echo $featured_img_url; ?>" alt="img-1">
										<?php endif; ?>
									</div>
									<div class="content-new__info scroll-effects">
										<h2 class="content-new__title section-title">
											<span><?php echo get_the_title(); ?></span>
										</h2>
										<?php echo get_the_content(); ?>
									</div>
									<?php if($img_one_url || $img_two_url): ?>
										<div class="content-new__imgBlock">
											<?php if($img_one_url): ?>
												<img src="<?php echo $img_one_url; ?>" alt="img-2">												
											<?php endif; ?>
											<?php if($img_two_url): ?>
												<img src="<?php echo $img_two_url; ?>" alt="img-3">
											<?php endif; ?>
										</div>
									<?php endif; ?>
								</div>

					<?php endwhile; endif; wp_reset_postdata(); ?>

				</div>
        <div class="section-desc">
          <h3 class="section-desc__title">Нами ведется постоянная работа по&nbsp;расширению ассортимента. О&nbsp;результатах&nbsp;работы&nbsp;можно узнать на&nbsp;страницах моих социальных сетей.</h3>
          <p class="section-desc__txt">Богатый опыт и научные знания по разведению и селекции орехоплодных деревьев, других кустарников и цветов позволяют предоставлять Вам продукцию самого высокого качества. В нашем <a href="<?php echo PRICE_LIST_URL; ?>" target="_blank">каталоге</a> Вы найдете наиболее приспособленные сорта растений для посадки в средней полосе России и цены на них. На протяжении всего года <a href="/#contacts">Вы можете заказать саженцы</a> грецкого ореха, других орехоплодных и других культур.</p>
          <p class="section-desc__txt">Для повышения гарантии успеха, одновременно с покупкой, вы можете заказать услугу посадки саженцев.</p>
        </div>
      </div>
    </section>

</main>

<?php
	get_footer();