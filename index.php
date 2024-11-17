<!DOCTYPE html>
<html lang="ua">

<head>
    <?php
    include "./inc/utils.inc";

    if (isset($_GET["lang"])) {
        setcookie("lang", $_GET["lang"]);
    }

    $requestUri = $_SERVER['REQUEST_URI'];
    $fileName = basename(parse_url($requestUri, PHP_URL_PATH), ".php");

    $uri = strtok($requestUri, '?');
    $pageName = basename($uri, ".php");


    if ($pageName == 'index' || $pageName == 'scouts-website' || $pageName == '') {
        $pageName = 'home';
    }

    $texts = [];
    if (file_exists(__DIR__ . "/pages/{$pageName}/texts.inc")) {
        $defaultTexts = include __DIR__ . "/pages/{$pageName}/texts.inc";
        $texts = array_merge($texts, $defaultTexts);
    } else {
        $NoPageTexts = include __DIR__ . "/pages/404/texts.inc";
        $texts = array_merge($texts, $NoPageTexts);
    }

    include "header/head-html.inc";

    if (file_exists(__DIR__ . "/pages/{$pageName}/styles.css")) {
    ?>
        <link rel="stylesheet" href="<?= "./pages/{$pageName}/styles.css" ?>" />
    <?php

    }
    ?>

</head>

<body>
    <?php
    include "header/header.php";

    $pageFile = __DIR__ . "/pages/{$pageName}/index.php";

    if (file_exists($pageFile)) {
        include $pageFile;
    } else {
        include __DIR__ . "/pages/404/index.php";
    }

    include "footer/footer.inc"
    ?>
</body>

</html>