<?php

require_once('../../../private/initialize.php');

if(is_post_request()) {

    // Handle form values sent by new.php
  
    $pages['subject_id'] = $_POST['subject_id'] ?? '';
    $pages['menu_name']  = $_POST['menu_name'] ?? '';
    $pages['position']  = $_POST['position'] ?? '';
    $pages['visible'] = $_POST['visible'] ?? '';
    $pages['content'] = $_POST['content'] ?? '';
  
    insert_page($pages);
  }
  ?>