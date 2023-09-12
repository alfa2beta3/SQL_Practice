<?php

require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/subjects/index.php'));
}
$id = $_GET['id'];

$menu_name = '';
$position = '';
$visible = '';

  $subject = find_subject_by_id($id);

if(is_post_request()) {

  // Handle form values sent by new.php

  $menu_name = $_POST['menu_name'] ?? '';
  $position = $_POST['position'] ?? '';
  $visible = $_POST['visible'] ?? '';

  $sql= "UPDATE subjects ";
  $sql .= "SET menu_name = ";
  $sql .= "'" . $menu_name . "', ";
  $sql.= "position = ";
  $sql .= "'" . $position . "', ";
  $sql .= "visible = ";
  $sql .= "'" . $visible . "' ";
  $sql .= "WHERE id = ";
  $sql .= "'" . $id . "' ";
  $sql .= "LIMIT 1";
  $result = mysqli_query($db, $sql);

  if ($result){
    redirect_to(h(url_for("staff/subjects/show.php?id=" . $id)));
  }else{
    echo h($sql);
    db_disconnect($db);
    exit ("Update fail");
  }
}

?>

<?php $page_title = 'Edit Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject edit">
    <h1>Edit Subject</h1>

    <form action="<?php echo url_for('/staff/subjects/edit.php?id=' . h(u($id))); ?>" method="post">
      <dl>
        <dt>Menu Name</dt>
        <dd><input type="text" name="menu_name" value="<?php echo h($subject['menu_name']); ?>" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1"<?php if($subject['position'] == "1") { echo " selected"; } ?>>1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1"<?php if($subject['visible'] == "1") { echo " checked"; } ?> />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Subject" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
