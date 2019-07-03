<?php
  /**
   * Template Name: Главная
   */

  get_header(); ?>

  <nav class="scroll-nav">
    <ul>
      <li>
        <a href="#hero">01</a>
      </li>
      <li>
        <a href="#about">02</a>
      </li>
      <li>
        <a href="#services">03</a>
      </li>
      <li>
        <a href="#vacancy">04</a>
      </li>
      <li>
        <a href="#partners">05</a>
      </li>
      <li>
        <a href="#news">06</a>
      </li>
      <li>
        <a href="#contact">07</a>
      </li>
    </ul>
  </nav>

  <div id="fullpage">

    <?php
      if( have_rows('home_layout') ):
        while ( have_rows('home_layout') ) : the_row();

          if( get_row_layout() == 'hero' ): ?>

            <section class="section hero" id="hero">
              <div class="section-label"><span>01</span> Главная</div>
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-xl-7">
                    <div class="hero__content">
                      <?php the_sub_field('text'); ?>
                      <a href="#" class="btn personal_open">Оставить заявку на персонал</a>
                    </div>
                  </div>
                </div>

                <div class="hero-adv">
                  <div class="hero-adv__item">
                    <?php ith_the_icon('hero-adv-1', 'hero-adv__icon'); ?>
                    <h3 class="hero-adv__title">Возможность <br>реализации</h3>
                    <p>проекта в любом регионе рф</p>
                  </div>
                  <div class="hero-adv__item">
                    <?php ith_the_icon('hero-adv-2', 'hero-adv__icon'); ?>
                    <h3 class="hero-adv__title">Гарантированное <br>выполнение kpi</h3>
                    <p>по каждому проекту</p>
                  </div>
                  <div class="hero-adv__item">
                    <?php ith_the_icon('hero-adv-3', 'hero-adv__icon'); ?>
                    <h3 class="hero-adv__title">Удобная и прозрачная</h3>
                    <p>система расчета стоимости оказываемых услуг</p>
                  </div>
                </div>

              </div>

              <div class="parallax parallax-1 parallax--50" data-rellax-speed="-1"></div>
              <div class="parallax parallax-2 parallax--15" data-rellax-speed="2"></div>
              <div class="parallax parallax-3 parallax--30" data-rellax-speed="2"></div>
              <div class="parallax parallax-4"></div>
              <div class="parallax parallax-5 parallax--15" data-rellax-speed="1"></div>

            </section>

          <?php elseif( get_row_layout() == 'about' ): ?>

            <section class="section about" id="about">
              <div class="section-label"><span>02</span> О компании</div>
              <div class="container">
                <div class="row">
                  <?php if (get_sub_field('img')): ?>
                    <div class="col-lg-6 order-2 order-lg-0">
                      <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class'=>'about__img')); ?>
                    </div>
                  <?php endif; ?>
                  <div class="col-lg-6">
                    <div class="about__content">
                      <div class="section-title">
                        <?php the_sub_field('title'); ?>
                      </div>

                      <?php the_sub_field('text'); ?>
                    </div>
                  </div>
                </div>

                <?php if (have_rows('numbers')): ?>
                  <div class="about-numbers">
                    <?php while (have_rows('numbers')): the_row(); ?>
                      <div class="about-numbers__item">
                        <div class="about-numbers__inner">
                          <b class="about-numbers__number"><?php the_sub_field('number'); ?><?php echo get_sub_field('number_text') ? ' <span>'.get_sub_field('number_text').'</span>' : ''; ?></b>
                          <p><?php the_sub_field('descr'); ?></p>
                        </div>
                      </div>
                    <?php endwhile; ?>
                  </div>
                <?php endif; ?>

              </div>

              <div class="parallax parallax-6 parallax--50" data-rellax-speed="1"></div>
              <div class="parallax parallax-7 parallax--30" data-rellax-speed="-1"></div>
              <div class="parallax parallax-8 parallax--15" data-rellax-speed="2"></div>
              <div class="parallax parallax-9"></div>

            </section>

          <?php elseif( get_row_layout() == 'services' ): ?>

            <section class="section services" id="services">
              <div class="section-label"><span>03</span> Услуги</div>
              <div class="container">
                <div class="section-title text-center">
                  <?php the_sub_field('title'); ?>
                </div>

                  <?php if (have_rows('list')): ?>
                    <div class="row">
                      <?php $i = 0; while (have_rows('list')): the_row(); ?>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                          <div class="services-card">
                            <h3 class="services-card__title"><?php echo $title = get_sub_field('title'); ?></h3>
                            <?php echo apply_filters( 'the_content' , wp_trim_words(get_sub_field('descr'), 15) ); ?>
                            <a href="#" class="services-card__link services-card-modal-<?php echo $i; ?>_open">Подробнее...</a>

                            <div class="modal services-card-modal" id="services-card-modal-<?php echo $i; ?>">
                              <button type="button" class="modal__close services-card-modal-<?php echo $i++; ?>_close"></button>
                              <div class="services-card-modal__content">
                                <h3><?php echo $title; ?></h3>
                                <?php the_sub_field('descr'); ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php endwhile; ?>
                    </div>
                  <?php endif; ?>
              </div>

              <div class="parallax parallax-10 parallax--15" data-rellax-speed="2"></div>
              <div class="parallax parallax-11 parallax--80" data-rellax-speed="1"></div>
              <div class="parallax parallax-12 parallax--50"></div>
              <div class="parallax parallax-13 parallax--30" data-rellax-speed="-1"></div>

            </section>

          <?php elseif( get_row_layout() == 'vacancy' ): ?>

            <section class="section vacancy" id="vacancy">
              <div class="section-label"><span>04</span> Вакансии</div>
              <div class="container">
                <div class="section-head text-center">
                  <?php the_sub_field('title'); ?>
                  <?php the_sub_field('descr'); ?>
                </div>

                <div class="row vacancy__row">
                  <?php $vacancy = get_vacancy(-1);
                  if ($vacancy->have_posts()): ?>
                    <div class="col-lg-7 col-xl-6">
                      <div class="vacancy-list">
                        <?php while ($vacancy->have_posts()): $vacancy->the_post(); ?>
                          <div class="vacancy-list__item">
                            <h3 class="vacancy-list__title"><?php the_title(); ?></h3>
                            <span class="vacancy-list__dots"></span>
                            <p class="vacancy-list__salary">от <?php the_field('salary'); ?> р/час</p>
                            <a href="#" class="btn vacancy-list__btn order-vacancy_open">Откликнуться</a>
                          </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                      </div>
                    </div>
                  <?php endif; ?>

                  <div class="col-lg-5 col-xl-6">
                    <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class'=>'vacancy__img')); ?>
                  </div>

                </div>

                <h2 class="text-center vacancy__title"><span>ЗАЧИСЛЕНИЕ РАБОТНИКОВ В СВОЙ ШТАТ</span></h2>

                <div class="vacancy-adv">
                  <div class="vacancy-adv__item">
                    <div class="vacancy-adv__icon-wrap">
                      <?php ith_the_icon('vacancy-adv-1', 'vacancy-adv__icon'); ?>
                    </div>
                    <p>Ведение операций по кадровому делопроизводству и начислению заработной платы;</p>
                  </div>
                  <div class="vacancy-adv__item">
                    <div class="vacancy-adv__icon-wrap">
                      <?php ith_the_icon('vacancy-adv-2', 'vacancy-adv__icon'); ?>
                    </div>
                    <p>Формирование отчетности для внебюджетных фондов, бюджета</p>
                  </div>
                  <div class="vacancy-adv__item">
                    <div class="vacancy-adv__icon-wrap">
                      <?php ith_the_icon('vacancy-adv-3', 'vacancy-adv__icon'); ?>
                    </div>
                    <p>Расчет и перечисление всех налогов с заработной платы, установленных законодательством РФ</p>
                  </div>
                  <div class="vacancy-adv__item">
                    <div class="vacancy-adv__icon-wrap">
                      <?php ith_the_icon('vacancy-adv-4', 'vacancy-adv__icon'); ?>
                    </div>
                    <p>Обеспечение всех социальных гарантий работников</p>
                  </div>
                  <div class="vacancy-adv__item">
                    <div class="vacancy-adv__icon-wrap">
                      <?php ith_the_icon('vacancy-adv-5', 'vacancy-adv__icon'); ?>
                    </div>
                    <p>Предоставление необходимых справок для сотрудников</p>
                  </div>
                </div>
                
                <div class="text-center">
                  <a href="#" class="btn questionnaire_open">Заполнить анкету</a>
                </div>

              </div>

              <div class="parallax parallax-14 parallax--50" data-rellax-speed="1"></div>
              <div class="parallax parallax-15 parallax--30" data-rellax-speed="-1"></div>
              <div class="parallax parallax-16 parallax--15"></div>
              <div class="parallax parallax-17" data-rellax-speed="1"></div>

            </section>

          <?php elseif( get_row_layout() == 'partners' ): ?>

            <section class="section partners" id="partners">
              <div class="section-label"><span>05</span> Партнеры</div>
              <div class="container">
                <div class="partners__top">
                  <?php the_sub_field('title'); ?>
                  <div class="partners-slider-control">
                    <div class="swiper-pagination"></div>
                    <div class="partners-slider-control__btn">
                      <div class="swiper-button-prev">
                        <?php ith_the_icon('arrow-left'); ?>
                      </div>
                      <div class="swiper-button-next">
                        <?php ith_the_icon('arrow-right'); ?>
                      </div>
                    </div>
                  </div>
                </div>

                <?php if (have_rows('list')): ?>
                  <div class="partners-slider swiper-container">
                    <div class="swiper-wrapper">
                      <?php while (have_rows('list')): the_row();?>
                        <div class="partners-slider__item swiper-slide">
                          <?php echo wp_get_attachment_image(get_sub_field('logo'), 'medium'); ?>
                        </div>
                      <?php endwhile; ?>
                    </div>
                  </div>
                <?php endif; ?>

              </div>

              <div class="parallax parallax-18 parallax--15"></div>
              <div class="parallax parallax-19 parallax--80" data-rellax-speed="1"></div>
              <div class="parallax parallax-20 parallax--30" data-rellax-speed="-1"></div>
              <div class="parallax parallax-21 parallax--50" data-rellax-speed="1"></div>

            </section>

          <?php elseif( get_row_layout() == 'news' ): ?>

            <section class="section news" id="news">
              <div class="section-label"><span>06</span> Новости</div>
              <div class="container">
                <div class="section-title text-center">
                  <?php the_sub_field('title'); ?>
                </div>

                <?php $blog_posts = get_blog_posts(3);
                if ($blog_posts->have_posts()): ?>
                  <div class="row" id="response">
                    <?php while ($blog_posts->have_posts()): $blog_posts->the_post(); ?>
                      <?php get_template_part('parts/news', 'card'); ?>
                    <?php endwhile; wp_reset_postdata(); ?>

                    <?php if ( $blog_posts->max_num_pages > 1 ) : ?>
                      <script>
                        var true_posts = '<?php echo serialize($blog_posts->query_vars); ?>';
                        var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                        var max_pages = '<?php echo $blog_posts->max_num_pages; ?>';
                      </script>
                      <div class="col-12 text-center">
                        <a href="#" class="btn load-news">Больше новостей</a>
                      </div>
                    <?php endif; ?>

                  </div>
                <?php endif; ?>

              </div>

              <div class="parallax parallax-22 parallax--50"></div>
              <div class="parallax parallax-23 parallax--30" data-rellax-speed="1"></div>
              <div class="parallax parallax-24 parallax--15" data-rellax-speed="-1"></div>
              <div class="parallax parallax-25" data-rellax-speed="1"></div>

            </section>

          <?php elseif( get_row_layout() == 'contact' ): ?>

            <section class="section contact" id="contact">
              <div class="section-label"><span>07</span> Контакты</div>
              <div class="container">

                <div class="row">
                  <div class="col-lg-6">
                    <div class="section-title">
                      <?php the_sub_field('title'); ?>
                    </div>

                    <div class="contact__content">
                      <div class="contact__item">
                        <p class="contact__item-label">звоните:</p>
                        <?php if (get_sub_field('phone_1')): ?>
                          <a href="tel:<?php echo preg_replace( '![^0-9\+]+!', '', get_sub_field('phone_1') ); ?>"><?php the_sub_field('phone_1'); ?></a>
                          <span class="contact__item-descr"><?php the_sub_field('phone_descr_1'); ?></span><br>
                        <?php endif; ?>
                        <?php if (get_sub_field('phone_2')): ?>
                          <a href="tel:<?php echo preg_replace( '![^0-9\+]+!', '', get_sub_field('phone_2') ); ?>"><?php the_sub_field('phone_2'); ?></a>
                          <span class="contact__item-descr"><?php the_sub_field('phone_descr_2'); ?></span>
                        <?php endif; ?>
                      </div>

                      <div class="contact__item contact__item--email">
                        <p class="contact__item-label">пишите:</p>
                        <a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a>
                      </div>

                      <?php if (get_sub_field('address')): ?>
                        <div class="contact__item">
                          <p class="contact__item-label">Наш адрес:</p>
                          <p><?php the_sub_field('address'); ?></p>
                        </div>
                      <?php endif; ?>

                      <a href="#" class="btn callback_open">Обратный звонок</a>
                    </div>

                  </div>

                  <div class="col-lg-6">
                    <div class="contact__map" id="contact-map"></div>
                  </div>

                </div>

              </div>
              <script async src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&onload=init"></script>
              <script>
                <?php $location = get_sub_field('map'); ?>

                var myMap, myPlacemark,
                  coords = [<?php echo esc_js($location['coord_lng']); ?>, <?php echo esc_js($location['coord_lat']); ?>];

                function init() {
                  myMap = new ymaps.Map('contact-map', {
                    center: coords,
                    zoom: 17
                  });

                  myPlacemark = new ymaps.Placemark(coords, {
                    preset: 'islands#circleDotIcon',
                    iconColor: '#fe3334'
                  });

                  myMap.geoObjects.add(myPlacemark);
                }
              </script>

              <div class="parallax parallax-26 parallax--30"></div>
              <div class="parallax parallax-27 parallax--50" data-rellax-speed="1"></div>
              <div class="parallax parallax-28 parallax--15" data-rellax-speed="1"></div>
              <div class="parallax parallax-29 parallax--80" data-rellax-speed="-1"></div>
              <div class="parallax parallax-30 parallax--50" data-rellax-speed="1"></div>

            </section>

          <?php endif;

        endwhile;

      else :

        // no layouts found

      endif;

    ?>

  </div>

<?php get_footer();
