<!--
`pages_id`, `pages_name`, `pages_content`, `pages_status`, `pages_vistits`, `pages_types`, `pages_images`, `pages-date

-->

<h5><a href="?pages=pages&action=add">Add New pages</a></h5>
<?php
if($_POST OR @$_GET['action'])
{
if(isset($_POST['submit']) AND $_POST['submit']=='Add')
{
	$datapages['pages_name']     =$_POST['pages_name'];
	$datapages['pages_content']  =$_POST['pages_content'];
	$datapages['pages_status']   =$_POST['pages_status'];
	$datapages['pages_types']    =$_POST['pages_types'];
	$datapages['username']       =$_SESSION['username'];
	
	$datapages['pages_vistits']  =0;
	
	/*if(!empty($_FILES['pages_images']['name'][0]))
	{
    try {
   	   $file=$_FILES['pages_images'];
	   include"databases/upload.php";
	   $file=new upload($file,'Resource/upload/',1024000);
	   $file->UploadFile();
	   $datapages['pages_images']=$file->getUrl(); 
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
  */
	try {
		include"databases/Add.php";
	    $res=new Add($datapages,'pages'); 
	    if ($res==true) {
	    	echo "<script type='text/javascript'> alert('The data Add sucssfuly')</script>";
	    }
	} catch (Exception $e) {
		echo  $e->getMessage();
 }
}

if(isset($_GET['action']) AND $_GET['action']=='add')
{
	include"views/addnewpage.php";
}
if(isset($_GET['action']) AND $_GET['action']=='del')
{
	try {
		$id=$_GET['id'];
		include 'databases/delete.php';
	    $obj=New Delete('pages');
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
	    	$obj=new Display('pages');
		    $dataedit=$obj->getrecordbyid($id);
	        include"views/pagesedit.php";
		} catch (Exception $e) {
		echo "<h3 class='message'>{$e->getMessage()}</h3>";	
		}
		
  }
	if(isset($_POST['submit']) AND $_POST['submit']=='update')
	{
		/*`pages_id`, `pages_name`, `pages_content`, `pages_status`, `pages_vistits`, `pages_types`, `pages_images`, `pages-date*/
        $id=$_GET['id'];
		$datapageupdate['pages_name']=$_POST['pages_name'];
		$datapageupdate['pages_content']=$_POST['pages_content'];
		$datapageupdate['pages_status']=$_POST['pages_status'];
		$datapageupdate['pages_types']=$_POST['pages_types'];
		
	/*if(!empty($_FILES['pages_images']['name'][0]))
	{	
    try {
   	   $file=$_FILES['pages_images'];
	   include"databases/upload.php";
	   $file=new upload($file,'Resource/upload/',1024000);
	   $file->UploadFile();
	   $datapageupdate['pages_images']=$file->getUrl(); 

       } catch (Exception $e) {
   	   echo "<h3 class='message'>".$e->getMessage()."</h3>";
   	   echo"<h3>The Data Failed To Add Try again </h3>";
   	   return;

        }

        }
        else
        {
           $datapageupdate['pages_images']='Resource/upload/logo.jpg';	
        }*/



		try {
			include"databases/update.php";
		$updatedata=new UPDATE('pages');  
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
		$obj=new Display('pages');
		$datapages=$obj->getData();
		
		include"views/showpage.php";
	    } catch (Exception $e) {
echo "<h3 class='message'>".$e->getMessage()."</h3>";	
	}
	
}

?>
