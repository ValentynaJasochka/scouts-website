<?php
$textsHistory = include "texts-history.inc";


?>
<main>
  <div class="main-group">
    <div class="container regular-section">
      <div class="main-title-container">
        <h1 class="main-title"><?= getLangText($texts["main-title"]) ?></h1>
      </div>
      <div class="regular-section-wrapper">

        <div class="regular-block-main-container">
          <?php
          foreach ($textsHistory as $history) {
          ?>
            <div class="regular-block-wrapper">
              <div class="regular-block-img-wrapper">
                <img
                  class="regular-block-points-img"
                  src="<?= $history['src'] ?>"
                  alt="" />
              </div>
              <div class="regular-block-text-wrapper">
                <h3 class="regular-block-text-title"><?= getLangText($history['title']) ?></h3>
                <div class="regular-block-text">

                  <?php
                  foreach ($history['texts'] as $items) {
                  ?>
                    <p class="regular-block-text-part"><?= getLangText($items['text']) ?></p>
                  <?php
                  }
                  ?>
                </div>
              </div>
            </div>
          <?php
          }
          ?>

        </div>
        <div class="additional-text">
          <p class="additional-text-part"><?= getLangText($texts["additional-text"]) ?></p>
          <a href="./scouting-history" class="additional-text-link"><?= getLangText($texts["additional-link"]) ?>!</a>
        </div>
      </div>
    </div>
  </div>
</main>