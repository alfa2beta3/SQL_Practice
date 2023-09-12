<?php require_once('../../../private/initialize.php'); ?>

<?php

$id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = $_GET['id'] ?? '1'; // PHP > 7.0

echo htmlspecialchars($id) . "<br/>";

?>

<a href = <?php echo url_for("staff/subjects/show.php?name=") . urlencode("John Doe")?>>link</a><br/>
<!-- send a parameter with 2 values -->
<a href = <?php echo url_for("staff/subjects/show.php?company=") . urlencode("Widgets&More")?>>link</a><br/> 
<!-- reserved parameters -->
<a href = <?php echo url_for("staff/subjects/show.php?query=") . urlencode("!#*?")?>>link</a><br/>
