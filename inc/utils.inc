<?php


function getLang()
{
  $lang = '';

  if (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
  }

  if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
  }

  if (in_array($lang, ['ukr', 'en'])) {
    return $lang;
  }

  return 'ukr';
}

function getValue($value, $key)
{
  return isset($value[$key]) ? $value[$key] : 'No text';
}

function getLangText($array)
{
  if (isset($array[getLang()])) {
    return $array[getLang()];
  }


  if (isset($array['ukr'])) {
    return $array['ukr'];
  }

  return 'No text';
}
