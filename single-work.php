<?php get_template_part('template-parts/header2'); ?>

        <div class="c-text no-tick js-tick">
          <div class="c-text__item js-tick-item">
            <span class="mgr-20">Thank you for click！</span>Thank you for
            click！
            ここまで見に来てくれくれるなんて...！ありがとうございます！！
          </div>
          <div class="c-text__item js-tick-item">
            <span class="mgr-20">Thank you for click！</span>Thank you for
            click！
            ここまで見に来てくれくれるなんて...！ありがとうございます！！
          </div>
          <div class="c-text__item js-tick-item">
            <span class="mgr-20">Thank you for click！</span>Thank you for
            click！
            ここまで見に来てくれくれるなんて...！ありがとうございます！！
          </div>
        </div>
      </header>

      <main>
        <section class="site-detail">
          <div class="inner site-detail__inner">
            <div class="site-detail__img rotation rotation-x">
              <img src="<?php the_field('image');?>" alt="" />
            </div>
            <h2 class="heading site-detail__head heading--type2">
            <?php the_field('title');?>
            </h2>
            <div class="site-detail__box">
              <div class="site-detail__textes">
                <p class="site-detail__explanation">
                <?php echo nl2br(get_field('overview'));?>
                </p>
                <div class="siteview">
                  <a href="<?php the_field('url');?>" class="siteview__link">
                    <span class="siteview__link-item">VIEW THE SITE</span>
                  </a>
                </div>
              </div>
              <div class="site-detail__cards">
                <div class="site-detail__card fadeIn500ms">
                  <div class="site-detail__card__title site-title">
                    <p class="site-title__number">01</p>
                    <div class="site-title__text">
                      <img src="<?php echo get_template_directory_uri() ?>/img/works/works-title1.png" alt="" />
                      <img src="<?php echo get_template_directory_uri() ?>/img/works/works-title2.png" alt="" />
                    </div>
                  </div>
                  <div class="site-detail__explanation site-explanation">
                    <div class="site-explanation__tag">
                      <p class="site-explanation__title">制作期間:</p>
                      <p class="site-explanation__text"><?php the_field('piriod');?></p>
                    </div>
                    <div class="site-explanation__tag">
                      <p class="site-explanation__title">ページ数:</p>
                      <p class="site-explanation__text"><?php the_field('page');?></p>
                    </div>
                    <div class="site-explanation__tag">
                      <p class="site-explanation__title">使用ツール:</p>
                        <p class="site-explanation__text"><?php the_field('tool');?></p>
                    </div>
                  </div>
                </div>
                <div class="site-detail__card fadeIn1s">
                  <div class="site-detail__card__title site-title">
                    <p class="site-title__number">02</p>
                    <div class="site-title__text">
                      <img src="<?php echo get_template_directory_uri() ?>/img/works/works-title3.png" alt="" />
                      <img src="<?php echo get_template_directory_uri() ?>/img/works/works-title4.png" alt="" />
                    </div>
                  </div>
                  <p class="site-detail__items">
                  <?php the_field('program');?>
                  </p>
                </div>
                <div class="site-detail__card fadeIn1500ms">
                  <div class="site-detail__card__title site-title">
                    <p class="site-title__number">03</p>
                    <div class="site-title__text">
                      <img src="<?php echo get_template_directory_uri() ?>/img/works/works-title5.png" alt="" />
                      <img src="<?php echo get_template_directory_uri() ?>/img/works/works-title6.png" alt="" />
                    </div>
                  </div>
                  <p class="site-detail__text">
                  <?php echo nl2br(get_field('text'));?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="#other" class="other">
          <div class="other__inner">
            <h2 class="heading other__head heading--type2">OTHER</h2>
            <div class="other__slider">
              <!-- Slider main container -->
              <div class="swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="other-card">
                      <a href="<?php echo home_url('/work/portfolio-site');?>" class="other-card__img">
                        <img src="<?php the_field('image','59');?>" alt="" />
                      </a>
                      <div class="other-card__text"><?php the_field('title','59');?></div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="other-card">
                      <a href="<?php echo home_url('/work/shop-site/');?>" class="other-card__img">
                        <img src="<?php the_field('image','61');?>" alt="" />
                      </a>
                      <div class="other-card__text"><?php the_field('title','61');?></div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="other-card">
                      <a href="<?php echo home_url('/work/corporate-site/');?>" class="other-card__img">
                        <img src="<?php the_field('image','63');?>" alt="" />
                      </a>
                      <div class="other-card__text"><?php the_field('title','63');?></div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="other-card">
                      <a href="<?php echo home_url('/work/corporate-site2/');?>" class="other-card__img">
                        <img src="<?php the_field('image','70');?>" alt="" />
                      </a>
                      <div class="other-card__text"><?php the_field('title','70');?></div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="other-card">
                      <a href="<?php echo home_url('/work/portfolio-site');?>" class="other-card__img">
                        <img src="<?php the_field('image','59');?>" alt="" />
                      </a>
                      <div class="other-card__text"><?php the_field('title','59');?></div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="other-card">
                      <a href="<?php echo home_url('/work/shop-site/');?>" class="other-card__img">
                        <img src="<?php the_field('image','61');?>" alt="" />
                      </a>
                      <div class="other-card__text"><?php the_field('title','61');?></div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="other-card">
                      <a href="<?php echo home_url('/work/corporate-site/');?>" class="other-card__img">
                        <img src="<?php the_field('image','63');?>" alt="" />
                      </a>
                      <div class="other-card__text"><?php the_field('title','63');?></div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="other-card">
                      <a href="<?php echo home_url('/work/corporate-site2/');?>" class="other-card__img">
                        <img src="<?php the_field('image','70');?>" alt="" />
                      </a>
                      <div class="other-card__text"><?php the_field('title','70');?></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>

      <?php get_footer(); ?>