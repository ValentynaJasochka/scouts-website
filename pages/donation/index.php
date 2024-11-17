<?php
$textsQuestions = include "texts-questions.inc";
$textsLaw = include "texts-scouts-law.inc";
?>
<main>
  <div class="main-group">
    <div class="container regular-section">
      <div class="main-title-container">
        <h1 class="main-title"><?= getLangText($texts["main-title"]) ?></h1>
      </div>
      <div class="donation-section">
        <div class="donation">
          <p class="donation-additional-text first-additional-text">
            <?= getLangText($texts["first-additional-text"]) ?>
          </p>
          <div class="donation-block-wrapper first-donation-block-wrapper">
            <div class="donation-block-img-wrapper first-img-wrapper">
              <img
                class="donation-block-points-img"
                src="./images/donation/photo1.jpg"
                alt="" />
            </div>
            <div class="side-wrapper">
              <div class="donation-block-text first-wrapper">
                <p class="donation-additional-text second-additional-text">
                  <?= getLangText($texts["first-additional-text"]) ?>
                </p>
                <p class="donation-block-text-part">
                  <?= getLangText($texts["second-additional-text"]) ?>
                </p>
                <p class="donation-block-text-part">
                  <?= getLangText($texts["third-additional-text"]) ?>
                </p>
              </div>
            </div>
          </div>
          <div class="donation-block-wrapper">
            <div class="donation-block-img-wrapper second-img-wrapper">
              <img
                class="donation-block-points-img"
                src="./images/donation/photo2.jpg"
                alt="" />
            </div>
            <div class="side-wrapper">
              <div class="donation-block-text">
                <p class="donation-block-text-part">
                  <?= getLangText($texts["donation-text"]) ?>
                </p>
              </div>
              <ul class="scouts-law-list">
                <?php
                foreach ($textsLaw as $law) {
                ?>

                  <li class="scouts-law-item">
                    <div class="tik-btn">
                      <img
                        class="tik-btn"
                        src="./images/scouting-method/icons/tik-btn.png"
                        alt="" />
                    </div>
                    <p class="main-text law-text-item">
                      <?= getLangText($law['law-text']) ?>
                    </p>
                  </li>
                <?php
                }
                ?>
              </ul>
            </div>

          </div>
          <div class="donation-additional-block-wrapper">
            <div class="donation-block-text">
              <p class="donation-block-text-part">
                <?= getLangText($texts["donation-text-second"]) ?>
              </p>
            </div>
            <div class="donate-btn">
              <a href="" class="donate-link" target="_blank"><?= getLangText($texts["donate-btn"]) ?></a>
            </div>
            <div class="donation-block-text">
              <p class="donation-block-text-part">
                <?= getLangText($texts["donation-text-third"]) ?>
              </p>
            </div>
          </div>
        </div>
        <div class="questions">
          <p class="questions-title"><?= getLangText($texts["questions-title"]) ?></p>
          <ul class="questions-list">
            <?php
            foreach ($textsQuestions as $question) {
            ?>

              <li class="questions-list-item" data-question-answer>
                <div class="questions-header-wrapper">
                  <p class="questions-header" data-open-close-question>
                    <?= getLangText($question['questions']) ?>
                  </p>
                  <div
                    class="questions-header-open-close-btn"
                    data-open-close-question></div>
                </div>
                <div class="answer-wrapper">
                  <p class="answer">
                    <?= getLangText($question['answer']) ?>
                  </p>
                </div>
              </li>
            <?php
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</main>