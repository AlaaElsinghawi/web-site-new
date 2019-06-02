
<!--`id`, `subpages_name`, `subpages_content`, `subpages_status`, `subages_vistits`, `sub_pages_types`, `sub_pages_images`, `sub_pages-date`, `username`-->
<h4 class='message'>EditPage</h4>
<form method="post" action='' enctype="multipart/form-data">
	<div class='form-group'>
		<input type='text' name='subpages_name' class="form-control" value="<?php echo $dataedit['subpages_name']?>">
	</div>
	
	<div class="form-group">
		<select name='subpages_status'class='form-control'>
			<?php
			if($dataedit['subpages_status']=='active')
			{
				echo "<option value='active'>Active</option>
			      <option value='Inactive'>Inactive</option>
				";
			}
			else
			{
				echo "<option value='Inactive'>Inactive</option>
			    <option value='active'>Active</option>";
			  }
			?>
			
		</select>
	</div>
	<div class='form-group'>
		<select name="sub_pages_types" class="form-control">
	<option value="<?php echo $dataedit['sub_pages_types']?>"><?php echo $dataedit['sub_pages_types']?></option>
		<?php
		require_once"databases/displaydata.php";
		 $obj=new Display('pages');
		 $res=$obj->getData();
		   for($i=0;$i< count($res) ;$i++)
			 {
	            echo '<option value="'.$res[$i]['pages_name'].'">'.$res[$i]['pages_name'].'</option>';
			 }
		?>
		</select>
	</div>
	<div class='form-group'>
		<textarea name="subpages_content" class='form-control'><?php echo $dataedit['subpages_content']?></textarea>
	</div>
	<div class="form-group">
   <input type="file" name="sub_pages_images[]" value="<?php echo $dataedit['sub_pages_images']?>" id='image' multiple="" placeholder="Edit Image For Page" class="form-control">
		
	</div>
	<div class="form-group">
		<input type="submit" name="submit" value='update' class="btn btn-primary btn-block">
	</div>
</form>
	   




