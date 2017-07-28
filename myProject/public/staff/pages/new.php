<?php 
require_once('../../../private/initialize.php'); 

$page_set = find_all_pages();
$page_count = mysqli_num_rows($page_set) + 1;
mysqli_free_result($page_set);

$page = [];
$page["position"] = $page_count;

?>
<?php $page_title = 'Create Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject new">
    <h1>Create Page</h1>

    <form action="<?php echo url_for('staff/pages/create.php'); ?>" method="post">
      <dl>
        <dt>Menu Name</dt>
        <dd><input type="text" name="menu_name" value="" /></dd>
      </dl>
      <dl>
      	<dt>Subject ID</dt>
      	<dd>
      		<select name="subject_id">
      			<option value="1">1</option>
      			<option value="2">2</option>
      			<option value="3">3</option>
      		</select>
      	</dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
             <?php
			  for($i=1; $i <= $page_count; $i++){
				  echo "<option value=\"{$i}\"";
				  if($page["position"] == $i){
					  echo " selected";
				  }
				  echo ">{$i}</option>";
			  }
			  ?>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1"/>
        </dd>
      </dl>
      <dl>
      	<dt>Content</dt>
      	<textarea name="content" id="content1" rows="4" cols="50"></textarea>
      </dl>
      <div id="operations">
        <input type="submit" value="Create Subject" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>