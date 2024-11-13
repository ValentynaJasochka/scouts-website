<?php
$textsHistory = include "texts-history.inc";

?>
<main class="main-group">
  <div class="container regular-section scouting-history-section">
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
              <h3 class="regular-block-text-title"><?= getLangText($history['dates']) ?></h3>
              <div class="regular-block-text">
                <p class="regular-block-text-part regular-block-text-bold"><?= getLangText($history['title']) ?></p>
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
        <p class="additional-text-part"> <?= getLangText($texts['additional-text']) ?> </p>
        <a class="additional-text-history-link" href="./our-history"> <?= getLangText($texts['additional-link']) ?>
        </a>
      </div>
    </div>
  </div>
</main>