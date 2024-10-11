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
                <a href="#skill" class="header__link">
                  <span class="link__text">SKILL</span>
                  <span class="link__text">スキル</span>
                </a>
              </li>
              <li class="header__list">
                <a href="#work" class="header__link">
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
                    src="./img/plofile-1.png"
                    alt=""
                  />
                  <img class="profile__img-sub" src="" alt="" />
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
                    文化服装学園を卒業後、アパレル企業で<br
                      class="hidden-md"
                    />パタンナー、生産管理を経験 <br />IT業界に転職し、
                    Web制作に興味を持ち、<br
                      class="hidden-md"
                    />デイトラにてWeb制作を学ぶ
                  </p>
                  <div class="profile__button">
                    <a href="" class="button">
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
                        src="./img/skill/skill-img-cd.png"
                        alt=""
                      />
                    </div>
                    <div class="skill__detail">
                      <h2>
                        <span class="skill__title js-in-view fade-in-up"
                          >WEB Coding</span
                        >
                      </h2>
                      <p class="skill__text">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                      </p>
                    </div>
                  </div>
                  <div class="skill__tool skill-tool">
                    <div class="skill-tool__title js-in-view fade-in-up">
                      <img src="./img/skill/tool-title.png" alt="" />
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
                        src="./img/skill/skill-img-wp.png"
                        alt=""
                      />
                    </div>
                    <div class="skill__detail">
                      <h3 class="skill__title-wp js-in-view fade-in-up">
                        <img src="./img/skill/wp-title.png" alt="" />
                      </h3>
                      <p class="skill__text">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="work" class="work">
          <div class="work__inner inner">
            <h2 class="heading work__head">WORK</h2>
            <div class="work__cards">
              <div class="work__card work-card fadeIn500ms">
                <a href="" class="work-card__img">
                  <img src="./img/work/work-img1.png" class="card-img" alt="" />
                </a>
                <div class="work__texts">
                  <h3 class="work-card__title">Portfolio site</h3>
                  <div class="tools">
                    <p class="tool">HTML</p>
                    <p class="tool">CSS</p>
                    <p class="tool">SCSS</p>
                    <p class="tool">JavaScript</p>
                    <p class="tool">jQuery</p>
                    <p class="tool">WordPress</p>
                    <p class="tool">Swiper</p>
                    <p class="tool">figma</p>
                  </div>
                </div>
              </div>
              <div class="work__card work-card fadeIn1s">
                <div class="work-card__img">
                  <img src="./img/work/work-img2.png" class="card-img" alt="" />
                </div>
                <div class="work__texts">
                  <h3 class="work-card__title">Shop site</h3>
                  <div class="tools">
                    <p class="tool">HTML</p>
                    <p class="tool">CSS</p>
                    <p class="tool">SCSS</p>
                    <p class="tool">JavaScript</p>
                    <p class="tool">jQuery</p>
                    <p class="tool">WordPress</p>
                    <p class="tool">Swiper</p>
                    <p class="tool">figma</p>
                  </div>
                </div>
              </div>
              <div class="work__card work-card fadeIn1500ms">
                <div class="work-card__img">
                  <img src="./img/work/work-img3.png" class="card-img" alt="" />
                </div>
                <div class="work__texts">
                  <h3 class="work-card__title">Corporate site</h3>
                  <div class="tools">
                    <p class="tool">HTML</p>
                    <p class="tool">CSS</p>
                    <p class="tool">SCSS</p>
                    <p class="tool">JavaScript</p>
                    <p class="tool">jQuery</p>
                    <p class="tool">WordPress</p>
                    <p class="tool">Swiper</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="work__button">
              <a href="" class="button">
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
                id="contact-link"
                href="#contact"
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
                  <img class="is-github" src="./img/github.png" alt="" />
                </a>
              </li>
              <li class="contact__link-item">
                <a
                  href="https://github.com/dottoz2531-cloud?tab=repositories"
                  class="site__link"
                >
                  <img class="is-wantedly" src="./img/wantedly.png" alt="" />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>

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
