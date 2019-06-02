<h4 class='title'>Add new Page</h4>
<form method="post" action='' enctype="multipart/form-data">
	<div class='form-group'>
		<label>Page Name</label>
		<input type='text' name='pages_name' class="form-control" placeholder="Write Name of page">
	</div>
	
	<div class="form-group">
		<label>Page Status</label>
		<select name='pages_status'class='form-control'>
			<option value='active'>active</option>
			<option value='Inactive'>Inactive</option>
		</select>
	</div>
	<div class='form-group'>
		<label>section Name</label>
		<select name="pages_types" class="form-control">
			<option value='SectionName'>Section Name</option>
			<?php
          include"databases/displaydata.php";
		 $obj=new Display('section');
		 $res=$obj->getData();
		 for($i=0;$i< count($res) ;$i++)
		 {
            echo"<option value=".$res[$i]['section_name'].">".$res[$i]['section_name']."</option>";
		 }
		?>
		</select>
		
	</div>
	<!--<div class="form-group">
		<input type="file" name="pages_images[]" multiple="" placeholder="select Image For Page" class="form-control">
		
	</div>-->
	<div class='form-group'>
		<label>Page Content</label>
		<textarea name="pages_content" placeholder="Write content of page" class='form-control'></textarea>
	</div>
	<div class="form-group">
		<input type="submit" name="submit" value='Add' class="btn btn-primary btn-block">
	</div>
		

	
</form>