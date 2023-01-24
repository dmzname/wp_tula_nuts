<?php
/**
 * Блок header для нашей темы
 *
 * Это шаблон, который отображает весь раздел <head> и все что до <main class="main">
 *
 * @package dmz_tula_nuts
 */

 $dmz_link_assets = DMZ_URL_ASSETS;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">   
  <link rel="icon" href="<?php echo $dmz_link_assets . '/img/favicon.ico' ?>" type="images/ico">
   <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header" id="header">
    <div class="header__container container d-flex">
      <a class="header__logo" href="<?php echo get_home_url(); ?>">
        <img src="<?php echo $dmz_link_assets . '/img/logo-header.svg '?>" alt="Логотип">
      </a>
      <div class="header__location location d-flex">
        <div class="location__img">
          <svg width="40" height="40" fill="#706F6F" xmlns:xlink="http://www.w3.org/1999/xlink">
            <use xlink:href="<?php echo $dmz_link_assets . '/img/svg-sprites.svg#location' ?>"></use>
          </svg>
        </div>
        <div class="location__descr">
          <span>Тула, Россия</span>
          <span>место</span>
        </div>
      </div>
      <div class="header__mail mail d-flex">
        <div class="mail__img">
          <svg width="40" height="40" fill="#706F6F" xmlns:xlink="http://www.w3.org/1999/xlink">
            <use xlink:href="<?php echo $dmz_link_assets . '/img/svg-sprites.svg#mail' ?>"></use>
          </svg>
        </div>
        <div class="mail__descr">
          <a href="mailto:vasin.oreh65@yandex.ru" target="_blank">vasin.oreh65@yandex.ru</a>
          <span>электронная почта</span>
        </div>
      </div>
      <div class="header__phone phone d-flex">
        <div class="phone__img">
          <svg width="37" height="41" fill="#706F6F" xmlns:xlink="http://www.w3.org/1999/xlink">
            <use xlink:href="<?php echo $dmz_link_assets . '/img/svg-sprites.svg#phone' ?>"></use>
          </svg>
        </div>
        <div class="phone__descr">
          <a href="tel:+79606194781" target="_blank">+7-960-619-47-81</a>
          <span>телефон&nbsp;и&nbsp;мессенджеры</span>
        </div>
      </div>
      <div class="header__social social d-flex">
        <a href="https://vk.com/evasin65" target="_blank">
          <svg width="38" height="38" fill="#706F6F" xmlns:xlink="http://www.w3.org/1999/xlink">
            <use xlink:href="<?php echo $dmz_link_assets . '/img/svg-sprites.svg#vk' ?>"></use>
          </svg>
        </a>
        <a href="https://ok.ru/profile/541035295012?utm_campaign=mobile_share&utm_content=profile" target="_blank">
          <svg width="38" height="38" fill="#706F6F" xmlns:xlink="http://www.w3.org/1999/xlink">
            <use xlink:href="<?php echo $dmz_link_assets . '/img/svg-sprites.svg#ok' ?>"></use>
          </svg>
        </a>
        <a href="https://t.me/+79606194781" target="_blank">
          <svg width="38" height="38" fill="#706F6F" xmlns:xlink="http://www.w3.org/1999/xlink">
            <use xlink:href="<?php echo $dmz_link_assets . '/img/svg-sprites.svg#tg' ?>"></use>
          </svg>
        </a>
      </div>
      <div class="header__burger">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <?php if(!is_page_template( 'template-page-home.php' )): ?>

         <div class="header__btn-group btn-group d-flex">
            <a class="btn-group__btn" href="/#contacts">ЗАКАЗАТЬ</a>
            <a class="btn-group__btn" href="<?php echo PRICE_LIST_URL; ?>" target="_blank">ПРАЙСЛИСТ</a>
         </div>

      <?php endif; ?>

    </div>
  </header>