<?php require_once("../../../private/initialize.php"); ?>

<?php

$menu_name = $_POST["menu_name"] ?? '';
$position = $_POST["position"] ?? '';
$visible = $_POST["visible"] ?? '';

if(is_post_request()){

    echo "Form parameters<br />";
    echo "Menu name: " . $menu_name . "<br />";
    echo "Position: " . $position . "<br />";
    echo "Visible: " . $visible . "<br />";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GBI - New</title>
</head>
<?php include(SHARED_PATH . "/staff_header.php"); ?>
<body>
    <div id = "content">
        <a class = "back-link" href = <?php echo url_for("/staff/pages/index.php"); ?>> &laquo; Back to List</a>
        <h1>Create Page</h1>
    <form id = "frm" action=<?php echo url_for('/staff/pages/new.php');?> method="post">
        <dl>
            <dt>Menu Name</dt>
            <dd><input type="text" name="menu_name" value=<?php echo h($menu_name); ?>></dd>
        </dl>
        <dl>
            <dt>Position</dt>
            <dd>
                <select name="position">
                    <option value="1">1</option>
                </select>
            </dd>
        </dl>
        <dl>
            <dt>Visible</dt>
            <dd><input type="hidden" name="visible" value="0"></dd>
            <dd><input type="checkbox" name="visible" value="1"></dd>
        </dl>
        <div id=operations>
            <input type="submit" value="Create Page">
        </div>
    </form>
    </div>
</body>
</html>

<?php include(SHARED_PATH . "/staff_footer.php"); ?>

