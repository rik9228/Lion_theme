<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="format-detection" content="telephone=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;600&family=Noto+Serif+JP:wght@400;600&display=swap" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=10,initial-scale=1.0" />
  <?php wp_head(); ?>
</head>

<body>
  <!-- header start -->
  <header class="header">
    <div class="header__wrapper">
      <div class="header__toggle-wrap" id="js-headerToggle">
        <span class="header__toggle"></span>
      </div>
      <nav class="navi-header">
        <div class="navi-header__wrapper">
          <div class="navi-header__box">

            <?php
            wp_nav_menu(array(
              'theme_location'  => 'gNav',
              'container'       => 'ul',
              'items_wrap'      => '<ul class="navi-header__listFrame">%3$s</ul>',
            ));
            ?>

            <div class="navi-header__partition">
              <div class="navi-header__logo-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_line.svg" alt="ロゴ画像：LINEリンク" class="navi-header__logo" />
              </div>
              <div class="navi-header__logo-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_insta.svg" alt="ロゴ画像：インスタリンク" class="navi-header__logo" />
              </div>
            </div>
          </div>
          <div class="navi-header__box--02">
            <dl class="navi-header__list">
              <div class="navi-header__partition--02">
                <dt class="navi-header__term">Address</dt>
                <dd class="navi-header__description">
                  <address>〒123-4567<br />神戸市中央区加納町4丁目10</address>
                </dd>
              </div>
              <div class="navi-header__partition--02">
                <dt class="navi-header__term">Open</dt>
                <dd class="navi-header__description">10:00&nbsp;〜&nbsp;19:00</dd>
              </div>
              <div class="navi-header__partition--02">
                <dt class="navi-header__term">Close</dt>
                <dd class="navi-header__description">月曜日</dd>
              </div>
            </dl>
          </div>
          <div class="navi-header__link-wrap pc-none">
            <a href="https://beauty.hotpepper.jp/kr/slnH000538023/?cstt=4" target="_blank" rel="noopener" class="navi-header__link navi-header__link--reserve">RESERVE</a>
          </div>
        </div>
      </nav>
      <div class="homeLogo">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="homeLogo__link">
          <img src="<?php echo get_template_directory_uri(); ?>/img/common/img_homelogo.png" alt="ロゴ画像：トップへ戻る" class="homeLogo__image" />
        </a>
      </div>
    </div>
  </header>
  <header class="header-second">
    <ul class="header-second__listFrame">
      <li class="header-second__listItem">
        <a href="" class="header-second__link">
          <img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_line.svg" alt="アイコン：LINEリンク" class="header-second__image" />
        </a>
      </li>
      <li class="header-second__listItem">
        <a href="https://beauty.hotpepper.jp/kr/slnH000538023/?cstt=4" target="_blank" rel="noopener" class="header-second__link">
          <img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_beauty.svg" alt="アイコン：ホットペッパービューティリンク" class="header-second__image" />
        </a>
      </li>
      <li class="header-second__listItem">
        <a href="https://www.instagram.com/lionkobesannomiya/" target="_blank" rel="noopener" class="header-second__link">
          <img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_insta.svg" alt="アイコン：Instagramリンク" class="header-second__image" />
        </a>
      </li>
    </ul>
  </header>
  <!-- header end -->
