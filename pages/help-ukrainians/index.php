<?php
$textsHelping = include "texts-helping.inc";
?>
<main>
  <div class="main-group">
    <div class="container regular-section">
      <div class="main-title-container">
        <h1 class="main-title"><?= getLangText($texts["main-title"]) ?></h1>
      </div>
      <div class="main-title-container beginning">
        <p class="main-text"><?= getLangText($texts["main-text"]) ?> </p>
      </div>
      <div class="regular-section-wrapper">

        <div class="regular-block-main-container">

          <?php
          foreach ($textsHelping as $project) {
          ?>
            <div class="regular-block-wrapper column-revers">
              <div class="regular-block-text-wrapper">
                <h3 class="regular-block-text-title">
                  <?= getLangText($project['title']) ?>
                </h3>
                <div class="regular-block-text">

                  <?php
                  foreach ($project['texts'] as $items) {

                  ?>
                    <p class="regular-block-text-part">
                      <?= getLangText($items['text']) ?>
                    </p>

                  <?php
                  }
                  ?>
                </div>
              </div>
              <div class="regular-block-img-wrapper project-img-wrapper">
                <img
                  class="regular-block-points-img project-img"
                  src="<?= $project['src'] ?>"
                  alt="" />
              </div>
            </div>
          <?php
          }
          ?>
        </div>
        <div class="donation-description display-none">
          <div class="donation-first-desktop-part">
            <div class="donation-text-desktop-part">
              <p class="volunteering-text-bold"> <?= getLangText($texts["volunteering-text-part-first"]) ?></p>
              <p class="volunteering-text-part mobile-none"><?= getLangText($texts["volunteering-text-part-second"]) ?>
              </p>
            </div>
            <div class=" volunteering-img-wrapper">
              <img
                class=" volunteering-img"
                src="./images/help-ukrainiars/photo5.jpg"
                alt="" />
            </div>
          </div>
          <p class="volunteering-text-part display-none">
            <?= getLangText($texts["volunteering-text-part-second"]) ?>
          </p>
          <p class="volunteering-text-part mobile-none">
            <?= getLangText($texts["volunteering-text-part-second"]) ?>
          </p>
          <p class="volunteering-text-part display-none">
            <?= getLangText($texts["volunteering-text-part-third"]) ?>
          </p>
          <div class="join-btn volunteering-btn mobile-none">
            <a href="./donation" class="join-link"><?= getLangText($texts["donation-btn"]) ?></a>
          </div>
        </div>
        <div class="join-btn volunteering-btn display-none">
          <a href="./donation" class="join-link"><?= getLangText($texts["donation-btn"]) ?></a>
        </div>


      </div>
    </div>
  </div>
</main>