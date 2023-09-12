<?php

require_once('../../../private/initialize.php');

$menu_name = '';
$subject_id = '';
$position = '';
$visible = '';
$content = '';

$subjects = find_all_subjects();
$pages = find_all_pages();
$subjects_count = mysqli_num_rows($subjects);
$pages_count = mysqli_num_rows($pages) + 1;
?>

<?php $page_title = 'Create Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

  <div class="page new">
    <h1>Create Page</h1>

    <form action="<?php echo url_for('/staff/pages/create.php'); ?>" method="post">
      <dl>
        <dt>Menu Name</dt>
        <dd><input type="text" name="menu_name" value="<?php echo h($menu_name); ?>" /></dd>
      </dl>
      <dl>
        <dt>Subject id</dt>
        <dd>
          <select name="subject_id">
          <?php for($i=1;$i<=$subjects_count;$i++){?>
            <option value=<?php echo $i ?><?php if($subject_id == $i) { echo " selected"; } ?>><?php echo $i ?></option>
            <?php }; ?>
          </select></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <?php for($i=1;$i<=$pages_count;$i++){?>
            <option value=<?php echo $i ?><?php if($position == "1") { echo " selected"; } ?>><?php echo $i ?></option>
            <?php }; ?>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1"<?php if($visible == "1") { echo " checked"; } ?> />
        </dd>
      </dl>
      <dl>
        <dt>Content</dt>
        <dd><input type="text" name="content" value="<?php echo $content ?>" /></dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Create Page" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
