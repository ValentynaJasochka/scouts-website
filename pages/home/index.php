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
        <h2 class="reviews-title">Відгуки про Скаутинг</h2>
        <ul class="reviews-list">
          <li class="reviews-stiled">
            <div class="reviews-item-styled first"></div>
            <div class="reviews-item">
              <p class="reviews-text">
                Для мене Скаутинг - це місце, де цікаво все: я знаходжу
                нових друзів, граю в активні ігри, дізнаюсь нове, подорожую
                та беру участь у таборах. А ще, я почала старанніше вчити
                англійську, бо вона потрібна на міжнародних івентах. Бути
                Скаутом захоплює!
              </p>
              <div class="reviews-individuo-wrapper">
                <div class="reviewer-photo-wrapper">
                  <img
                    class="reviewer-photo"
                    src="./images/about-us/Base-1.png"
                    alt="Поліна Прик" />
                </div>

                <div class="reviews-individuo">
                  <p class="reviewer-name">Поліна Прик</p>
                  <p class="reviewer-status">Скаут СО "Тотем"</p>
                </div>
              </div>
            </div>
            <div class="reviews-item-styled second"></div>
          </li>
          <li class="reviews-stiled">
            <div class="reviews-item-styled first"></div>
            <div class="reviews-item">
              <p class="reviews-text">
                Це дійсно унікальна можливість для саморозвитку та
                формування характеру. Я пишаюся дивовижними молодими людьми,
                які виросли з дітей моїх знайомих, що в НОСУ з дитинства.
                Мій син - у Скаутах, а дочка нещодавно стала Кабскаутом, і я
                не памʼятаю її щасливішою.
              </p>
              <div class="reviews-individuo-wrapper">
                <div class="reviewer-photo-wrapper">
                  <img
                    class="reviewer-photo"
                    src="./images/about-us/Base-2.jpg"
                    alt="Андрій Смиковський" />
                </div>

                <div class="reviews-individuo">
                  <p class="reviewer-name">Андрій Смиковський</p>
                  <p class="reviewer-status">Батько дітей-Скаутів</p>
                </div>
              </div>
            </div>
            <div class="reviews-item">
              <p class="reviews-text">
                В моєму патрулі - всі мої найкращі друзі! Я з нетерпінням
                чекаю кожної зустрічі, аби проводити час разом та
                дізнаватися нове.
              </p>
              <div class="reviews-individuo-wrapper">
                <div class="reviewer-photo-wrapper">
                  <img
                    class="reviewer-photo"
                    src="./images/about-us/Base-3.jpg"
                    alt="Єсенія Пономаренко" />
                </div>

                <div class="reviews-individuo">
                  <p class="reviewer-name">Єсенія Пономаренко</p>
                  <p class="reviewer-status">Кабскаут СО "Асгард"</p>
                </div>
              </div>
            </div>
            <div class="reviews-item-styled second"></div>
          </li>

          <li class="reviews-stiled">
            <div class="reviews-item-styled first"></div>
            <div class="reviews-item">
              <p class="reviews-text">
                На вихідних я завжди з посмішкою вирушаю до своєї Cкаутської
                групи, бо знаю, що на мене чекають. Популярний стереотип:
                "Скаутинг - це лише для дітей", однак мій досвід відкрив
                мені безцінні уроки, яких не змогли надати ані школа, ані
                університет, ані робота. Окрім цього, я відчуваю, що роблю
                внесок у формування майбутнього України — це надзвичайно
                важливо, особливо зараз. Сподіваюся, що все більше людей
                усвідомлюватимуть значущість цієї справи і приєднаються до
                нас.
              </p>
              <div class="reviews-individuo-wrapper">
                <div class="reviewer-photo-wrapper">
                  <img
                    class="reviewer-photo"
                    src="./images/about-us/Base-4.jpg"
                    alt="Анастасія Ратушняк" />
                </div>

                <div class="reviews-individuo">
                  <p class="reviewer-name">Анастасія Ратушняк</p>
                  <p class="reviewer-status">Скаут-лідер</p>
                </div>
              </div>
            </div>
            <div class="reviews-item-styled second"></div>
          </li>
        </ul>
      </div>
    </section>
    <section class="invitation">
      <div class="container invitation-section">
        <div class="invitation-information">
          <h2 class="invitation-title">
            Запрошуємо стати <br />
            Скаутом або Скаут-Лідером!
          </h2>
          <p class="invitation-text">
            Членом Національної Організації Скаутів України може стати
            кожний, незалежно від віку, походження, раси, гендеру чи
            віросповідання!
          </p>
          <a
            href="./join-us"
            class="subscribing-link subscribing-link-invitation">
            <img
              class="subscribing-link-icon"
              src="./images/btn-vector.png"
              width="30"
              height="30" />
            <p class="subscribing-link-text bottom">Приєднатись до нас</p>
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