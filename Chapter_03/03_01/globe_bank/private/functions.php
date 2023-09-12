<?php

function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

function u($string="") {
  return urlencode($string);
}

function raw_u($string="") {
  return rawurlencode($string);
}

function h($string="") {
  return htmlspecialchars($string);
}

function error_404() { //modify header to show 404 Not found
  header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
  exit();
}

function error_500() { //modify header to show Server error
  header($_SERVER["SERVER_PROTOCOL"] . " Server Error");
  exit();
}

function redirect_to($location) {
  header("Location: " . $location);
}

?>
