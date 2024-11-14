<?php
$textsEvents = include "texts-events.inc";


?>
<main class="main-group">
  <div class="container regular-section">
    <div class="main-title-container">
      <h1 class="main-title"><?= getLangText($texts["main-title"]) ?></h1>
    </div>
    <div class="our-events">
      <div class="regular-section-wrapper">
        <p class="event-item-text main-text"><?= getLangText($texts["main-text"]) ?></p>
        <ul class="regular-block-main-container">
          <?php
          foreach ($textsEvents as $events) {
          ?>
            <li class="regular-block-wrapper">
              <div class="regular-block-img-wrapper">
                <img
                  class="regular-block-points-img"
                  src="<?= $events['src'] ?>"
                  alt="" />
              </div>
              <div class="regular-block-text-wrapper">
                <h3 class="regular-block-text-title"><?= getLangText($events['title']) ?></h3>
                <div class="regular-block-text">
                  <?php
                  foreach ($events['texts'] as $items) {
                  ?>
                    <p class="regular-block-text-part"> <?= getLangText($items['text']) ?></p>
                  <?php
                  }
                  ?>
                </div>
              </div>
            </li>
          <?php
          }
          ?>

        </ul>
        <div class="join-wrapper">
          <p class=" join-text"><?= getLangText($texts["additional-text"]) ?>
          </p>

          <div class="join-btn">
            <a
              href=" https://forms.gle/43KEMxAFQeGt545cA"
              class="join-link"
              target="_blank"><?= getLangText($texts["join-btn"]) ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>