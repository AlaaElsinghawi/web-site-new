<h4 class='message'>EditPage</h4>
<form method="POST" action='' enctype="multipart/form-data">
	<div class='form-group'>
		<input type='text' name='pages_name'  required class="form-control" value="<?php echo $dataedit['pages_name']?>">
	</div>
	<div class='form-group'>
		<textarea name="pages_content"  required class='form-control'><?php echo $dataedit['pages_content']?></textarea>
	</div>
	<div class="form-group">
		<select name='pages_status'class='form-control'>
			<?php
			if($dataedit['pages_status']=='active')
			{
				echo "<option value='active'>Active</option>
			      <option value='Inactive'>Inactive</option>
				";
			}
			else
				{echo "<option value='Inactive'>Inactive</option>
			      <option value='active'>Active</option>
			";}
			?>
			
		</select>
	</div>
	<div class='form-group'>
		<select name="pages_types" class="form-control">
	<option value="<?php echo $dataedit['pages_types']?>"><?php echo $dataedit['pages_types']?></option>
		<?php
		require_once"databases/displaydata.php";
		 $obj=new Display('section');
		 $res=$obj->getData();
		   for($i=0;$i< count($res) ;$i++)
			 {
	            echo "<option value=".$res[$i]['section_name'].">".$res[$i]['section_name']."</option>";
			 }
		?>
		</select>
	</div>
	<!--<div class="form-group">
		<input type="file" name="pages_images[]" multiple="" placeholder="Edit Image For Page" class="form-control">
		
	</div>-->
	<div class="form-group">
		<input type="submit" name="submit" value='update' class="btn btn-primary btn-block">
	</div>
</form>