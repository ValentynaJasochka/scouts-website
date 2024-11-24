<?php
$textsBecomeScout = include "texts-become-scout.inc";
$textsBecomeRover = include "texts-become-rover.inc";
$textsInvitation = include "texts-invitation.inc";
$textsLeadershipChildren = include "texts-leadership-children.inc";
$textsLeadershipManagement = include "texts-leadership-management.inc";
$textsAdvantages = include "texts-advantages.inc";
?>
<main class="main-group">
  <div class="banner"></div>
  <div class="regular-section-wrapper">
    <section class="container regular-section">
      <h1 class="main-title"><?= getLangText($texts["main-title"]) ?></h1>
      <p class="main-text"><?= getLangText($texts["main-text"]) ?></p>
      <h2 class="sub-title"><?= getLangText($texts["sub-title-first"]) ?></h2>
      <div class="invitation-wrapper">
        <div class="invitation-text-wrapper">
          <div class="invitation-text">
            <?php
            foreach ($textsBecomeScout as $becomeScout) {
            ?>
              <p class="invitation-text-part"><?= getLangText($becomeScout['text']) ?></p>
            <?php
            }
            ?>

          </div>
          <div class="join-btn join-us-btn">
            <a
              href=" https://forms.gle/43KEMxAFQeGt545cA"
              class="join-link"
              target="_blank"><?= getLangText($texts["join-btn"]) ?>
            </a>
          </div>
        </div>
        <div class="decorated-background">
          <div class="decorated-background-first-part"></div>
          <div class="decorated-background-second-part"></div>
        </div>
      </div>
      <h2 class="sub-title"><?= getLangText($texts["sub-title-second"]) ?></h2>
      <div class="invitation-wrapper second-invitation-wrapper">
        <div class="decorated-background second-decorated-background">
          <div class="decorated-background-first-part"></div>
          <div class="decorated-background-second-part"></div>
        </div>
        <div class="invitation-text-wrapper second-invitation-text-wrapper">
          <div class="invitation-text">
            <?php
            foreach ($textsBecomeRover as $becomeRover) {
            ?>
              <p class="invitation-text-part"><?= getLangText($becomeRover['text']) ?></p>
            <?php
            }
            ?>

          </div>
          <div class="join-btn second-join-btn join-us-btn">
            <a
              href=" https://forms.gle/43KEMxAFQeGt545cA"
              class="join-link"
              target="_blank"><?= getLangText($texts["join-btn"]) ?>
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
  <section class="container advantages">
    <div class="advantages-wrapper">
      <h2 class="advantages-title"><?= getLangText($texts["advantages-title"]) ?></h2>
      <ul class="advantages-list">
        <?php
        foreach ($textsAdvantages as $advantages) {
        ?>

          <li class="advantages-item">
            <div class="advantage-heder-part">
              <div class="sign-advantage">
                <img
                  class="sign-advantage-img"
                  src="<?= $advantages['src'] ?>"
                  alt="advantage sign" />
              </div>
              <h3 class="advantages-item-title"><?= getLangText($advantages['title']) ?></h3>
            </div>
            <p class="advantages-item-text"><?= getLangText($advantages['text']) ?> </p>
          </li>
        <?php
        }
        ?>

      </ul>
    </div>
  </section>
  <div class="regular-section-wrapper">
    <section class="container leadership regular-section">
      <h2 id="scout-leader" class="sub-title"><?= getLangText($texts["sub-title-third"]) ?></h2>
      <div class="invitation-wrapper second-invitation-wrapper">
        <div class="decorated-background third-decorated-background">
          <div class="decorated-background-first-part"></div>
          <div class="decorated-background-second-part"></div>
        </div>
        <div class="invitation-text-wrapper second-invitation-text-wrapper">
          <div class="invitation-text second-invitation-text">
            <?php
            foreach ($textsInvitation as $invitation) {
            ?>
              <p class="invitation-text-part"><?= getLangText($invitation['text']) ?></p>
            <?php
            }
            ?>

          </div>
        </div>
      </div>

      <div class="leadership-points-wrapper">
        <div class="leadership-text-wrapper">
          <h3 class="leadership-text-title"><?= getLangText($texts['leadership-text-title-first']) ?></h3>
          <div class="leadership-text">
            <?php
            foreach ($textsLeadershipChildren as $leadershipChildren) {
            ?>
              <p class="leadership-text-part"><?= getLangText($leadershipChildren['text-work-children']) ?></p>
            <?php
            }
            ?>
          </div>
        </div>
        <div class="leadership-img-wrapper">
          <img
            class="leadership-img"
            src="/images/join-us/work-with-children.jpg"
            alt="work with children" />
        </div>
      </div>
      <div
        class="leadership-points-wrapper second-leadership-points-wrapper">
        <div class="leadership-img-wrapper">
          <img
            class="leadership-img second"
            src="/images/join-us/join-us2.jpg"
            alt="work in organizational management" />
        </div>
        <div>
          <h3 class="leadership-text-title">
            <?= getLangText($texts['leadership-text-title-second']) ?>
          </h3>
          <div class="leadership-text">
            <?php
            foreach ($textsLeadershipManagement as $leadershipManagement) {
            ?>
              <p class="leadership-text-part"><?= getLangText($leadershipManagement['text-management']) ?></p>
            <?php
            }
            ?>

          </div>
        </div>
      </div>
      <div class="join-btn third-join-btn join-us-btn">
        <a
          href=" https://forms.gle/43KEMxAFQeGt545cA"
          class="join-link"
          target="_blank"><?= getLangText($texts["join-btn"]) ?>
        </a>
      </div>
    </section>
  </div>
</main>