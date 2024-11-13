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
              <h3 class="regular-block-text-title"><?= $history['dates'] ?></h3>
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

      
        <div class="regular-block-wrapper">
          <div class="regular-block-img-wrapper">
            <img
              class="regular-block-points-img"
              src="./images/scouting-history/photo5.jpg"
              alt="" />
          </div>
          <div class="regular-block-text-wrapper">
            <h3 class="regular-block-text-title">1945 – 1980</h3>
            <div class="regular-block-text">
              <p class="regular-block-text-part regular-block-text-bold">Еволюція Скаутингу </p>
              <p class="regular-block-text-part">
                <span class="regular-block-text-bold">1947:</span> Всесвітня
                Організація Скаутського Руху отримала загальний консультативний
                статус при Економічній і Соціальній Раді Організації Об’єднаних
                Націй (ЮНЕСКО).
              </p>
              <p class="regular-block-text-part">
                <span class="regular-block-text-bold">1960-1980:</span> Багато країн
                здобули незалежність, в результаті чого Національні Скаутські
                Організації приєдналися або знову стали членами Всесвітньої
                Організації Скаутського Руху.
              </p>
              <p class="regular-block-text-part">
                <span class="regular-block-text-bold">1980-2007:</span> Скаутинг
                відродився в усіх країнах, де він існував до Другої світової
                війни, а також у нових незалежних країнах Співдружності
                Незалежних Держав після закінчення холодної війни. Скаутинг у
                країнах, що розвиваються, поступово перетворився на молодіжну
                програму, яка була розроблена місцевими Скаутськими лідерами для
                кращого задоволення потреб своїх громад. Скаути стали більш
                залученими до вирішення соціальних, економічних та екологічних
                питань у своїх громадах та країнах.
              </p>
            </div>
          </div>
        </div>
        <div class="regular-block-wrapper">
          <div class="regular-block-img-wrapper">
            <img
              class="regular-block-points-img"
              src="./images/scouting-history/photo6.jpg"
              alt="" />
          </div>
          <div class="regular-block-text-wrapper">
            <h3 class="regular-block-text-title">2007</h3>
            <div class="regular-block-text">
              <p class="regular-block-text-part regular-block-text-bold">Століття Скаутингу</p>
              <p class="regular-block-text-part">
                Скаутський рух відсвяткував своє
                <span class="regular-block-text-bold">100-річчя,</span> повернувшись
                до свого коріння у Великій Британії на 21-й Всесвітнє Скаутське
                Джамборі.
              </p>
              <p class="regular-block-text-part">
                1 серпня мільйони Скаутів з усього світу відсвяткували створення
                Скаутського Руху та його зростання від скромних початків до
                глобального Руху з мільйонами членів майже в кожній країні
                світу.
              </p>
            </div>
          </div>

        </div>
        <div class="regular-block-wrapper">
          <div class="regular-block-img-wrapper">
            <img
              class="regular-block-points-img"
              src="./images/scouting-history/photo7.jpg"
              alt="" />
          </div>
          <div class="regular-block-text-wrapper">
            <h3 class="regular-block-text-title">2010 – 2020</h3>
            <div class="regular-block-text">
              <p class="regular-block-text-part regular-block-text-bold">
                Сприяння миру і сталости
              </p>
              <p class="regular-block-text-part">
                Скаутинг продовжував розширювати своє членство, охоплюючи навіть
                віддалені острови в Тихому океані та Карибському басейні,
                одночасно впроваджуючи інновації та адаптуючи свої освітні
                пропозиції відповідно до сучасних потреб та прагнень молоді.
              </p>
              <p class="regular-block-text-part">
                <span class="regular-block-text-bold">2011:</span> Ініціатива “Посланці
                миру” була створена для сприяння розбудови миру та підтримки
                впливу Скаутингу на місцеві громади.
              </p>
              <p class="regular-block-text-part">
                <span class="regular-block-text-bold">2018:</span> Започатковано
                ініціативу “Скаути за Цілі Сталого Розвитку (ЦСР)” з метою
                залучення Скаутського Руху до найбільшого у світі
                скоординованого внеску молоді у досягнення ЦСР.
              </p>
              <p class="regular-block-text-part">
                <span class="regular-block-text-bold">2020:</span> Створено глобальну
                молодіжну спільноту “Earth Tribe”, що об’єднує молодь для
                природоохоронної діяльности та надання можливости молодим людям
                боротися з наслідками зміни клімату.
              </p>
            </div>
          </div>
        </div>
        <div class="regular-block-wrapper">
          <div class="regular-block-img-wrapper">
            <img
              class="regular-block-points-img"
              src="./images/scouting-history/photo8.jpg"
              alt="" />
          </div>
          <div class="regular-block-text-wrapper">
            <h3 class="regular-block-text-title">2020 – 2022</h3>
            <div class="regular-block-text">
              <p class="regular-block-text-part regular-block-text-bold">Всесвітня пандемія</p>
              <p class="regular-block-text-part">
                <span class="regular-block-text-bold">2020-2022:</span> Скаути по
                всьому світу продемонстрували стійкість Руху, вживаючи заходів
                для підтримки своїх громад та адаптуючись до глобальних обмежень
                через віртуальні програми. 
              </p>
              <p class="regular-block-text-part">
                <span class="regular-block-text-bold">2022:</span> Ініціатива
                “Глобальна мобілізація молоді” (Global Youth Mobilisation) була
                започаткована з метою підтримки розвитку молоді у
                постпандемічному світі. Це партнерство з Великою шісткою
                молодіжних організацій, до якої входять Всесвітня Організація
                Скаутського Руху (WOSM), Всесвітня Асоціація дівчат-Гайдів та
                дівчат-Скаутів (WAGGGS), Всесвітній альянс християнських
                асоціацій молодих чоловіків (YMCA), Всесвітня християнська
                асоціація молодих жінок (YWCA), Міжнародна федерація товариств
                Червоного Хреста і Червоного Півмісяця, (IFRC) а також
                Міжнародна премія герцога Единбурзького (DofE).
              </p>
            </div>
          </div>

        </div>
        <div class="regular-block-wrapper">
          <div class="regular-block-img-wrapper">
            <img
              class="regular-block-points-img"
              src="./images/scouting-history/photo9.jpg"
              alt="" />
          </div>
          <div class="regular-block-text-wrapper">
            <h3 class="regular-block-text-title">2022- Сьогодення</h3>
            <div class="regular-block-text">
              <p class="regular-block-text-part regular-block-text-bold">Еволюція Скаутингу</p>
              <p class="regular-block-text-part">
                Після пандемії COVID-19 Всесвітня Організація Скаутського Руху
                продовжила розвивати нову стратегію, щоб краще відповідати на
                виклики сучасного світу та потреби молоді. Одним з головних
                напрямів розвитку є залучення більшої кількості молоді до
                Скаутингу та збільшення різноманітності членства, включаючи
                більш ефективну роботу з молоддю з малозабезпечених та вразливих
                груп.
              </p>
              <p class="regular-block-text-part">
                Крім того, Скаути активно співпрацюють з урядами та іншими
                громадськими організаціями для реалізації Цілей сталого розвитку
                ООН та підтримки збереження навколишнього середовища.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="additional-text">
        <p class="additional-text-part">
          Хочеш дізнатися більше про історію Скаутів України?
        </p>
        <a class="additional-text-history-link" href="./our-history"> Переходь за посиланням!
        </a>
      </div>
    </div>
  </div>
</main>