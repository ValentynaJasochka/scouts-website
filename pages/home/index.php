<?php
$mediaLinks = [
  [
    'url' => 'https://www.instagram.com/ukrscout',
    'image' => 'instagram'
  ],
  [
    'url' => 'https://www.facebook.com/ukrscout',
    'image' => 'facebook'
  ],
  [
    'url' => 'https://t.me/ukrscout',
    'image' => 'telegram'
  ]
];

$textsAboutUs = include "texts-about-us.inc";
$textsOurEvents = include "texts-our-events.inc";
$textsScoutReviews = include "texts-scout-review.inc";
?>
<main>
  <div class="main-group">
    <section class="container hero">
      <div class="hero-container">
        <div class="hero-text-container">
          <p class="hero-text"><?= getLangText($texts["open-world"]) ?></p>
        </div>
        <ul class="social-media-list">
          <?php
          foreach ($mediaLinks as $link) {
          ?>
            <li class="social-media-link">
              <a
                href="<?= $link['url'] ?>"
                class="social-media-item"
                target="_blank">
                <svg class="social-media-item-icon">
                  <use href="./images/sprite-title-page.svg#<?= $link['image'] ?>"></use>
                </svg>
              </a>
            </li>
          <?php
          }
          ?>
        </ul>
      </div>
      <a href="./join-us" class="subscribing-link">
        <img
          class="subscribing-link-icon"
          src="./images/btn-vector.png"
          width="30"
          height="30" />
        <p class="subscribing-link-text top"><?= getLangText($texts['join-us']) ?></p>
      </a>
    </section>
    <section class="container about-scouts">
      <div class="about-scouts-block">
        <div class="about-scouts-discribing-block">
          <h2 class="sub-title"><?= getLangText($texts['about-us-title']) ?></h2>
          <p class="about-scouts-text"><?= getLangText($texts['about-us-text']) ?></p>
        </div>
        <div class="about-scouts-background-block"></div>
      </div>
      <div class="about-scouts-cards-list-container">
        <ul class="about-scouts-cards-list">
          <?php
          foreach ($textsAboutUs as $aboutUs) {
          ?>
            <li class="about-scouts-card">
              <div class="about-scouts-header">
                <div class="about-scouts-card-img">
                  <img
                    class="about-scouts-card-picture"
                    src="./images/<?= $aboutUs['image'] ?>" />
                </div>
                <h3 class="scouts-card-title"><?= getLangText($aboutUs['title']) ?></h3>
              </div>
              <p class="scouts-card-text"><?= getLangText($aboutUs['text']) ?></p>
              <a href="<?= $aboutUs['url'] ?>">
                <img
                  class="about-scouts-card-nav"
                  src="./images/arrow-grey.png"
                  width="32"
                  height="32" />
              </a>
            </li>
          <?php
          }
          ?>
        </ul>
      </div>
    </section>
    <section class="container main-part">
      <h1 class="main-title additional-main-title"><?= getLangText($texts['sc-ua-title']) ?></h1>
      <div class="main-part-section-img-wrapper">
        <img
          class="main-part-section-img"
          src="./images/about-us/main-banner.jpg"
          alt="Ukrainian scouts" />
      </div>

      <div class="main-information-block">
        <div class="information-block">
          <p class="information-numbers">1320+</p>
          <p class="text-information"><?= getLangText($texts['sc-ua-a']) ?></p>
        </div>
        <div class="information-block">
          <p class="information-numbers">173</p>
          <p class="text-information"><?= getLangText($texts['sc-ua-b']) ?></p>
        </div>
        <div class="information-block">
          <p class="information-numbers">35+</p>
          <p class="text-information"><?= getLangText($texts['sc-ua-c']) ?></p>
        </div>
      </div>
    </section>
    <section class="container events">
      <div class="events-wrapper">
        <h2 class="sub-title events-title"><?= getLangText($texts['our-events-title']) ?></h2>
        <div class="events-list-container">
          <ul class="events-list">
            <?php
            foreach ($textsOurEvents as $ourEvent) {
            ?>
              <li class="events-item">
                <h3 class="events-item-title"><?= getLangText($ourEvent['title']) ?></h3>
                <div class="events-img-wrapper">
                  <img
                    class="events-img"
                    src="./images/about-us/<?= $ourEvent['image'] ?>"
                    alt="<?= $ourEvent['image-alt'] ?>" />
                </div>

                <p class="events-item-text"><?= getLangText($ourEvent['text']) ?></p>
              </li>
            <?php
            }
            ?>
          </ul>
        </div>
      </div>
    </section>
    <section class="reviews">
      <div class="container reviews-section">
        <h2 class="reviews-title"><?= getLangText($texts["sc-review-title"]) ?></h2>
        <ul class="reviews-list">
          <?php
          foreach ($textsScoutReviews as $reviews) {
          ?>
            <li class="reviews-stiled">
              <?php
              foreach ($reviews as $review) {
                if ($review["subclass"] != "") {
              ?>
                  <div class="reviews-item-styled <?= $review["subclass"] ?>"></div>
                <?php
                } else {
                ?>
                  <div class="reviews-item">
                    <p class="reviews-text"><?= getLangText($review["text"]) ?></p>
                    <div class="reviews-individuo-wrapper">
                      <div class="reviewer-photo-wrapper">
                        <img
                          class="reviewer-photo"
                          src="<?= $review["photo"] ?>"
                          alt="<?= getLangText($review["photo-alt"]) ?>" />
                      </div>

                      <div class="reviews-individuo">
                        <p class="reviewer-name"><?= getLangText($review["name"]) ?></p>
                        <p class="reviewer-status"><?= getLangText($review["status"]) ?></p>
                      </div>
                    </div>
                  </div>
              <?php
                }
              }
              ?>
            </li>
          <?php
          }
          ?>
        </ul>
      </div>
    </section>
    <section class="invitation">
      <div class="container invitation-section">
        <div class="invitation-information">
          <h2 class="invitation-title"><?= getLangText($texts["invitation-title"]) ?></h2>
          <p class="invitation-text"><?= getLangText($texts["invitation-text"]) ?></p>
          <a
            href="./join-us"
            class="subscribing-link subscribing-link-invitation">
            <img
              class="subscribing-link-icon"
              src="./images/btn-vector.png"
              width="30"
              height="30" />
            <p class="subscribing-link-text bottom"><?= getLangText($texts["join-us-bottom"]) ?></p>
          </a>
        </div>
        <div class="invitation-section-img">
          <img
            class="invitation-img"
            src="./images/about-us/Photo8.png"
            alt="bikes riding" />
          <img
            class="invitation-img-second"
            src="./images/about-us/Photo9.png"
            alt="team building" />
        </div>
      </div>
    </section>
  </div>
</main>