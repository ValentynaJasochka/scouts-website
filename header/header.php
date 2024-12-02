<?php
$dropdowns = include "header-dropdowns.inc";
$headerTexts = include "header-texts.inc";
$languages = [
  [
    'url' => "",
    'text' => "Українська",
    'not-active-for' => "ua",
    'icon' => '🇺🇦',
  ],
  [
    'url' => "en/",
    'text' => "English",
    'not-active-for' => "en",
    'icon' => '🇬🇧',
  ],

]
?>

<header class="header">
  <div class="container page-header-container">
    <nav class="header-navigation">
      <a class="header-logo" href="./">
        <img
          class="header-logo-img"
          src="<?= getLangText($headerTexts["logo"]) ?>"
          alt="Logo Scouts" />
      </a>
      <div class="lang-list nav-main-item  ">
        <div class="lang nav-item-click-listener">
          <div class="lang-menu">
            <a class="lang" href="/<?= getAddress() ?>"><?= getLangText($headerTexts['active-lang-icon']) ?> <?= getLangText($headerTexts['active-lang']) ?></a>
            <button class="inner-mobile-menu-open-btn" type="button">
              <svg class="inner-mobile-menu-open-icon" width="13" height="17">
                <use
                  href="/images/sprite-title-page.svg#inner-mobile-open-btn"></use>
              </svg>
            </button>
          </div>
          <ul class="nav-table lang-nav-table is-hidden">
            <?php
            foreach ($languages as $language) {
              if ($language['not-active-for'] != $lang) {
            ?>
                <li class="lang-en ">
                  <a class="lang" href="/<?= $language['url'] ?><?= getAddress() ?>"><?= $language['icon'] ?> <?= $language['text'] ?></a>
                </li>

            <?php
              }
            }
            ?>

          </ul>
        </div>
      </div>

      <ul class="header-nav-list nav-mobile-menu">

        <?php
        foreach ($dropdowns as $menuItem) {
        ?>

          <li class="header-nav-item nav-main-item">
            <div class="header-nav-item-container nav-item-click-listener">
              <p class="heder-nav-text"><?= getLangText($menuItem['header']) ?></p>
              <button class="inner-mobile-menu-open-btn" type="button">
                <svg class="inner-mobile-menu-open-icon" width="13" height="17">
                  <use
                    href="/images/sprite-title-page.svg#inner-mobile-open-btn"></use>
                </svg>
              </button>
            </div>
            <ul class="nav-table is-hidden">
              <?php

              foreach ($menuItem['links'] as $link) {
              ?>
                <li class='nav-table-item'>
                  <a class='nav-table-link' href='<?= $link['link'] ?>'><?= getLangText($link['title']) ?></a>
                </li>
              <?php
              }
              ?>
            </ul>
          </li>
        <?php
        }
        ?>
        <li class="header-nav-item heder-nav-text">
          <div class="header-nav-item-container">
            <a class="header-nav-item-link" href="./join-us"><?= getLangText($headerTexts['join']) ?></a>
          </div>
        </li>
        <li class="header-nav-item heder-nav-text">

          <div class="header-nav-item-container">
            <a class="header-nav-item-link" href="./donation"><?= getLangText($headerTexts['donation']) ?></a>
          </div>
        </li>
        <li>
          <div class="lang-mobile-list">
            <div class="lang-mobile-menu">
              <?php
              foreach ($languages as $language) {
                if ($language['not-active-for'] != $lang) {
              ?>
                  <a class="lang deactivated-lang-mobile" href="/<?= $language['url'] ?><?= getAddress() ?>"><?= $language['text'] ?></a>

                <?php
                } else {
                ?>
                  <a class="lang" href="/<?= $language['url'] ?><?= getAddress() ?>"><?= $language['text'] ?></a>

              <?php
                }
              }
              ?>

            </div>
          </div>
        </li>
      </ul>
    </nav>
    <button class="mobile-menu-open mobile-menu-handler open" type="button">
      <svg class="mobile-menu-open-icon" width="24" height="24">
        <use href="/images/sprite-title-page.svg#burger-icon"></use>
      </svg>
    </button>
    <button
      class="mobile-menu-close mobile-menu-handler close is-hidden"
      type="button">
      <img
        class="mobile-menu-close-icon"
        src="/images/close-mob-menu.png"
        alt="close-btn" />
    </button>
  </div>
</header>