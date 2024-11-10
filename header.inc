<?php
$dropdowns = include "./header-dropdowns.inc";
$texts = include "./header-texts.inc";
?>
<header class="header">
  <div class="container page-header-container">
    <nav class="header-navigation">
      <a class="header-logo" href="./">
        <img
          class="header-logo-img"
          src="./images/logo-heder.svg"
          alt="Logo Scouts" />
      </a>
      <a href="?lang=ukr">UA</a>
      <a href="?lang=en">EN</a>
      <ul class="header-nav-list nav-mobile-menu">

        <?php
        foreach ($dropdowns as $menuItem) {
        ?>

          <li class="header-nav-item nav-main-item">
            <div class="header-nav-item-container nav-item-click-listener">
              <p class="heder-nav-text"><?= $menuItem['header'][$lang] ?></p>
              <button class="inner-mobile-menu-open-btn" type="button">
                <svg class="inner-mobile-menu-open-icon" width="13" height="17">
                  <use
                    href="./images/sprite-title-page.svg#inner-mobile-open-btn"></use>
                </svg>
              </button>
            </div>
            <ul class="nav-table is-hidden">
              <?php

              foreach ($menuItem['links'] as $link) {
              ?>
                <li class='nav-table-item'>
                  <a class='nav-table-link' href='<?= $link['link'] ?>'><?= $link['title'][$lang] ?></a>
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
            <a class="header-nav-item-link" href="./join-us"><?=getLangText($texts['join'])?></a>
          </div>
        </li>
        <li class="header-nav-item heder-nav-text" style="display: none">
          <div class="header-nav-item-container">
            <a class="header-nav-item-link" href="./donation"><?=getLangText($texts['donation'])?></a>
          </div>
        </li>
      </ul>
    </nav>
    <button class="mobile-menu-open mobile-menu-handler open" type="button">
      <svg class="mobile-menu-open-icon" width="24" height="24">
        <use href="./images/sprite-title-page.svg#burger-icon"></use>
      </svg>
    </button>
    <button
      class="mobile-menu-close mobile-menu-handler close is-hidden"
      type="button">
      <img
        class="mobile-menu-close-icon"
        src="./images/close-mob-menu.png"
        alt="close-btn" />
    </button>
  </div>
</header>