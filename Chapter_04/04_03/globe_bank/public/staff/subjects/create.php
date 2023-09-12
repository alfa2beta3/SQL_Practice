<?php

// Handle form values sent by new.php

require_once("../../../private/initialize.php");

if (!request_is_post()){
    redirect_to(url_for("staff/subjects/new.php"));
    exit();
}

$menu_name = $_POST['menu_name'] ?? '';
$position = $_POST['position'] ?? '';
$visible = $_POST['visible'] ?? '';

echo "Form parameters<br />";
echo "Menu name: " . $menu_name . "<br />";
echo "Position: " . $position . "<br />";
echo "Visible: " . $visible . "<br />";

?>
