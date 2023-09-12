<?php

  require_once('db_credentials.php');
  require_once('initialize.php');

  function db_connect() {
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    db_is_connected();
    return $connection;
  }

  function db_disconnect($connection) {
    if(isset($connection)) {
      mysqli_close($connection);
    }
  }

  function  db_is_connected(){
    if(mysqli_connect_errno()){
      $error_msg = "error message: ";
      $error_msg .= mysqli_connect_error();
      $error_msg .= " (";
      $error_msg .= mysqli_connect_errno();
      $error_msg .= ") ";
      exit($error_msg);
    }
  }
?>
