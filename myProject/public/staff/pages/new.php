<?php 
require_once('../../../private/initialize.php'); 

$page_set = find_all_pages();
$page_count = mysqli_num_rows($page_set) + 1;
mysqli_free_result($page_set);

$page = [];
$page["position"] = $page_count;
$page = find_page_by_id($page_count);
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
        <dt>Subject</dt>
        <dd>
          <select name="subject_id">
          <?php
            $subject_set = find_all_subjects();
            while($subject = mysqli_fetch_assoc($subject_set)) {
              echo "<option value=\"" . h($subject['id']) . "\"";
              if($page["subject_id"] == $subject['id']) {
                echo " selected";
              }
              echo ">" . h($subject['menu_name']) . "</option>";
            }
            mysqli_free_result($subject_set);
          ?>
          </select>
        </dd>
      </dl>
      <dl>
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