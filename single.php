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

      <link rel="stylesheet" href="./css/reset.css" />
      <link rel="stylesheet" href="./css/style.css" />
      <link rel="stylesheet" href="./css/lib/swiper-bundle.min.css" />
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
                <a href="#about" class="header__link">
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
                <div class="about__img">
                  <div class="about__img-main rotation rotation-y">
                    <img src="./img/plofile-2.png" alt="" />
                  </div>
                  <div class="about__img-sub">
                    <img src="" alt="" />
                  </div>
                </div>
                <div class="about__content">
                  <div class="about__detail">
                    <div class="about__name">
                      <p class="about__name-jp js-in-view fade-in-up">
                        岡村 歩実
                      </p>
                      <p class="about__name-en js-in-view fade-in-up">
                        Ayumi Okamura
                      </p>
                    </div>
                    <p class="about__text">
                      1996年東京生まれ<br />
                      文化服装学園を卒業後、アパレル企業で<br
                        class="hidden-md"
                      />パタンナー、生産管理を経験 <br />IT業界に転職し、
                      Web制作に興味を持ち、<br
                        class="hidden-md"
                      />デイトラにてWeb制作を学ぶ
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
                  株式会社テクノ・ポッセ　SESとして入社 (現在は金融系の開発保守)
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
              <div class="strengths__card strengths-card fadeIn500ms-spin">
                <div class="strengths-card__title card-title fade-in">
                  <p class="card-title__number">01</p>
                  <div class="card-title__text">
                    <img src="./img/strength/strength-title1.png" alt="" />
                  </div>
                </div>
                <p class="strengths-card__text">
                  テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                  テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
              </div>
              <div class="strengths__card strengths-card">
                <div class="strengths-card__title card-title fade-in">
                  <p class="card-title__number">02</p>
                  <div class="card-title__text">
                    <img src="./img/strength/strength-title2.png" alt="" />
                  </div>
                </div>
                <p class="strengths-card__text">
                  テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                  テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
              </div>
              <div class="strengths__card strengths-card">
                <div class="strengths-card__title card-title fade-in">
                  <p class="card-title__number">03</p>
                  <div class="card-title__text">
                    <img src="./img/strength/strength-title3.png" alt="" />
                  </div>
                </div>
                <p class="strengths-card__text">
                  テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                  テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
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
                  <img src="./img/like.png" alt="" />
                </div>
                <p class="likes-card__title">English</p>
              </div>
              <div class="likes__card likes-card fadeIn1s">
                <div class="likes-card__img likes-card__img--type2">
                  <img src="./img/like.png" alt="" />
                </div>
                <p class="likes-card__title">Illustration</p>
              </div>
              <div class="likes__card likes-card fadeIn1500ms">
                <div class="likes-card__img likes-card__img--type3">
                  <img src="./img/like.png" alt="" />
                </div>
                <p class="likes-card__title">Fashion</p>
              </div>
              <div class="likes__card likes-card fadeIn2s">
                <div class="likes-card__img likes-card__img--type4">
                  <img src="./img/like.png" alt="" />
                </div>
                <p class="likes-card__title">Music</p>
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
