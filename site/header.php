<?php
include'includes/function.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $data['site_name']?></title>



<link href="<?php  echo SITE?>css/reset-min.css" rel="stylesheet" type="text/css" />
<link href="<?php  echo SITE?>css/fonts-min.css" rel="stylesheet" type="text/css" />
<link href="<?php  echo SITE?>css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="app/Resource/css/animate.css">
<link rel="stylesheet" type="text/css" href="app/Resource/css/bootstrap.min.css">


</head>

<body>
<div id="wrapper">
	
    <div id="header">
    	
        <div id="logo"><img src="<?php  echo SITE?>images/logo.png"  width="285" height="118" 

            class='wow bounceInDown' data-wow-duration='2s'/></div>
        
        <div id="menu">
         	   		 		 	      		
            <ul>
            	<li><a href="http://localhost/oop/library/">Home Page</a></li>
            	<li><a href="">Our services</a></li>
            	<li><a href="">Portfolio</a></li>
            	<li><a href="">Contact Us</a></li>
            </ul>
        	
            <h1>Call us: +201016936293</h1>
            
       	  <div id="slinks">
           	<h1>Follow us:</h1>
            	<a href="<?php echo $data['fb']?>"><img src="<?php echo SITE;?>images/fb.png" width="31" height="31" class='wow flash' data-wow-duration='30s' /></a>
                <a href="<?php echo $data['twi']?>"><img src="<?php echo SITE;?>images/tw.png" width="31" height="31"  class='wow flash' data-wow-duration='30s'/></a>
                <a href="<?php echo $data['youtub']?>"><img src="<?php echo SITE;?>images/yt.png" width="31" height="31" class='wow flash' data-wow-duration='30s'/></a>
                <a href="#"><img src="<?php echo SITE;?>images/sk.png" width="35" height="35" class='wow flash' data-wow-duration='30s' /></a>
                <a href="#"><img src="<?php echo SITE;?>images/rss.png" width="31" height="31" class='wow flash' data-wow-duration='30s' /></a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="app/Resource/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="app/Resource/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="app/Resource/js/wow.min.js"></script>
        <script type="text/javascript">
        
              new WOW().init();
    </script>
     
</body>
</html>