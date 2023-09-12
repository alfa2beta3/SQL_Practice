<?php require_once("../../private/initialize.php"); ?>
<?php $page_title = "GBI - Database Test"; ?>
<?php include_once(SHARED_PATH . "/staff_header.php"); ?>

<?php 
$query = 'SELECT * FROM `pages` WHERE 1';
$result = mysqli_query($db, $query);
while($pages[] = mysqli_fetch_assoc($result));?>

<div id = "content">
    <pre>
        <?php print_r($pages); ?>
    </pre>
</div>

<?php include_once(SHARED_PATH . "/staff_footer.php"); ?>