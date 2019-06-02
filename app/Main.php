<?php
if(isset($_POST['save'])=='save')
{
	//site_name`, `site_url`, `site_description`, `site_email`, `site_tages`, `site_homepanel`, `fb`, `twi`, `youtub`, `services
	$data['site_name']=$_POST['site_name'];
	$data['site_url']=$_POST['site_url'];
	$data['site_description']=$_POST['site_description'];
	$data['site_email']=$_POST['site_email'];
	$data['site_tages']=$_POST['site_tages'];
	$data['site_homepanel']=$_POST['site_homepanel'];
	$data['fb']=$_POST['fb'];
	$data['twi']=$_POST['twi'];
	$data['youtub']=$_POST['youtub'];
	$data['services']=$_POST['services'];
	include"databases/Add.php";  
	try {
		 $site=new Add($data ,'main_setting');
		 if($site=true)
		 {
		 	echo "data saved";
		 }
	} catch (Exception $e) {
		
		echo $e->getMessage();
	}
	

}
else
{
	include"views/mainsetting.php";

}


?>
	
	