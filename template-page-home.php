<?php
/**
* *Template Name: Главная страница
*
*@package dmz_tula_nuts
*
*/
get_header();

	$dmz_link_assets = DMZ_URL_ASSETS; ?>

<main class="main home-page" id="main">

    <?php get_template_part( 'snippets/menu' ); ?>

    <section class="hero" id="hero">
      <div class="hero__container container">
        <div class="hero__offer offer">
          <div class="offer__logo">
            <img src="<?php echo $dmz_link_assets . '/img/home-page/logo-hero-1.png' ?>" alt="Логотип">
          </div>
          <h1 class="offer__title animate-title">Качественные саженцы</h1>
          <p class="offer__subtitle">орехоплодных и&nbsp;других&nbsp;культур</p>
          <p class="offer__descr">Заказы принимаются круглый год </p>
          <a class="offer__btn scroll btn" href="#contacts">Заказать</a>
          <a class="offer__play" data-fslightbox="video" href="<?php echo $dmz_link_assets . '/video/1tulatv.mp4' ?>">
            <svg width="58" height="58" viewBox="0 0 58 58" xmlns="http://www.w3.org/2000/svg">
              <circle cx="29" cy="29" r="28" fill="#32384B" stroke="white" stroke-width="2"></circle>
              <path d="M42 29L21 41.1244L21 16.8756L42 29Z" fill="white"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="hero__slider">
        <div class="hero__wrapper swiper-wrapper">
          <div class="hero__slide swiper-slide">
            <div class="hero__img" style="background-image: url(<?php echo $dmz_link_assets . '/img/home-page/slide-hero-1.jpg' ?>)"></div>
          </div>
          <div class="hero__slide swiper-slide">
            <div class="hero__img" style="background-image: url(<?php echo $dmz_link_assets . '/img/home-page/slide-hero-2.jpg' ?>)"></div>
          </div>
          <div class="hero__slide swiper-slide">
            <div class="hero__img" style="background-image: url(<?php echo $dmz_link_assets . '/img/home-page/slide-hero-3.jpg' ?>)"></div>
          </div>
        </div>
      </div>
    </section>

    <section class="about" id="about">
      <div class="about__container container">
        <div class="about__knowing knowing d-flex">
          <div class="knowing__images scroll-effects">
            <img src="<?php echo $dmz_link_assets . '/img/home-page/user-about-1.jpg' ?>" alt="Васин Евгений Анатольевич фото 1">
            <img src="<?php echo $dmz_link_assets . '/img/home-page/user-about-2.jpg' ?>" alt="Васин Евгений Анатольевич фото 2">
            <span>Опыт с&nbsp;1990 года</span>
          </div>
          <div class="knowing__info knowing__info_top scroll-effects">
            <h2 class="knowing__title section-title">
              <span>Давайте знакомиться!</span>
            </h2>
            <p class="knowing__name">Меня зовут Васин Евгений Анатольевич</p>
            <p class="knowing__descr">Я - ученый агроном, селекционер, кандидат сельскохозяйственных наук</p>
            <p class="knowing__txt">Я рад приветствовать всех посетителей моего сайта! Если Вы интересуетесь орехоплодными культурами, то, надеюсь, что представленная здесь информация будет вам полезна.</p>
          </div>
          <div class="knowing__info knowing__info_bottom scroll-effects">
            <h2 class="knowing__title section-title">
              <span>Немного обо мне</span>
            </h2>
            <p class="knowing__txt">Родился в 1965 году в г. Донском Тульской области. Орехоплодными культурами занимаюсь с 1990 года. В 1997 г. окончил Санкт-Петербургский Государственный Аграрный Университет.</p>
            <p class="knowing__txt">Тема дипломной работы - "Первичная оценка сеянцев ореха грецкого на зимостойкость и скороплодность в условиях Нечерноземья России". По окончании университета получил рекомендацию для поступления в аспирантуру.</p>
            <p class="knowing__txt">В 2004 г. защитил кандидатскую диссертацию по теме: "Отбор и оценка перспективных форм ореха грецкого для Средней полосы России".</p>
          </div>
          <div class="knowing__image">
            <img src="<?php echo $dmz_link_assets . '/img/home-page/user-about-3.jpg' ?>" alt="Васин Евгений Анатольевич фото 3">
          </div>
        </div>
        <div class="about__description description">
          <div class="description__title">Занимаюсь селекцией орехоплодных культур в Тульской области, работаю над вопросами их вегетативного размножения.<span class="description__close"></span>
          </div>
          <div class="description__txt">
            <p>С 1998 по 2007 г.г. работал в ФГУК "Государственный мемориальный и природный заповедник "Музей&nbsp;-&nbsp;усадьба Л.Н.Толстого "Ясная Поляна" в должности агронома сада, а затем старшего научного сотрудника садово-паркового отдела.</p>
            <p>По тематике опубликовано более 30 работ в научной, научно-популярной литературе, средствах массовой информации.</p>
            <p>За время работы с орехоплодными культурами собран обширный генофонд этих культур
              в Тульской области, включающий 6 видов и свыше 300 гибридов рода Juglans L., 4 вида и гибрида рода Carya Nutt, 3 вида рода Corylus L.
              Особый интерес представляет коллекция скороплодных форм ореха грецкого, которые выдерживают условия Подмосковья и плодоносят.
              Всего в тульской коллекции насчитывается свыше 500 растений разных сортообразцов, часть из которых выдерживает без повреждений морозы в -36...-38,5°С.
              Большинство из них плодоносят.</p>
            <p>Около 500 растений родов Juglans L. и Carya Nutt селекции Васина Е.А. произрастают на территории Мичуринского сада МСХА им.Тимирязева.
              Часть растений, выращенных мной, пополняет коллекции ботанических садов Москвы, Санкт-Петербурга, Вологды и ряда институтов России.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="progress scroll-effects">
      <div class="progress__container container">
        <h2 class="progress__title">На сегодняшний день</h2>
        <p class="progress__subtitle">можно отметить определенные достижения моей работы</p>
        <div class="progress__privelege d-flex">
          <div class="progress__card card">
            <div class="card__icon">
              <img src="<?php echo $dmz_link_assets . '/img/home-page/card-progress-1.png' ?>" alt="Опыт и практика">
            </div>
            <p class="card__number card__number_first">30</p>
            <p class="card__descr">Опыта и практики селекционных достижений</p>
          </div>
          <div class="progress__card card">
            <div class="card__icon">
              <img src="<?php echo $dmz_link_assets . '/img/home-page/card-progress-2.png' ?>" alt="Научные работы">
            </div>
            <p class="card__number card__number_second">30</p>
            <p class="card__descr">Работ в научной литературе и СМИ</p>
          </div>
          <div class="progress__card card">
            <div class="card__icon">
              <img src="<?php echo $dmz_link_assets . '/img/home-page/card-progress-3.png' ?>" alt="Гибриды родов">
            </div>
            <p class="card__number card__number_third">300</p>
            <p class="card__descr">Гибридов рода Juglans L, Carya Nutt и&nbsp;Corylus&nbsp;L</p>
          </div>
          <div class="progress__card card">
            <div class="card__icon">
              <img src="<?php echo $dmz_link_assets . '/img/home-page/card-progress-4.png' ?>" alt="Количество растений">
            </div>
            <p class="card__number card__number_four">500</p>
            <p class="card__descr">Растений
              <br>в крупных
              <br>ботанических садах
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="history">
      <div class="history__container container scroll-effects">
        <h2 class="history__title section-title">
          <span>Немного истории</span>
        </h2>
        <p class="history__subtitle section-subtitle">О роде Орех (Juglans)</p>
        <div class="history__products products">
          <div class="products__item">
            <h3 class="products__name">Орех грецкий</h3>
            <img src="<?php echo $dmz_link_assets . '/img/home-page/nut-1.jpg' ?>" alt="Орех грецкий">
            <a class="products__link" href="<?php echo get_home_url() . '/walnut' ?>">описание</a>
          </div>
          <div class="products__item">
            <p class="products__descr">Исторически род Juglans возник в меловом периоде на территориях Юго-Западного Китая и Северного Индокитая, откуда его виды быстро распространились по всему Северному полушарию.
              В Северную Америку миграция шла через Европу, Гренландию, Берингию. В период оледенения (третичный период) виды, произраставшие в Северной Евразии и северных районах Северной Америки, погибли.
              После отхода ледника началось вторичное заселение северных областей сохранившимися на юге растениями.
              В настоящее время ареал рода не имеет определенной территории, но доходит в северных широтах нашей страны до 60° с.ш.</p>
          </div>
          <div class="products__item">
            <h3 class="products__name">Гибриды ореха грецкого</h3>
            <img src="<?php echo $dmz_link_assets . '/img/home-page/nut-2.jpg' ?>" alt="Гибриды ореха грецкого">
            <a class="products__link" href="<?php echo get_home_url() . '/walnut-hybrids' ?>">описание</a>
          </div>
          <div class="products__item">
            <h3 class="products__name">Орех маньчжурский</h3>
            <img src="<?php echo $dmz_link_assets . '/img/home-page/nut-3.jpg' ?>" alt="Орех маньчжурский">
            <a class="products__link" href="<?php echo get_home_url() . '/walnut-manchurian' ?>">описание</a>
          </div>
          <div class="products__item">
            <h3 class="products__name">Орех черный</h3>
            <img src="<?php echo $dmz_link_assets . '/img/home-page/nut-4.jpg' ?>" alt="Орех черный">
            <a class="products__link" href="<?php echo get_home_url() . '/walnut-black' ?>">описание</a>
          </div>
          <div class="products__item">
            <h3 class="products__name">Орех Зибольда</h3>
            <img src="<?php echo $dmz_link_assets . '/img/home-page/nut-5.jpg' ?>" alt="Орех Зибольда">
            <a class="products__link" href="<?php echo get_home_url() . '/walnut-siebold' ?>">описание</a>
          </div>
          <div class="products__item">
            <h3 class="products__name">Орех сердцевидный</h3>
            <img src="<?php echo $dmz_link_assets . '/img/home-page/nut-6.jpg' ?>" alt="Орех сердцевидный">
            <a class="products__link" href="<?php echo get_home_url() . '/walnut-heart-shaped' ?>">описание</a>
          </div>
          <div class="products__item">
            <h3 class="products__name">Орех пекан</h3>
            <img src="<?php echo $dmz_link_assets . '/img/home-page/nut-7.jpg' ?>" alt="Орех пекан">
            <a class="products__link" href="<?php echo get_home_url() . '/pecan' ?>">описание</a>
          </div>
          <div class="products__item">
            <h3 class="products__name">Кария сердцевидная</h3>
            <img src="<?php echo $dmz_link_assets . '/img/home-page/nut-8.jpg' ?>" alt="Кария сердцевидная">
            <a class="products__link" href="<?php echo get_home_url() . '/kariya-heart-shaped' ?>">описание</a>
          </div>
        </div>
      </div>
    </section>

    <section class="range">
      <div class="range__container container scroll-effects">
        <h2 class="range__title section-title">
          <span>Мой ассортимент</span>
        </h2>
        <p class="range__subtitle section-subtitle">Вашему вниманию предлагаю</p>
        <div class="range__products d-flex">
          <div class="range__card card card_left">
            <div class="card__info">
              <h3 class="card__title">Саженцы орехоплодных культур</h3>
              <p class="card__descr">Орех грецкий и его гибриды (обыкновенные и скороплодные формы), орех черный, маньжурсеий, пекан и др.</p>
            </div>
            <div class="card__images card__images_left">
              <div class="card__wrapper swiper-wrapper">
                <div class="card__slide swiper-slide">
                  <img class="card__img" src="<?php echo $dmz_link_assets . '/img/home-page/nut-range-1.jpg' ?>" alt="Орех грецкий">
                </div>
                <div class="card__slide swiper-slide">
                  <img class="card__img" src="<?php echo $dmz_link_assets . '/img/home-page/nut-range-2.jpg' ?>" alt="зибольда">
                </div>
                <div class="card__slide swiper-slide">
                  <img class="card__img" src="<?php echo $dmz_link_assets . '/img/home-page/nut-range-3.jpeg' ?>" alt="пекан">
                </div>
                <div class="card__slide swiper-slide">
                  <img class="card__img" src="<?php echo $dmz_link_assets . '/img/home-page/nut-range-4.jpg' ?>" alt="Орех черный">
                </div>
              </div>              
              <a href="<?php echo PRICE_LIST_URL; ?>" target="_blank" class="card__price-link">подробнее</a>
            </div>
          </div>
          <div class="range__card card card_right">
            <div class="card__info">
              <h3 class="card__title">Саженцы прочих&nbsp;культур, декоративные&nbsp;растения</h3>
              <p class="card__descr">
                <a href="<?php echo get_home_url() . '/ginkgo-biloba' ?>"> Гинкго билоба, </a>
                <a href="<?php echo get_home_url() . '/dogwood' ?>"> кизил, </a>
                <a href="<?php echo get_home_url() . '/dogwood-forms' ?>"> тульские формы кизила, </a>дуб краснолистный, пирамидальный, виноград, шелковица, азимина (банановое дерево), клен зеленокорый и многое другое.
              </p>
            </div>
            <div class="card__images card__images_right">
              <div class="card__wrapper swiper-wrapper">
                <div class="card__slide swiper-slide">
                  <img class="card__img" src="<?php echo $dmz_link_assets . '/img/home-page/nut-range-5.jpg' ?>" alt="Агат">
                </div>
                <div class="card__slide swiper-slide">
                  <img class="card__img" src="<?php echo $dmz_link_assets . '/img/home-page/nut-range-6.jpg' ?>" alt="Викторс">
                </div>
                <div class="card__slide swiper-slide">
                  <img class="card__img" src="<?php echo $dmz_link_assets . '/img/home-page/nut-range-7.jpg' ?>" alt="Кизил">
                </div>
                <div class="card__slide swiper-slide">
                  <img class="card__img" src="<?php echo $dmz_link_assets . '/img/home-page/nut-range-8.jpg' ?>" alt="Лель">
                </div>
              </div>              
              <a href="<?php echo PRICE_LIST_URL; ?>" target="_blank" class="card__price-link">подробнее</a>
            </div>
          </div>
        </div>
        <p class="range__description">Ассортимент постоянно расширяется!</p>
        <a href="<?php echo PRICE_LIST_URL; ?>" target="_blank" class="range__btn scroll-effects btn">Смотреть прайслист</a>
      </div>
    </section>

    <section class="delivery" id="delivery">
      <div class="delivery__container container scroll-effects">
        <h2 class="delivery__title section-title">
          <span>Буду рад вашим заказам!</span>
        </h2>
        <p class="delivery__subtitle section-subtitle">Об оплате и доставке</p>
        <div class="delivery__info d-flex">
          <div class="delivery__card delivery__card_img card"></div>
          <div class="delivery__card delivery__card_yellow card">
            <p class="card__txt">Хочу обратить Ваше внимание на то, что заказ формируется после его подтверждения.</p>
            <p class="card__txt">100% оплата до выкопки саженцев. Возможна оплата частями.</p>
            <p class="card__txt">Оплата принимается наличными или безналичным переводом на банковскую карту.</p>
          </div>
          <div class="delivery__card delivery__card_white card">
            <p class="card__txt">Доставка заказов осуществляется по всей России по тарифам следующих организаций:</p>
            <div class="card__post d-flex">
              <img src="<?php echo $dmz_link_assets . '/img/home-page/logo-pochta.png' ?>" alt="Почта России">
              <img src="<?php echo $dmz_link_assets . '/img/home-page/logo-SDEK.png' ?>" alt="SDEK">
              <img src="<?php echo $dmz_link_assets . '/img/home-page/logo-ZHELDOREXP.png' ?>" alt="Ж.Д.Э">
              <img src="<?php echo $dmz_link_assets . '/img/home-page/logo-boxberry.png' ?>" alt="boxberry">
            </div>
            <p class="card__txt">Также заказ можно получить путем самовывоза по адресу:</p>
            <address>г. Тула ул. Набережная д.44(42)</address>
            <a class="card__link" href="https://yandex.ru/maps/-/CCUBU-ce3B" target="_blank">Смотреть на карте</a>
          </div>
        </div>
      </div>
      <div class="delivery__images d-flex">
        <img src="<?php echo $dmz_link_assets . '/img/home-page/delivery-1.jpg' ?>" alt="delivery-1">
        <img src="<?php echo $dmz_link_assets . '/img/home-page/delivery-2.jpg' ?>" alt="delivery-2">
        <img src="<?php echo $dmz_link_assets . '/img/home-page/delivery-3.jpg' ?>" alt="delivery-3">
        <img src="<?php echo $dmz_link_assets . '/img/home-page/delivery-4.jpg' ?>" alt="delivery-4">
        <img src="<?php echo $dmz_link_assets . '/img/home-page/delivery-5.jpg' ?>" alt="delivery-5">
      </div>
    </section>

    <section class="contacts" id="contacts">
      <div class="contacts__container container d-flex">
        <div class="contacts__info info">
          <h3 class="info__title">Заказы принимаются круглый год!</h3>
          <p class="info__time">
            <span>Нахожусь на связи</span> ежедневно с 9-00 до 21-00
          </p>
          <p class="info__phone">
            <span>Мой телефон и мессенджеры:</span>
            <a href="tel:+79606194781">+7-960-619-47-81</a>
          </p>
          <p class="info__mail">
            <span>Моя электронная почта:</span>
            <a href="mailto:vasin.oreh65@yandex.ru">vasin.oreh65@yandex.ru</a>
          </p>
          <div class="info__surv">
            <p class="info__surv-title">Дополнительно проводим:</p>
            <p class="info__surv-txt">
              <span>Консультации</span> по посадке, уходу, агротехнике;
            </p>
            <a class="info__surv-link" href="<?php echo WIFE_SITE_URL; ?>" target="_blank">Обследование деревьев</a>
          </div>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="70" title="Контактная форма 1" html_class="contacts__form form"]') ?>
      </div>
    </section>
    
  </main>

<?php
	get_footer();