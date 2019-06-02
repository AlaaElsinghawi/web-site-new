<form method='post'action="">
	<label>section name</label>
		<div class='form-group'>
		
			<input type='text' name='section_name' required value="<?php echo $res['section_name'];?>" class='form-control'>
		</div>

		<div class='form-group'>
			<label>section status</label>
			<select class="form-control" name='section_status'>
				<?php
				if($res['section_status']=='Active') 
				{
					echo"
                       <option value='Active'>Active</option>
				       <option value='Inactive'>Inactive</option>

					";
				}
				else
				{echo" <option value='Inactive'>Inactive</option>
                       <option value='Active'>Active</option>";}
				?>
				
			</select>
		</div>

		<div class="form-group">
			<label>section Location</label>
			<select name='section_location' class='form-control'>
				<?php

                   if($res['section_location']=='body')
                   {
                   	echo"<option value='body'>body</option>
				        <option value='side'>side</option>";
                   }
                   else
                   {
                   	   echo"
                   	   <option value='side'>side</option>
                   	   <option value='body'>body</option>"
				        ;
                   }
				?>
				
			</select>
		</div>

		<div class='form-group'>
			<label>section description</label>
<textarea name='sectiom_description' required class='form-control'><?php echo $res['sectiom_description'];?></textarea>
		</div>
		<div class='form-group'>
			<input type="hidden" name="username" value=<?php echo $_SESSION['username']?>>
		</div>
		<div class='form-group'>
			<input type="hidden" name="id" value="<?php echo $_GET['id']?>">
		</div>
		<div class='form-group'>
			<input type="submit" name="update" value="Edit" class='btn btn-primary btn-block'>
		</div>
		
</form>