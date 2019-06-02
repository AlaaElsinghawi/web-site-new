<!--`id`, `subpages_name`, `subpages_content`, `subpages_status`, `subages_vistits`, `sub_pages_types`, `sub_pages_images`, `sub_pages-date`, `username`-->

<h4 class='title'>Add news</h4>
<form method="post" action='' enctype="multipart/form-data">
	<div class='form-group'>
		<label>Title News</label>
		<input type='text' name='subpages_name'  required class="form-control" placeholder="Write Title of News">
	</div>
	
	<div class="form-group">
		<label>News Status</label>
		<select name='subpages_status'class='form-control'>
			<option value='active'>active</option>
			<option value='Inactive'>Inactive</option>
		</select>
	</div>
	<div class='form-group'>
		<label>News Type</label>
		<select name="sub_pages_types" class="form-control">
			<option value='SectionName'>Pages Name</option>
			<?php
          include"databases/displaydata.php";
		 $obj=new Display('pages');
		 $res=$obj->getData();
		 for($i=0;$i< count($res) ;$i++)
		 {
            echo'<option value="'.$res[$i]['pages_name'].'">'.$res[$i]['pages_name'].'</option>';
		 }
		?>
		</select>
		
	</div>
	<div class='form-group'>
		<label>News Content</label>
		<textarea name="subpages_content"  required placeholder="Write content of News" class='form-control'></textarea>
	</div>
	<div class="form-group">
		<input type="file" name="sub_pages_images[]" required multiple="" placeholder="select Image For News" class="form-control">
		
	</div>
	<div class="form-group">
		<input type="submit" name="submit" value='Add' class="btn btn-primary btn-block">
	</div>
		

	
</form>