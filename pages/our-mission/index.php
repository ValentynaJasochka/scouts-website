<?php
$textsAgeGroups = include "texts-age-groups.inc";
$textsOurMission = include "texts-our-mission.inc";
$textsOurProgram = include "texts-our-program.inc";
$textsHowWorks = include "texts-how-works.inc";

?>
<main>
  <div class="main-group">
    <div class="container regular-section our-mission-section">
      <div class="main-title-container">
        <h1 class="main-title"><?= getLangText($texts["our-mission"]) ?></h1>
      </div>
      <div class="regular-section-wrapper section-mission-wrapper">
        <div class="mission-wrapper">
          <div class="regular-block-wrapper">
            <div class="regular-block-img-wrapper our-mission-img">
              <img
                class="regular-block-points-img"
                src="/images/our-mission/photo1.JPG"
                alt="" />
            </div>
            <div class="regular-block-text-wrapper">
              <?php
              foreach ($textsOurMission as $ourMission) {
              ?>
                <p class="regular-block-text">
                  <?= getLangText($ourMission['text']) ?>
                </p>

              <?php
              }
              ?>
            </div>
          </div>
        </div>

        <div class="mission-wrapper ">
          <h2 class="mission-title" id="our-program"><?= getLangText($texts["our-program"]) ?></h2>
          <div class="regular-block-wrapper reverse">
            <div class="regular-block-img-wrapper our-mission-img">
              <img
                class="regular-block-points-img"
                src="/images/our-mission/photo2.jpg"
                alt="" />
            </div>
            <div class="regular-block-text-wrapper">
              <?php
              foreach ($textsOurProgram as $ourProgram) {
              ?>
                <p class="regular-block-text">
                  <?= getLangText($ourProgram['text']) ?>
                </p>

              <?php
              }
              ?>
            </div>

          </div>
        </div>
      </div>
      <div class="narrow-container">
        <div>
          <h2 class="regular-block-text-title age-groups-title "><?= getLangText($texts["age-groups-title"]) ?></h2>
          <p class="regular-block-text organization-text"><?= getLangText($texts["organization-text"]) ?>
          </p>
        </div>

        <div class="age-groups-container">
          <ul class="age-groups">
            <?php
            foreach ($textsAgeGroups as $ageGroups) {
            ?>
              <li class="age-groups-item">
                <div class="age-group-wrapper">
                  <div class="visible-category-age-group">
                    <div class="visible-category-age-group-img">
                      <img
                        class="visible-category-age-group-picture"
                        src="<?= $ageGroups['src'] ?>"
                        alt="<?= getLangText($ageGroups['alt']) ?>" />
                    </div>

                    <div class="overlay"></div>
                    <div class="visible-category-text">
                      <p class="visible-category-age-group-name"><?= getLangText($ageGroups['name']) ?></p>
                      <p class="visible-category-age-group-age"><?= getLangText($ageGroups['age']) ?></p>
                    </div>
                    <div class="hidden-category-text">
                      <p class="hidden-category-age-group-name"><?= getLangText($ageGroups['name']) ?></p>
                      <p class="hidden-category-age-group-age"><?= getLangText($ageGroups['age']) ?></p>
                    </div>
                  </div>
                </div>
              </li>

            <?php
            }
            ?>
          </ul>
        </div>
        <p class="regular-block-text organization-text">
          <?= getLangText($texts["organization-text-second"]) ?>
        </p>
      </div>
      <div class="main-title-container">
        <h2 class="main-title"><?= getLangText($texts["main-title"]) ?></h2>
      </div>
      <div class="regular-section-wrapper">
        <?php
        foreach ($textsHowWorks as $howWorks) {
        ?>
          <div class="regular-block-wrapper">
            <div class="regular-block-img-wrapper">
              <img
                class="regular-block-points-img"
                src="<?= $howWorks['src'] ?>"
                alt="<?= getLangText($howWorks['alt']) ?>" />
            </div>
            <div class="regular-block-text-wrapper">
              <h3 class="regular-block-text-title"><?= getLangText($howWorks['text-title']) ?></h3>
              <p class="regular-block-text"><?= getLangText($howWorks['text']) ?>
              </p>
            </div>
          </div>
        <?php
        }

        ?>

     
      <div class="additional-text">
        <p class="additional-text-part">
        <?= getLangText($texts['additional-text-part']) ?>
        </p>
        <a class="additional-text-link" href="./our-history"> <?= getLangText($texts['additional-text-link']) ?></a>
      </div>

    </div>
  </div>
  </div>
</main>