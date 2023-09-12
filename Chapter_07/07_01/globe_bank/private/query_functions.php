<?php

  function find_all_subjects() {
    global $db;

    $sql = "SELECT * FROM subjects ";
    $sql .= "ORDER BY position ASC";
    //echo $sql;
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
  }

  function find_all_pages() {
    global $db;

    $sql = "SELECT * FROM pages ";
    $sql .= "ORDER BY subject_id ASC, position ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
  }

  function find_subject_by_id($id){
    global $db;

    $query = "SELECT * FROM `subjects` ";
    $query .= "WHERE  `id` = '$id'";
    $result_set = mysqli_query($db, $query);
    $subject = mysqli_fetch_assoc($result_set);
    mysqli_free_result($result_set);
    return $subject;
  }

?>
