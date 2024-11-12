<?php

$textsScoutMethods = include "texts-scouts-methods.inc";
$textsScoutsLowItems = include "texts-scouts-low-items.inc";
$textsPrinciples = include "texts-principles.inc";
?>
<main>
  <div class="main-group">
    <div class="container regular-section">
      <div class="main-title-container">
        <h1 class="main-title"><?= getLangText($texts["main-title"]) ?></h1>
      </div>
      <div class="scouts-methods">
        <p class="main-text"><?= getLangText($texts["main-text"]) ?> </p>

        <div class="scouts-methods-elements-banner">
          <img
            class="scouts-methods-elements-banner-img"
            src="<?= getLangText($texts["elements-banner-link"]) ?>"
            alt="scouting method diagram" />
        </div>
        <ul class="scouts-methods-elements-list">
          <?php
          foreach ($textsScoutMethods as $column) {
          ?>
            <div class="principle-column">
              <?php
              foreach ($column as $item) {
              ?>
                <li class="scouts-methods-elements-item">
                  <p class="scouts-methods-elements-number"><?= $item["number"] ?></p>

                  <div class="scouts-methods-item-wrapper">
                    <h3 class="scouts-methods-item-title">
                      <?= getLangText($item["title"]) ?>
                    </h3>
                    <p class="scouts-methods-item-text">
                      <?= getLangText($item["text"]) ?>
                    </p>
                  </div>
                </li>
              <?php
              }
              ?>
            </div>
          <?php
          }
          ?>
        </ul>

        <section class="scouts-promises">
          <h3 class="main-title"><?= getLangText($texts["scouts-promises-title"]) ?></h3>
          <div class="scouts-promises-wrapper">
            <div class="scouts-promises-img-wrapper">
              <img
                class="scouts-promises-img"
                src="./images/scouting-method/photo1.jpg"
                alt="scouts promises" />
            </div>

            <div class="scouts-promises-text">
              <p class="scouts-promises-text-part"><?= getLangText($texts["promises-text-part-first"]) ?></p>
              <p class="scouts-promises-text-part"><?= getLangText($texts["promises-text-part-second"]) ?></p>
              <p class="scouts-promises-text-additional-part"><?= getLangText($texts["promises-text-part-third"]) ?></p>
            </div>
          </div>

          <div class="scouts-promises-main">
            <h2 class="scouts-promises-header"><?= getLangText($texts["scouts-promises-header"]) ?></h2>
            <p class="scouts-promises-main-text"> <?= getLangText($texts["scouts-promises-main-text"]) ?> </p>
          </div>
          <div class="promises-additional-wrapper">
            <h3 class="main-title promises-none-title"><?= getLangText($texts["promises-additional-title"]) ?></h3>
            <div class="scouts-promises-wrapper reverse">
              <div>
                <h3 class="promises-additional-title"><?= getLangText($texts["promises-additional-title"]) ?></h3>
                <div class="scouts-promises-text promises-additional-text">

                  <p class="scouts-promises-text-part"><?= getLangText($texts["scouts-promises-text-part"]) ?> </p>
                </div>
              </div>
              <div class="scouts-promises-img-wrapper">
                <img
                  class="scouts-promises-img"
                  src="./images/scouting-method/photo2.jpg"
                  alt="scouts promises" />
              </div>
            </div>
          </div>
        </section>
        <section class="scouts-law-wrapper">
          <h3 class="main-title"><?= getLangText($texts["scouts-law-title"]) ?></h3>
          <p class="main-text low-additional-text"><?= getLangText($texts["scouts-law-text"]) ?></p>
          <div class="scouts-law">
            <div class="low-img-wrapper">
              <img
                class="low-img"
                src="./images/scouting-method/photo3.png"
                alt="scouts promises" />
            </div>

            <div class="scouts-law-list-wrapper">
              <p class="main-text law-text-item"><?= getLangText($texts["scouts-law-list-text"]) ?> </p>
              <ul class="scouts-law-list">
                <?php
                foreach ($textsScoutsLowItems as $items) {
                ?>

                  <li class="scouts-law-item">
                    <div class="tik-btn">
                      <img
                        class="tik-btn"
                        src="./images/scouting-method/icons/tik-btn.png"
                        alt="scouts promises" />
                    </div>
                    <p class="main-text law-text-item"><?= getLangText($items['item']) ?></p>
                  </li>
                <?php
                }
                ?>
              </ul>
            </div>
          </div>
        </section>
        <section>
          <div class="scouts-principles">
            <h2 class="main-title"><?= getLangText($texts["scouts-principles-title"]) ?> </h2>
            <p class="main-text"><?= getLangText($texts["scouts-principles-text"]) ?> </p>
            <ul class="scouts-principles-list">
              <?php
              foreach ($textsPrinciples as $principles) {
              ?>
                <li class="scouts-principles-item">
                  <h3 class="scouts-principles-title"><?= getLangText($principles['title']) ?></h3>
                  <p class="main-text scouts-principles-text"><?= getLangText($principles['text']) ?>
                  </p>
                </li>
              <?php
              }
              ?>
            </ul>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>