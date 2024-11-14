<?php
$textsTeam = include "texts-team.inc";
?>
<main>
  <div class="main-group">
    <div class="container team-section">
      <div class="main-title-container">
        <h1 class="main-title"><?= getLangText($texts["main-title"]) ?></h1>
      </div>
      <ul class="team-list">

        <?php
        foreach ($textsTeam as $member) {
        ?>

          <li class="team-member" <?= $member['display'] ?>>
            <div class="member-img-wrapper">
              <img class="member-img" src="<?= $member['src'] ?>" alt="" />
            </div>
            <div class="member-text-wrapper">
              <p class="name"><?= getLangText($member['name']) ?></p>
              <p class="member-position <?= $member['style'] ?>"><?= getLangText($member['position']) ?></p>
            </div>
          </li>
        <?php
        }
        ?>
      </ul>
      <div class="additional-text-wrapper">
        <p class="additional-text">
          <?= getLangText($texts["main-text"]) ?>
        </p>
      </div>
    </div>
  </div>
</main>