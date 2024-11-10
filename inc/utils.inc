 <?php
function getTexts($filePath) {
  $jsonData = file_get_contents($filePath . '/texts.json');
  $data = json_decode($jsonData, true);

  // Check if decoding was successful
  if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
      echo "Error decoding JSON: " . json_last_error_msg();
      return array();
  } else {
      return $data;
  }
}

function getLang() {
  return 'eng';
}

function getValue($value, $key) {
  return isset($value[$key]) ? $value[$key] : 'No text';
}
?>

