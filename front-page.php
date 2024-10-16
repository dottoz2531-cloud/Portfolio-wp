<?php get_header();?>

        <div class="c-text no-tick js-tick">
          <div class="c-text__item js-tick-item">
            <span class="mgr-20">Welcome to my portfolio</span
            >見ていただいてありがとうございます！！
          </div>
          <div class="c-text__item js-tick-item">
            <span class="mgr-20">Welcome to my portfolio</span
            >見ていただいてありがとうございます！！
          </div>
          <div class="c-text__item js-tick-item">
            <span class="mgr-20">Welcome to my portfolio</span
            >見ていただいてありがとうございます！！
          </div>
        </div>
      </header>

      <main class="main">
        <div class="fv">
          <div class="fv__inner inner">
            <div class="fv__title">
              <div id="container-1">
                <p class="fv__title-back">PORTFOLIO</p>
                <p class="fv__title-back">PORTFOLIO</p>
                <p class="fv__title-back">PORTFOLIO</p>
              </div>
              <p class="fv__title-front">
                AYUMI<br /><span class="mr60">OKMURA</span>
              </p>
            </div>
          </div>
        </div>

        <section id="profile" class="profile">
          <div class="profile__inner inner">
            <h2 class="heading profile__head">PROFILE</h2>
            <div class="profile__area">
              <div class="profile__content">
                <div class="profile__img">
                  <img
                    class="profile__img-main rotation rotation-y"
                    src="<?php echo get_template_directory_uri() ?>/img/profile/profile-1.png"
                    alt=""
                  />
                </div>
                <div class="profile__detail">
                  <div class="profile__name">
                    <div class="profile__name-jp js-in-view fade-in-up">
                      岡村 歩実
                    </div>
                    <p class="profile__name-en js-in-view fade-in-up">
                      Ayumi Okamura
                    </p>
                  </div>
                  <p class="profile__text">
                    1996年東京生まれ<br />
                    文化服装学園を卒業後、<br class="hidden-lg"/>アパレル企業で
                    パタンナー、生産管理を経験。 <br />IT業界に転職し、
                    手に職を付けたいと思い、<br class="hidden-lg"/>デイトラにてWeb制作を学ぶ。
                  </p>
                  <div class="profile__button">
                  <?php if(have_posts()): ?>
                      <?php while(have_posts()) :?>
                        <?php the_post(); ?>
                    <a href="<?php the_permalink(); ?>#about" class="button">
                    <?php endwhile;?>
                    <?php endif;?>
                      <span class="btn__text">View More...</span>
                      <span class="btn__text">Let's View!</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="skill" class="skill">
          <div class="skill__inner inner">
            <div class="skill__area">
              <h2 class="heading skill__head heading--type2">SKILL</h2>
              <div class="skill__boxes">
                <div class="skill__box">
                  <div class="skill__items">
                    <div class="skill__img">
                      <img
                        class="rotation rotation-y"
                        src="<?php the_field('image','141');?>"
                        alt=""
                      />
                    </div>
                    <div class="skill__detail">
                      <h2>
                        <span class="skill__title js-in-view fade-in-up"
                          ><?php the_field('title','141');?></span
                        >
                      </h2>
                      <p class="skill__text">
                      <?php the_field('text','141');?>
                      </p>
                    </div>
                  </div>
                  <div class="skill__tool skill-tool">
                    <div class="skill-tool__title js-in-view fade-in-up">
                      <img src="<?php echo get_template_directory_uri() ?>/img/skill/tool-title.png" alt="" />
                    </div>
                    <div class="tools">
                      <p class="tool">HTML</p>
                      <p class="tool">CSS</p>
                      <p class="tool">SCSS</p>
                      <p class="tool">JavaScript</p>
                      <p class="tool">jQuery</p>
                      <p class="tool">WordPress</p>
                      <p class="tool">Swiper</p>
                      <p class="tool">github</p>
                    </div>
                  </div>
                </div>
                <div class="skill__box skill__box--type2">
                  <div class="skill__items-2">
                    <div class="skill__img">
                      <img
                        class="rotation rotation-y"
                        src="<?php the_field('image','144');?>"
                        alt=""
                      />
                    </div>
                    <div class="skill__detail">
                      <h3 class="skill__title-wp js-in-view fade-in-up">
                        <img src="<?php the_field('title-image','144');?>" alt="" />
                      </h3>
                      <p class="skill__text">
                      <?php the_field('text','144');?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="works" class="works">
          <div class="works__inner inner">
            <h2 class="heading works__head">WORKS</h2>
            <div class="works__cards">
              <div class="works__card works-card fadeIn500ms">
                <a href="<?php echo home_url('/work/portfolio-site');?>" class="works-card__img">
                  <img src="<?php the_field('image','72');?>" class="card-img" alt="" />
                </a>
                <div class="works__texts-box">
                  <h3 class="works-card__title"> <?php the_field('title','72');?></h3>
                  <p class="works-card-text1">
                  <?php the_field('text','72');?>
                  </p>
                  <p class="works-card-text2">
                  <?php the_field('skill','72');?>
                  </p>
                </div>
              </div>
              <div class="works__card works-card fadeIn1s">
                <a href="<?php echo home_url('/work/shop-site/');?>" class="works-card__img">
                  <img src="<?php the_field('image','75');?>" class="card-img" alt="" />
                </a>
                <div class="works__texts-box">
                  <h3 class="works-card__title"><?php the_field('title','75');?></h3>
                  <p class="works-card-text1">
                  <?php the_field('text','75');?>
                  </p>
                  <p class="works-card-text2">
                  <?php the_field('skill','75');?>
                  </p>
                </div>
              </div>
              <div class="works__card works-card fadeIn1500ms">
                <a href="<?php echo home_url('/work/corporate-site/');?>" class="works-card__img">
                  <img src="<?php the_field('image','78');?>" class="card-img" alt="" />
                </a>
                <div class="works__texts-box">
                  <h3 class="works-card__title"><?php the_field('title','78');?></h3>
                  <p class="works-card-text1">
                  <?php the_field('text','78');?>
                  </p>
                  <p class="works-card-text2">
                  <?php the_field('skill','78');?>
                  </p>
                </div>
              </div>
            </div>
            <div class="works__button">
              <a href="http://portfolio.local/work/portfolio-site/ #other" class="button">
                <span class="btn__text">View More...</span>
                <span class="btn__text">Let's View!</span>
              </a>
            </div>
          </div>
        </section>
      </main>

      <section id="contact" class="contact">
        <div class="contact__inner inner">
          <div class="container flex horizontal">
            <div class="banner flex vertical grayscale shadow tobo">
              <p class="text">Could you possibly work with me...??</p>
              <a
                id=""
                href="mailto:dottoz2531@gmail.com"
                class="text nodecoration flex horizontal"
              >
                <p>Contact me</p>
                <i class="material-icons"></i>
              </a>
            </div>
          </div>
          <div class="contact__items">
            <ul class="contact__link-items">
              <li class="contact__link-item">
                <a href="" class="site__link">
                  <img class="is-github" src="<?php echo get_template_directory_uri() ?>/img/github.png" alt="" />
                </a>
              </li>
              <li class="contact__link-item">
                <a
                  href="https://github.com/dottoz2531-cloud?tab=repositories"
                  class="site__link"
                >
                  <img class="is-wantedly" src="<?php echo get_template_directory_uri() ?>/img/wantedly.png" alt="" />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <?php get_footer(); ?>