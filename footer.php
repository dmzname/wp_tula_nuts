<?php
/**
 * Шаблон для отображения футера
 *
 * Содержит закрывающие теги  div.wrapper, body, html
 *
 * @package dmz_tula_nuts
 */

 $dmz_link_assets = DMZ_URL_ASSETS;
?>

			<?php 
				wp_footer(); 
			?>

		
		<footer class="footer">
				<div class="footer__container container d-flex">
					<p class="footer__txt">Селекционный центр
						и&nbsp;питомник&nbsp;орехоплодных&nbsp;культур
						&laquo;Тульский Орех&raquo;</p>
					<a class="footer__logo" href="<?php echo get_home_url(); ?>">
						<img src="<?php echo $dmz_link_assets . '/img/logo-footer.svg' ?>" alt="Логотип">
					</a>
					<p class="footer__txt">© Дизайн сайта<a href="mailto:x.andvlad@gmail.com">Андрея Введенского</a>разработка 2022</p>
				</div>
			</footer>
			<a class="arrow-up" href="/#main" hidden>
				<svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect class="bg" width="60" height="60" rx="5" fill="#FFC801"></rect>
					<g class="arrow" fill="#886A4C">
						<path d="M31.49 16.1201C31.49 15.0155 30.5946 14.1201 29.49 14.1201C28.3854 14.1201 27.49 15.0155 27.49 16.1201V43.9701C27.49 45.0747 28.3854 45.9701 29.49 45.9701C30.5946 45.9701 31.49 45.0747 31.49 43.9701V16.1201Z"></path>
						<path d="M27.8983 14.6046L14.5574 28.357C13.7883 29.1498 13.8075 30.416 14.6003 31.1851C15.3932 31.9542 16.6594 31.9349 17.4285 31.1421L30.7693 17.3898C31.5384 16.597 31.5192 15.3308 30.7264 14.5617C29.9336 13.7926 28.6674 13.8118 27.8983 14.6046Z"></path>
						<path d="M30.7858 14.5665C29.993 13.7974 28.7268 13.8166 27.9577 14.6094C27.1886 15.4022 27.2078 16.6684 28.0006 17.4375L41.7529 30.7784C42.5458 31.5475 43.8119 31.5283 44.581 30.7354C45.3501 29.9426 45.3309 28.6764 44.5381 27.9073L30.7858 14.5665Z"></path>
					</g>
				</svg>
			</a>
	</body>
</html>

