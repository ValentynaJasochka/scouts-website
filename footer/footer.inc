<?php
$items = include "texts-items.inc";
$textsFooter = include "texts.inc";
?>
<footer class="footer">
  <div class="footer-section">
    <svg class="footer-logo">
      <use href="./images/sprite-title-page.svg#<?= getLangText($textsFooter["logo"]) ?>"></use>
    </svg>

    <ul class="nav-footer-list">

      <?php
      foreach ($items as $item) {
      ?>
        <li>
          <h4 class="nav-footer-list-title"><?= getLangText($item["title"]) ?>:</h4>
          <ul>
            <?php
            foreach ($item["links"] as $link) {
            ?>
              <li
                class="nav-footer-list-items"
                <?= (isset($link['hidden']) and $link['hidden']) ? 'style="display:none"' : '' ?>>
                <a class="nav-footer-list-link" href="<?= $link["url"] ?>"><?= getLangText($link["text"]) ?></a>
              </li>
            <?php
            }
            ?>
          </ul>
        </li>
      <?php
      }
      ?>
    </ul>
    <ul class="social-media-footer-list">
      <li class="social-media-link">
        <a
          href="https://www.instagram.com/ukrscout"
          class="social-media-item"
          target="_blank">
          <svg class="social-media-item-icon">
            <use href="./images/sprite-title-page.svg#instagram"></use>
          </svg>
        </a>
      </li>
      <li class="social-media-link">
        <a
          href="https://www.facebook.com/ukrscout"
          class="social-media-item"
          target="_blank">
          <svg class="social-media-item-icon">
            <use href="./images/sprite-title-page.svg#facebook"></use>
          </svg>
        </a>
      </li>
      <li class="social-media-link">
        <a
          href="https://t.me/ukrscout"
          class="social-media-item"
          target="_blank">
          <svg class="social-media-item-icon">
            <use href="./images/sprite-title-page.svg#telegram"></use>
          </svg>
        </a>
      </li>
    </ul>
    <p class="donation-footer-text"><?= getLangText($textsFooter["questions"]) ?>
      <span class="email-text">secretariat@ukrscout.org</span>
    </p>
    <p class="footer-social-media-text">
      <?= getLangText($textsFooter["sign"]) ?>
    </p>
  </div>
</footer>
<script src="./js/init-header.js"></script>
<script src="./js/nav-menu.js"></script>
<script type="text/javascript">
  runMenu();
  runMenuMobile();
</script>