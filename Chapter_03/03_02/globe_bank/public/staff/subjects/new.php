<?php

require_once('../../../private/initialize.php');

$test = $_GET['test'] ?? '';

if($test == '404') {
  error_404();
} elseif($test == '500') {
  error_500();
} else {
  // echo 'No error';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action = "index.php" id="frm" >
    <label for "name">name</label>
    <input type = "text" id = "name">

  </form>
</body>
</html>