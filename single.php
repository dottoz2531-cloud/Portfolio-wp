<?php get_template_part('template-parts/header2'); ?>

        <div class="c-text no-tick js-tick">
          <div class="c-text__item js-tick-item">
            <span class="mgr-20">Thank you for click！</span
            >ここまで見に来てくれて、ありがとうございます！！
          </div>
          <div class="c-text__item js-tick-item">
            <span class="mgr-20">Thank you for click！</span
            >ここまで見に来てくれて、ありがとうございます！！
          </div>
          <div class="c-text__item js-tick-item">
            <span class="mgr-20">Thank you for click！</span
            >ここまで見に来てくれて、ありがとうございます！！
          </div>
        </div>
      </header>

      <main>
        <section id="about" class="about">
          <div class="about__inner inner">
            <h2 class="heading about__head heading--type2">ABOUT</h2>
            <div class="about__area">
              <div class="about__box">
                <div class="about__img rotation rotation-y">
                  <img src="<?php the_field('image','189');?>" alt="" />
                </div>
                <div class="about__content">
                  <div class="about__detail">
                    <div class="about__name">
                      <p class="about__name-jp js-in-view fade-in-up">
                      <?php the_field('name-jp','189');?>
                      </p>
                      <p class="about__name-en js-in-view fade-in-up">
                      <?php the_field('name-en','189');?>
                      </p>
                    </div>
                    <p class="about__text">
                    <?php echo nl2br(get_field('text','189'));?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="career">
          <div class="inner career__inner">
            <h2 class="heading career__head">CAREER</h2>
            <div class="career__boxes">
              <div class="career__box career-box fadeIn500ms-up">
                <p class="career-box__day">2014.4</p>
                <p class="career-box__text">文化服装学院　入学</p>
              </div>
              <div class="career__box career-box fadeIn1s-up">
                <p class="career-box__day">2018.4</p>
                <p class="career-box__text">
                  <span class="mr20"> 株式会社バロックジャパンリミテッド</span
                  ><br class="hidden-md" />パタンナーとして入社
                </p>
              </div>
              <div class="career__box career-box fadeIn1500ms-up">
                <p class="career-box__day">2022.5</p>
                <p class="career-box__text">
                  <span class="mr20">株式会社グリップインターナショナル</span
                  ><br class="hidden-md" />生産管理として入社
                </p>
              </div>
              <div class="career__box career-box fadeIn2s-up">
                <p class="career-box__day">2023.2</p>
                <p class="career-box__text">
                  株式会社テクノ・ポッセ　SESとして入社 <br class="hidden-md" />現在は金融系の開発保守
                </p>
              </div>
              <div class="career__box career-box fadeIn2500ms-up">
                <p class="career-box__day">2023.6</p>
                <p class="career-box__text">デイトラ　WEB制作コース受講</p>
              </div>
            </div>
          </div>
        </section>

        <section class="strengths">
          <div class="inner strengths__inner">
            <h2 class="heading heading--type2 strengths__head">STRENGTHS</h2>
            <div class="strengths__cards">
              <div class="strengths__card strengths-card">
                <div class="strengths-card__title card-title js-in-view fade-in-up">
                  <p class="card-title__number">01</p>
                  <div class="card-title__text">
                    <img src="<?php the_field('image','118');?>" alt="" />
                  </div>
                </div>
                <p class="strengths-card__text">
                <?php echo nl2br(get_field('text','118'));?>
                </p>
              </div>
              <div class="strengths__card strengths-card">
                <div class="strengths-card__title card-title js-in-view fade-in-up">
                  <p class="card-title__number">02</p>
                  <div class="card-title__text">
                    <img src="<?php the_field('image','121');?>" alt="" />
                  </div>
                </div>
                <p class="strengths-card__text">
                <?php echo nl2br(get_field('text','121'));?>
                </p>
              </div>
              <div class="strengths__card strengths-card">
                <div class="strengths-card__title card-title js-in-view fade-in-up">
                  <p class="card-title__number">03</p>
                  <div class="card-title__text">
                    <img src="<?php the_field('image','115');?>" alt="" />
                  </div>
                </div>
                <p class="strengths-card__text">
                <?php echo nl2br(get_field('text','115'));?>
              </div>
            </div>
          </div>
        </section>

        <section class="likes">
          <div class="inner__likes inner">
            <h2 class="heading heading--type2 likes__head">LIKES</h2>
            <div class="likes__cards">
              <div class="likes__card likes-card fadeIn500ms">
                <div class="likes-card__img">
                  <img src="<?php the_field('image','18');?>" alt="" />
                </div>
                <p class="likes-card__title"><?php the_field('title','18');?></p>
              </div>
              <div class="likes__card likes-card fadeIn1s">
                <div class="likes-card__img likes-card__img--type2">
                  <img src="<?php the_field('image','21');?>" alt="" />
                </div>
                <p class="likes-card__title"><?php the_field('title','18');?></p>
              </div>
              <div class="likes__card likes-card fadeIn1500ms">
                <div class="likes-card__img likes-card__img--type3">
                  <img src="<?php the_field('image','25');?>" alt="" />
                </div>
                <p class="likes-card__title"><?php the_field('title','25');?></p>
              </div>
              <div class="likes__card likes-card fadeIn2s">
                <div class="likes-card__img likes-card__img--type4">
                  <img src="<?php the_field('image','28');?>" alt="" />
                </div>
                <p class="likes-card__title"><?php the_field('title','28');?></p>
              </div>
            </div>
          </div>
        </section>
      </main>

      <?php get_footer(); ?>
