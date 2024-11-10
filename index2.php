<!DOCTYPE html>
<html lang="ua">
<?php
    $requestUri = $_SERVER['REQUEST_URI']; 
    $fileName = basename(parse_url($requestUri, PHP_URL_PATH), ".php");
    include 'inc/utils.inc';
    $texts = getTexts('./pages/'.$fileName);
    $lang = getLang();
    echo getLangText($texts['meta']['title'], $lang) ;
?>    
  <head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YQ6LLZPXMY"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() { dataLayer.push(arguments); }
      gtag('js', new Date());

      gtag('config', 'G-YQ6LLZPXMY');
    </script>
    <link rel="canonical" href="https://ukrscout.org/"/>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="title" content="<?= 'a'?>"/>
    <meta name="description"
      content="Всеукраїнська молодіжна громадська організація заснована у 2007 році. Наша Місія – це сприяння вихованню молоді України за системою цінностей, заснованій на Скаутській Обіцянці та Скаутському Законі.">
    <title>Скаути України</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@600;700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./common.css"/>
    <link rel="stylesheet" href="./styles.css"/>
    <link rel="icon" href="./favicon.ico" type="image/icon type">
  </head>
  <body>
    <h1>Ласкаво просимо на мій простий вебсайт</h1>
    <nav>
        <a href="index.php">Головна</a>
        <a href="about.php">Про нас</a>
        <a href="contact.php">Контакти</a>
    </nav>
    <div>
        <?php
        // Отримуємо оригінальний URI запиту 
        $requestUri = $_SERVER['REQUEST_URI']; 
        
        // Витягуємо назву файлу з URI 
        
        $fileName = basename(parse_url($requestUri, PHP_URL_PATH), ".php");
        // Виводимо відповідний контент залежно від назви файлу
        switch ($fileName) {
            case 'about':
                echo '<h2>Про нас</h2><p>Це сторінка з інформацією про нас.</p>';
                break;
            case 'contact':
                echo '<h2>Контакти</h2><p>Це сторінка з нашими контактами.</p>';
                break;
            default:
                echo '<h2>Головна</h2><p>Це головна сторінка.</p>';
                break;
        }
        ?>
    </div>
</body>
</html>


