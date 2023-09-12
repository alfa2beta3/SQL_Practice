<?php

require_once('../../../private/initialize.php');

if(is_post_request()) {

  // Handle form values sent by new.php

  $menu_name = $_POST['menu_name'] ?? '';
  $position = $_POST['position'] ?? '';
  $visible = $_POST['visible'] ?? '';

  $query = "INSERT INTO subjects ";
  $query .= "(menu_name, position, visible) ";
  $query .= "VALUES (";
  $query .= "'" . $menu_name . "', ";
  $query .= "'" . $position . "', ";
  $query .= "'" . $visible . "'";
  $query .= ")";
  echo $query;
  mysqli_query($db, $query);

} else {
  redirect_to(url_for('/staff/subjects/new.php'));
}

?>
