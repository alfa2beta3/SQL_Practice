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

  function find_subject_by_id($id) {
    global $db;

    $sql = "SELECT * FROM subjects ";
    $sql .= "WHERE id='" . $id . "'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $subject = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $subject; // returns an assoc. array
  }

  function insert_subject($subject) {
    global $db;

    $sql = "INSERT INTO subjects ";
    $sql .= "(menu_name, position, visible) ";
    $sql .= "VALUES (";
    $sql .= "'" . $subject['menu_name'] . "',";
    $sql .= "'" . $subject['position'] . "',";
    $sql .= "'" . $subject['visible'] . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    // For INSERT statements, $result is true/false
    if($result) {
      return true;
    }
      // INSERT failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
  }

  function update_subject($subject) {
    global $db;

    $sql = "UPDATE subjects SET ";
    $sql .= "menu_name='" . $subject['menu_name'] . "', ";
    $sql .= "position='" . $subject['position'] . "', ";
    $sql .= "visible='" . $subject['visible'] . "' ";
    $sql .= "WHERE id='" . $subject['id'] . "' ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);
    // For UPDATE statements, $result is true/false
    if($result) {
      return true;
    }
      // UPDATE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
  }

  function delete_subject($id) {
    global $db;

    $sql = "DELETE FROM subjects ";
    $sql .= "WHERE id='" . $id . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);

    // For DELETE statements, $result is true/false
    if($result) {
      return true;
    }
      // DELETE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
  }

  function find_all_pages() {
    global $db;

    $sql = "SELECT * FROM pages ";
    $sql .= "ORDER BY subject_id ASC, position ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
  }

  function find_page_by_id($id) {
    global $db;

    $sql = "SELECT * FROM pages ";
    $sql .= "WHERE id=";
    $sql .= "'" . $id . "'";
    $pages_set = mysqli_query($db, $sql);
    confirm_result_set($pages_set);
    $pages = mysqli_fetch_assoc($pages_set);
    mysqli_free_result($pages_set);
    return $pages;
  }

  function insert_page($page) {
    global $db;

    $sql = "INSERT INTO pages ( ";
    $sql .= "`subject_id`,  ";
    $sql .= "`menu_name`,  ";
    $sql .= "`position`,  ";
    $sql .= "`visible`,  ";
    $sql .= "`content`";
    $sql .= ") VALUES (";
    $sql .= "'" . $page['subject_id'] . "', ";
    $sql .= "'" . $page['menu_name'] . "', ";
    $sql .= "'" . $page['position'] . "', ";
    $sql .= "'" . $page['visible'] . "', ";
    $sql .= "'" . $page['content'] . "'";
    $sql .= ")";

    $result = mysqli_query($db, $sql);
    $new_id = mysqli_insert_id($db);
    if($result){
      redirect_to(h(url_for("staff/pages/show.php?id=$new_id")));
    }
    db_disconnect($db);
    exit("Insert fail");
    }

  function update_page($page) {
    global $db;
    $sql = "UPDATE pages SET ";
    $sql .= "`subject_id` = ";
    $sql .= "'" . $page['subject_id'] . "', ";
    $sql .= "`menu_name` = ";
    $sql .= "'" . $page['menu_name'] . "', ";
    $sql .= "`position` = ";
    $sql .= "'" . $page['position'] . "', ";
    $sql .= "`visible` = ";
    $sql .= "'" . $page['visible'] . "' ";
    $sql .= "WHERE id = ";
    $sql .= "'" . $page['id'] . "'";

    $new_id =  $page['id'];
  
    echo $sql;
  
    $result = mysqli_query($db, $sql);
    if ($result){
      redirect_to(h(url_for("/staff/pages/show.php?id=$new_id")));
    }
    db_disconnect($db);
    exit("update fail");
  }

  function delete_page($id) {
    global $db;
    $sql = "DELETE FROM pages ";
    $sql .= "WHERE `id`=";
    $sql .= "'" . $id . "' ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);
    if($result){
        redirect_to(h(url_for("/staff/pages/index.php")));
    }
    db_disconnect($db);
    exit('Delete fail');
  }
?>
