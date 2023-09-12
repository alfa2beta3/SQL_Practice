<?php require_once('../../../private/initialize.php'); ?>

<?php
// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = $_GET['id'] ?? '1'; // PHP > 7.0
?>

<?php $page_title = 'Show Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<?php
$pages = find_page_by_id($id); 
?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

  <div class="page show">

    <h1>Page Name: <?php echo h($pages['menu_name']); ?></h1>
    <dl>
      <dt>Subject ID</dt>
      <dd><?php echo h($pages['subject_id']); ?></dd>
    </dl>
    <dl>
      <dt>Menu Name</dt>
      <dd><?php echo h($pages['menu_name']); ?></dd>
    </dl>
    <dl>
      <dt>Position</dt>
      <dd><?php echo h($pages['position']); ?></dd>
    </dl>
    <dl>
      <dt>Visible</dt>
      <dd><?php echo h($pages['visible']?'true':'false'); ?></dd>
    </dl>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
