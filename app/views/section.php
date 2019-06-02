
<h4 class='title'>add New section</h4>
<form method='post' action="">
	
		<div class='form-group'>
		    <label>section Name</label>
			<input type='text' name='section_name' class="form-control" required>
		</div>

		<div class='form-group'>
			<label>section Status</label>
			<select class="form-control" name='section_status'>
				<option value='Active'>Active</option>
				<option value='Inactive'>Inactive</option>
			</select>
		</div>

		<div class="form-group">
			<label>section Location</label>
			<select name='section_location' class='form-control' placeholder='select section Location'>
				<option value='body'>body</option>
				<option value='side'>side</option>
			</select>
		</div>

		<div class='form-group'>
			<label>section description</label>
			<textarea name='sectiom_description' class='form-control' required placeholder="write section description"></textarea>
		</div>
		<div class='form-group'>
			<input type="hidden" name="username" value=<?php echo $_SESSION['username']?>>
		</div>
		<div class='form-group'>
			<input type="submit" name="send" value="Add" class='btn btn-primary btn-block'>
		</div>
		
</form>