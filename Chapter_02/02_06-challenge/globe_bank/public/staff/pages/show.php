<?php require_once('../../../private/initialize.php'); ?>

<?php

// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = $_GET['id'] ?? '1'; // PHP > 7.0

echo h($id);

?>

<a href="index.php">Back to list</a><br/>
<a href="show.php?name=<?php echo h(u('John Doe')); ?>">Link</a><br />
<a href="show.php?company=<?php echo h(u('Widgets&More')); ?>">Link</a><br />
<a href="show.php?query=<?php echo h(u('!#*?')); ?>">Link</a><br />
