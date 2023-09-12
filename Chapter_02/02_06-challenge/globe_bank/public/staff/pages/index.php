<?php require_once("../../../private/initialize.php"); ?>
<?php $page_title = 'Pages'; ?>
<?php require(SHARED_PATH . "/staff_header.php"); ?>

<?php 

$pages = [
  ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'About Globe Bank'],
  ['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'Consumer'],
  ['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Small Business'],
  ['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Commercial'],
];

?>

<!doctype html>

<html lang="en">
  <head>
    <title></title>
    <meta charset="utf-8">
  </head>

  <body>
    <div id = content>
      <div id = list class = "pages listing">
        <h2>
          Pages
        </h2>
        <!-- point to class in the stylesheet -->
        <table class="list"> 
          <tr>
            <th>ID</th>
            <th>Position</th>
            <th>Visible</th>
            <th>Name</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
          </tr>

          <?php 
            foreach($pages as $page){
          ?>
          <tr>
            <td><?php echo h($page['id']); ?></td>
            <td><?php echo h($page['position']); ?></td>
            <td><?php echo ($page['visible'])?'true':'false'; ?></td>
            <td><?php echo h($page['menu_name']); ?></td>
            <td><a href= <?php echo h((url_for("staff/pages/show.php?id=") . $page['id'])); ?>>View</a></td>
            <td><a href="show.php">Edit</a></td>
            <td><a href="show.php">Delete</a></td>
          </tr>
          <?php } ?>
        </table>
        </div>
    </div>
  </body>
</html>

<?php require(SHARED_PATH . "/staff_footer.php"); ?>
