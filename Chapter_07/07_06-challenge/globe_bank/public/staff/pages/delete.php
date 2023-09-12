<?php require_once("../../../private/initialize.php"); ?>
<?php $page_title = "delete"; ?>
<?php include_once(SHARED_PATH . "/staff_header.php"); ?>

<?php 
if(!isset($_GET['id'])){
    redirect_to(url_for("/staff/pages/index.php"));
}
$id = $_GET['id'];
?>
<?php $page = find_page_by_id($id); ?>

<?php 
if (is_post_request()){
    delete_page($id);
}
?>

<div id = "content">
<a href="<?php echo url_for("/staff/pages/index.php"); ?>">&laquo; Back to list</a>
<h1>Delete Page</h1>
<p> Are you sure you want to delete this page? </p>
<p> <?php echo $page['menu_name']; ?></p>
<form action = <?php echo url_for("staff/pages/delete.php?id=" . h(u($id)))?> method="post">
    <div id = "operations">
        <input type = "submit" value = "Delete page" />
    </div>
</form>

</div>
<?php include_once(SHARED_PATH . "/staff_footer.php"); ?>
