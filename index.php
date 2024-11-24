<!DOCTYPE html>
<?php
include "./inc/utils.inc";
$lang = getLang();
?>
<html lang="<?= $lang ?>">

<head>
    <?php

    $lang = getLang();

    $pageName = getAddress();

    if ($pageName == '' || $pageName == 'index' || $pageName == 'scouts-website') {
        $pageName = 'home';
    }

    $texts = [];
    if (file_exists(__DIR__ . "/pages/{$pageName}/texts.inc")) {
        $defaultTexts = include __DIR__ . "/pages/{$pageName}/texts.inc";
        $texts = array_merge($texts, $defaultTexts);
    } else {
        $texts = include __DIR__ . "/pages/404/texts.inc";
    }

    include "header/head-html.inc";
    // Include styles if they exist 
    $stylePath = "/pages/{$pageName}/styles.css";
    if (file_exists(__DIR__ . $stylePath)) {
    ?>
        <link rel="stylesheet" href="<?= $stylePath ?>" />
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

    include "footer/footer.inc";
    ?>
</body>

</html>