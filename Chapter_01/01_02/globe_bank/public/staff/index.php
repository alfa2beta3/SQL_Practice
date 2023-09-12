<?php 
    define("STAFF_PATH", dirname(__FILE__)); 
    define("PUBLIC_PATH", dirname(STAFF_PATH));
    define("PROJECT_PATH", dirname(PUBLIC_PATH));
?>

<?php require_once(PROJECT_PATH . "/private/initialize.php"); ?>

<?php include(PROJECT_PATH . "/private/shared/staff_show.php"); ?>

<script>
  let tag = "<div><?php hello(); ?></div>";
  document.getElementById("content").innerHTML += tag + '<br/>';
</script>