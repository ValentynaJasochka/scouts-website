<?php
$textsMissionsVision = include "texts-mission-vision.inc";
$textsHeadquarters = include "texts-headquarters.inc";

?>
<main>
  <div class="main-group">
    <section class="container regular-section">
      <div class="scouting-title">
        <div class="world-scouting-title">
          <img
            class="world-scouting-logo"
            src="./images/world-scouting-organisation/world-scouts-logo.png"
            width="50"
            height="58" />
          <h1 class="main-title"><?= getLangText($texts["main-title"]) ?></h1>
        </div>
        <div class="more-about-scouting">
          <a
            class="world-scouting-link"
            href="https://www.scout.org"
            target="_blank"><?= getLangText($texts["sub-title"]) ?></a>
        </div>
        <div class="line"></div>
      </div>
      <div class="regular-section-wrapper">
        <ul class="mission-vision-list">
          <?php
          foreach ($textsMissionsVision as $vision) {
          ?>

            <li class="mission-vision-item">
              <div class="mission-vision-img-wrapper">
                <img
                  class="mission-vision-img"
                  src="<?= $vision['src'] ?>"
                  alt="" />
              </div>

              <h3 class="mission-vision-item-title"><?= getLangText($vision['title']) ?></h3>
              <p class="mission-vision-item-text"><?= getLangText($vision['text']) ?></p>
            </li>
          <?php
          }
          ?>

        </ul>
      </div>
    </section>
    <section class="container mission-vision-wrapper">
      <div class="headquarters">
        <div class="headquarter-container">
          <div class="headquarters-information">
            <h2 class="mission-vision-item-title headquarters-title">
            <?= getLangText($texts["headquarters-title"]) ?>
            </h2>
            <p class="headquarters-information-text"><?= getLangText($texts["headquarters-information-first"]) ?></p>
            <p class="headquarters-information-text"><?= getLangText($texts["headquarters-information-second"]) ?></p>
          </div>
          <img
            class="headquarters-arrow"
            src="./images/world-scouting-organisation/arrow.png"
            width="67"
            height="85" />
          <div class="headquarters-information">
            <ul class="headquarters-address-bord-list">
              <?php
              foreach ($textsHeadquarters as $headquarters) {
              ?><li class="headquarters-address-bord-item">
                  <p class="address-bord-item-region"><?= getLangText($headquarters['title']) ?></p>
                  <p class="address-bord-item-country"><?= getLangText($headquarters['text']) ?></p>
                </li>
              <?php
              }
              ?>

            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>