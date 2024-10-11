<!DOCTYPE html>
<html lang="ja">
  <html lang="ja">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name="robots" content="noindex" />
      <title>profile</title>
      <meta name="description" content="岡村歩実のポートフォリオです。" />
      <link rel="icon" href="" />

      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800;900;1000&display=swap"
        rel="stylesheet"
      />
      <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
      />
      <link rel="stylesheet" href="./css/reset.css" />
      <link rel="stylesheet" href="./css/style.css" />
    </head>

    <body>
      <header class="header">
        <div class="header__inner inner">
          <h1 class="header__logo">
            <a href="/"><img src="./img/header-icon.png" alt="" /></a>
          </h1>
          <button
            id="js-drawer-button"
            type="button"
            class="header__icon drawer-icon"
          >
            <span class="drawer-icon__bar"></span>
            <span class="drawer-icon__bar"></span>
            <span class="drawer-icon__bar"></span>
          </button>

          <nav id="js-drawer-content" class="header__nav">
            <ul class="header__lists">
              <li class="header__list">
                <a href="#profile" class="header__link">
                  <span class="link__text">ABOUT</span>
                  <span class="link__text">詳しく</span>
                </a>
              </li>
              <li class="header__list">
                <a href="#skills" class="header__link">
                  <span class="link__text">SKILL</span>
                  <span class="link__text">スキル</span>
                </a>
              </li>
              <li class="header__list">
                <a href="#works" class="header__link">
                  <span class="link__text">WORK</span>
                  <span class="link__text">作品一覧</span>
                </a>
              </li>
              <li class="header__list">
                <a href="#contact" class="header__link">
                  <span class="link__text">CONTACT</span>
                  <span class="link__text">お問い合わせ</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
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
              <img src="./img/work/work-img1.png" alt="" />
            </div>
            <h2 class="heading site-detail__head heading--type2">
              Portfolio site
            </h2>
            <div class="site-detail__box">
              <div class="site-detail__textes">
                <p class="site-detail__explanation">
                  転職活動にあたり、自身の経歴や制作物をまとめたポートフォリオサイトです。青と白をベースカラーに、アクセントカラーのオレンジを取り入れ、
                  視覚的に内容が入りやすいものになるようにしサイトを目指しました。
                  また、必要最低限のページ構成でシンプルにまとめました。
                </p>
                <div class="siteview">
                  <a href="" class="siteview__link">
                    <span class="siteview__link-item">VIEW THE SITE</span>
                  </a>
                </div>
              </div>
              <div class="site-detail__cards">
                <div class="site-detail__card fadeIn500ms">
                  <div class="site-detail__card__title site-title">
                    <p class="site-title__number">01</p>
                    <div class="site-title__text">
                      <img src="./img/work/work-title1.png" alt="" />
                      <img src="./img/work/work-title2.png" alt="" />
                    </div>
                  </div>
                  <div class="site-detail__explanation site-explanation">
                    <div class="site-explanation__tag">
                      <p class="site-explanation__title">制作時期:</p>
                      <p class="site-explanation__text"></p>
                    </div>
                    <div class="site-explanation__tag">
                      <p class="site-explanation__title">制作時間:</p>
                      <p class="site-explanation__text">2024/9</p>
                    </div>
                    <div class="site-explanation__tag">
                      <p class="site-explanation__title">ページ数:</p>
                      <p class="site-explanation__text">3ページ</p>
                    </div>
                    <div class="site-explanation__tag">
                      <p class="site-explanation__title">使用ツール:</p>
                      <div class="explanation-texts">
                        <p class="site-explanation__text">Word Press</p>
                        <p class="site-explanation__text">github</p>
                        <p class="site-explanation__text">figma</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="site-detail__card fadeIn1s">
                  <div class="site-detail__card__title site-title">
                    <p class="site-title__number">02</p>
                    <div class="site-title__text">
                      <img src="./img/work/work-title3.png" alt="" />
                      <img src="./img/work/work-title4.png" alt="" />
                    </div>
                  </div>
                  <ul class="site-detail__items">
                    <li class="site-detail__item">HTML</li>
                    <li class="site-detail__item">CSS</li>
                    <li class="site-detail__item">SCSS</li>
                    <li class="site-detail__item">Javascript</li>
                    <li class="site-detail__item">jQuery</li>
                  </ul>
                </div>
                <div class="site-detail__card fadeIn1500ms">
                  <div class="site-detail__card__title site-title">
                    <p class="site-title__number">03</p>
                    <div class="site-title__text">
                      <img src="./img/work/work-title5.png" alt="" />
                      <img src="./img/work/work-title6.png" alt="" />
                    </div>
                  </div>
                  <p class="site-detail__text">
                    テキストテキストテキストテキストテキストテキストテキストテキ
                    テキストテキストテキストテキストテキストテキストテキストテキ
                    テキストテキストテキストテキストテキストテキストテキストテキ
                    テキストテキストテキストテキストテキストテキストテキストテキ
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="other">
          <div class="other__inner">
            <h2 class="heading other__head heading--type2">OTHER</h2>
            <div class="other__slider">
              <!-- Slider main container -->
              <div class="swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="other-card">
                      <div class="other-card__img">
                        <img src="./img/work/work-img1.png" alt="" />
                      </div>
                      <div class="other-card__text">Profile site</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="other-card">
                      <div class="other-card__img">
                        <img src="./img/work/work-img2.png" alt="" />
                      </div>
                      <div class="other-card__text">Shop site</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="other-card">
                      <div class="other-card__img">
                        <img src="./img/work/work-img3.png" alt="" />
                      </div>
                      <div class="other-card__text">OHA!(架空)</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="other-card">
                      <div class="other-card__img">
                        <img src="./img/work/work-img4.png" alt="" />
                      </div>
                      <div class="other-card__text">sobolon(架空)</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="other-card">
                      <div class="other-card__img">
                        <img src="./img/work/work-img1.png" alt="" />
                      </div>
                      <div class="other-card__text">Profile site</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="other-card">
                      <div class="other-card__img">
                        <img src="./img/work/work-img2.png" alt="" />
                      </div>
                      <div class="other-card__text">Shop site</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="other-card">
                      <div class="other-card__img">
                        <img src="./img/work/work-img3.png" alt="" />
                      </div>
                      <div class="other-card__text">OHA!(架空)</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="other-card">
                      <div class="other-card__img">
                        <img src="./img/work/work-img4.png" alt="" />
                      </div>
                      <div class="other-card__text">sobolon(架空)</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>

      <footer class="footer">
        <div class="footer__inner inner">
          <div class="footer__items">
            <p class="footer__copyright">
              <small>© ty coming ayumi okamura</small>
            </p>
            <a href="#" class="pagetop" id="js-pagetop"
              ><img src="./img/page-top.png" alt=""
            /></a>
          </div>
        </div>
      </footer>
      <script src="./js/lib/swiper-bundle.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
      <script src="./js/script.js"></script>
    </body>
  </html>
</html>
