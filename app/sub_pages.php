<!--`id`, `subpages_name`, `subpages_content`, `subpages_status`, `subages_vistits`, `sub_pages_types`, `sub_pages_images`, `sub_pages-date`, `username`-->

<h5><a href="?pages=sub_pages&action=add">Add News</a></h5>
<?php
if($_POST OR @$_GET['action'])
{
if(isset($_POST['submit']) AND $_POST['submit']=='Add')
{
	$datapages['subpages_name']      =$_POST['subpages_name'];
	$datapages['subpages_content']   =$_POST['subpages_content'];
	$datapages['subpages_status']    =$_POST['subpages_status'];
	$datapages['sub_pages_types']    =$_POST['sub_pages_types'];
	$datapages['username']           =$_SESSION['username'];
	
	$datapages['subages_vistits']  =0;
	
	if(!empty($_FILES['sub_pages_images']['name'][0]))
	{
    try {
   	   $file=$_FILES['sub_pages_images'];
	   include"databases/upload.php";
	   $file=new upload($file,'Resource/upload/',1024000);
	   $file->UploadFile();
	   $datapages['sub_pages_images']=$file->getUrl(); 
       } catch (Exception $e) {
   	   echo "<h3 class='message'>".$e->getMessage()."</h3>";
   	   echo"<h3>The Data Failed To Add Try again </h3>";
   	   return;

        }

        }
        else
        {
           $datapages['pages_images']='Resource/upload/logo.png';	
        }
  
	try {
		include"databases/Add.php";
	    $res=new Add($datapages,'sub_pages'); 
	    if ($res==true) {
	    	echo "<script type='text/javascript'> alert('The data Add sucssfuly')</script>";
	    }
	} catch (Exception $e) {
		echo  $e->getMessage();
 }
}

if(isset($_GET['action']) AND $_GET['action']=='add')
{
	include"views/addsubpages.php";
}
if(isset($_GET['action']) AND $_GET['action']=='del')
{
	try {
		$id=$_GET['id'];
		include 'databases/delete.php';
	    $obj=New Delete('sub_pages');
	    $res=$obj->deleteRecordbyid($id);
		if($res==true)
		{
	     echo "<script type='text/javascript'> alert('The data Delete sucssfuly');history.back();</script>";
		}
    }catch (Exception $e) {
    echo "<h3 class='message'>{$e->getMessage()}</h3>";		
	}
	
}
if(isset($_GET['action']) AND $_GET['action']=='edit')
	{  
	    try {
			$id=@$_GET['id'];
			require_once"databases/displaydata.php";
	    	$obj=new Display('sub_pages');
		    $dataedit=$obj->getrecordbyid($id);

	        include"views/editsubpages.php";
		} catch (Exception $e) {
		echo "<h3 class='message'>{$e->getMessage()}</h3>";	
		}
		
  }

	if(isset($_POST['submit']) AND $_POST['submit']=='update')
	{
		
        $id=$_GET['id'];
		$datapageupdate['subpages_name']=$_POST['subpages_name'];
		$datapageupdate['subpages_content']=$_POST['subpages_content'];
		$datapageupdate['subpages_status']=$_POST['subpages_status'];
		$datapageupdate['sub_pages_types']=$_POST['sub_pages_types'];

		
	if(!empty($_FILES['sub_pages_images']['name'][0]))
	{	
    try {
   	   $file=$_FILES['sub_pages_images'];
	   include"databases/upload.php";
	   $file=new upload($file,'Resource/upload/',1024000);
	   $file->UploadFile();
	   $datapageupdate['sub_pages_images']=$file->getUrl(); 

       } catch (Exception $e) {
   	   echo "<h3 class='message'>".$e->getMessage()."</h3>";
   	   echo"<h3>The Data Failed To Add Try again </h3>";
   	   return;

        }

        }
        else
        {
           $datapageupdate['sub_pages_images']="Resource/upload/logo.jpg";

        }



		try {
			include"databases/update.php";
		$updatedata=new UPDATE('sub_pages');  
		$res=$updatedata-> UpdateRecord($datapageupdate,$id);
		if($res==true)
		{
			 echo "<script type='text/javascript'> alert('The data Update sucssfuly')</script>";
		}
		} catch (Exception $e) {
		   echo "<h3 class='message'>{$e->getMessage()}</h3>";	
		}
	}
}



else
{
	try {
		include"databases/displaydata.php";
		$obj=new Display('sub_pages');
		$datapages=$obj->getData();
		
		include"views/subpages.php";
	    } catch (Exception $e) {
echo "<h3 class='message'>".$e->getMessage()."</h3>";	
	}
	
}

?>
