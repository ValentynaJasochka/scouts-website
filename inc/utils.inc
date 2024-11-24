<?php


function getLang()
{
  // Extract language from the URL
  $requestUri = $_SERVER['REQUEST_URI'];
  $segments = explode('/', trim($requestUri, '/'));
  $lang = 'ua';

  // Default language
  if (in_array($segments[0], ['en', 'ua'])) {
    $lang = array_shift($segments);
  }

  return $lang;
}

function getAddress()
{
  // Extract language from the URL
  $requestUri = $_SERVER['REQUEST_URI'];
  $segments = explode('/', trim($requestUri, '/'));

  if (in_array($segments[0], ['en', 'ua'])) {
    array_shift($segments);
  }

  return implode('/', $segments);
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


  if (isset($array['ua'])) {
    return $array['ua'];
  }

  return 'No text';
}
