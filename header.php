<!DOCTYPE html>
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

      <?php wp_head(); ?>
    </head>

    <body>
      <header class="header">
        <div class="header__inner inner">
          <h1 class="header__logo">
            <a href="/"><img src="<?php echo get_template_directory_uri() ?>/img/header-icon.png" alt="" /></a>
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
              <?php if(have_posts()): ?>
                      <?php while(have_posts()) :?>
                        <?php the_post(); ?>
                <a href="<?php the_permalink(); ?>#about" class="header__link">
                <?php endwhile;?>
                <?php endif;?>
                  <span class="link__text">ABOUT</span>
                  <span class="link__text">詳しく</span>
                </a>
              </li>
              <li class="header__list">
                <a href="<?php echo esc_url( home_url( '/' ) );?>#skill" class="header__link">
                  <span class="link__text">SKILL</span>
                  <span class="link__text">スキル</span>
                </a>
              </li>
              <li class="header__list">
                <a href="<?php echo esc_url( home_url( '/' ) );?>#works" class="header__link">
                  <span class="link__text">WORKS</span>
                  <span class="link__text">作品一覧</span>
                </a>
              </li>
              <li class="header__list">
                <a href="<?php echo esc_url( home_url( '/' ) );?>#contact" class="header__link">
                  <span class="link__text">CONTACT</span>
                  <span class="link__text">お問い合わせ</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>