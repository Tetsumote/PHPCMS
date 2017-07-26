<?php require_once('../../../private/initialize.php'); ?>
<?php
$menu_name = isset($_GET['menu_name']) ? $_GET['menu_name'] : '1';
//$id = $_GET['id'] ?? '1'; PHP > 7.0



?>
<?php $page_title = 'Show Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>



<div id="content">
	<a href="<?php echo url_for('/staff/pages/index.php');?>">&laquo; Back to List</a>


<div class="page show">
	Page name: <?php echo h($menu_name);?>
</div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php');?>