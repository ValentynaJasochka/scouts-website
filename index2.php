<!DOCTYPE html>
<html lang="ua">

<head>
    <?php
    include "./inc/utils.inc";
    $requestUri = $_SERVER['REQUEST_URI'];
    $fileName = basename(parse_url($requestUri, PHP_URL_PATH), ".php");

    $uri = strtok($requestUri, '?');
    $pageName = basename($uri, ".php");


    if ($pageName == 'index' || $pageName == 'scouts-website' || $pageName == '') {
        $pageName = 'home';
    }

    if (isset($_GET["lang"])) {
        setcookie("lang", $_GET["lang"]);
    }

    $lang = getLang();
    
    $texts = [];
    if (file_exists(__DIR__ . "/pages/{$pageName}/texts-ukr.inc")) {
        $defaultTexts = include __DIR__ . "/pages/{$pageName}/texts-ukr.inc";
        $texts = array_merge($texts, $defaultTexts);
    }
    
    $langFile = __DIR__ . "/pages/{$pageName}/texts-{$lang}.inc";

    if (file_exists($langFile)) {
        $langTexts = include $langFile;
        $texts = array_merge($texts, $langTexts);
    } 


    include "head-html.inc";
    ?>
    <link rel="stylesheet" href="<?= "./pages/{$pageName}/styles.css" ?>" />

</head>

<body>
    <?php
    include "header.inc";

    $pageFile = __DIR__ . "/pages/{$pageName}/index.php";

    if (file_exists($pageFile)) {
        include $pageFile;
    } else {
        include __DIR__ . "/404.php"; // Default to English if the file doesn't exist 
    }

    include "footer.inc"
    ?>
</body>

</html>