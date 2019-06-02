<?php
session_start();
if(!isset($_SESSION['username']))
{	
 include"login.php";
 die();
}   

?>


<!DOCTYPE html>
<html>
<head> 
	<title></title>
	
	
	<link rel="stylesheet" type="text/css" href="Resource/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Resource/css/style.css">
	<link rel="stylesheet" type="text/css" href="Resource/css/animate.css">
	
	
</head>
<body>
	<!-- section sratt header-->
	<div class="container">
			<section class="header">
				<div class="row">
					<div class="col-md-6 wow bounceInDown"> <img src="Resource/images/logo.png"></div>
			        <div class='col-md-6'>
			           <p>
			        	  <span> welcome <?php echo $_SESSION['username'];?></span>

			              <a class='logout btn btn-danger btn-block' href='logout.php'>Logout</a>
			       </p>
			     </div>
				</div>
			
			</section>
		
			
			<!--End section header-->
			<!-- srart section conttent-->
			<section class='conttent'>
				<div class='row'>
					<div class='col-md-3 wow bounceInLeft' data-wow-duration='5s'>
					<ul>	
				    <li><a href="../index.php" class="btn btn-danger btn-block ">Home Pages</a></li>
					<li><a href="?pages=main" class="btn btn-danger btn-block ">Main Setting</a></li>
					<li><a href="?pages=section" class="btn btn-danger btn-block ">section</a></li>
					<li><a href="?pages=pages" class="btn btn-danger btn-block ">Pages</a></li>
					<li><a href="?pages=sub_pages" class="btn btn-danger btn-block ">Add News</a></li>
					<li><a href="?pages=comments" class="btn btn-danger btn-block ">Commments</a></li>
					<li><a href="?pages=library " class="btn btn-danger btn-block ">Library</a></li>
					<li><a href="?pages=banners" class="btn btn-danger btn-block ">Banners</a></li>
					</ul>
					
					
				</div>
				<div class="col-md-9">
					<?php
					if(isset($_GET['pages']))
					{
						$url=$_GET['pages'].".php";
						if(is_file($url))
						{
							 include $url;
						}
						else
						{
							echo"This  Page Not Found";
						}
                    
					}
					else
					{
						include"main.php";
					}
					?>
				</div>
				</div>
				
			</section>
			<!-- end section conttent-->
	</div>

<script type="text/javascript" src="Resource/js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="Resource/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Resource/js/wow.min.js"></script>
    <script type="text/javascript">
    	$(function(){
  new WOW().init(); 
});
    </script>
</body>
</html>