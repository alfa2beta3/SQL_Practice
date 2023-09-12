<?php require_once("../../../private/initialize.php"); ?>
<?php include_once(SHARED_PATH . "/staff_header.php"); ?>
<?php 
$query = "DELETE FROM pages WHERE `menu_name` = 'junk'";
mysqli_query($db, $query);
?>
<div id = "content" >
</div>
<?php include_once(SHARED_PATH . "/staff_footer.php");?>