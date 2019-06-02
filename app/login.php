<!DOCTYPE html>
<html>
<head>

	<title></title>

	<script type="text/javascript" src="Resource/js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="Resource/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="Resource/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Resource/css/log.css">
	
</head>
<body>
<div class='container'>
<div class='row'>
	<section class='register'>
		<div class='col-md-4'>
				<h2>Register</h2>
				<form method="post" action='logincontroller.php'>
				<div class='form-group'>
					<input type='text' name='name' required class='form-control' placeholder='name'>
				</div>
				<div class="form-group">
					<input type="text" name="username"  required class='form-control' placeholder="username">
				</div>
				<div class="form-group">
						<input type="email" name="email"  required class='form-control' placeholder="Email">
				</div>
				<div class='form-group'>
				<input type="password" name="password" required  class="form-control" placeholder='password'>
			    </div>
			    <div class='form-group'>
			    	<input type="submit" name='send' value='Register' class='btn btn-primary btn-block'>
			    </div>
				</form>
        </div>
  </section>
  <div class='col-md-4'></div>
   <!--start section login-->
<section>
	  <div class='col-md-4'>
	  	<h2>Sing in</h2>
	  	<form method="post" action="logincontroller.php">
	  		<div class='form-group'>
	  		<input type="email" name="email" class='form-control' placeholder="email" required="required">
	  	</div>
	  	<div class='form-group'>
	  		<input type="password" name="password" class='form-control'placeholder='password' required="required">
	  	</div>
	  	<div class='form-group'>
	  		<input type="submit"  name='submit' value='login' class="btn btn-danger btn-block">
	  	</div>
	  	</form>
	  </div>
</section>
   <!--End section log in-->
</div>
</div>	
</body>
</html>