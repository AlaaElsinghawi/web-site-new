<?php
if($_POST OR @$_GET['action']){
	
if(isset($_POST['send']) AND $_POST['send']=='Add')
{

	$datasection['section_name']        =$_POST['section_name'];
	$datasection['section_status']      =$_POST['section_status'];
	$datasection['section_location']    =$_POST['section_location'];
	$datasection['sectiom_description'] =$_POST['sectiom_description'];
	$datasection['username']            =$_POST['username'];
	try {
		include"databases/Add.php";
		$res= new Add($datasection,'section');
		if($res==true) 
		{
			echo "<script type='text/javascript'> alert('The data Add sucssfuly');history.back();</script>";
		}
	    } 
	    catch (Exception $e) {
		 echo $e->getMessage();
	      }
}

if(isset($_GET['action']) AND $_GET['action']=='del')
{
			$id=@$_GET['id'];
			try {
					include"databases/delete.php";
					$obj=New Delete('section');
					$obj->deleteRecordbyid($id);
				   if($obj==true)
				   {
	 echo "<script type='text/javascript'> alert('The data Delete sucssfuly');;history.back();</script>";     
				   }
			  } catch (Exception $e) {
				echo $e->getMessage();
		   	}
	
}


/*to update Record*/


if(isset($_GET['action']) AND $_GET['action']=='add')
{
 include"views/section.php";	
}
if(isset($_POST['update']) AND $_POST['update']=='Edit')
{

   try {
   	$datasection['section_name']        =$_POST['section_name'];
	$datasection['section_status']      =$_POST['section_status'];
	$datasection['section_location']    =$_POST['section_location'];
	$datasection['sectiom_description'] =$_POST['sectiom_description'];
     $id=$_POST['id'];

	include"databases/update.php";
	$res=New UPDATE('section');
	$sql=$res->UpdateRecord($datasection,$id);
	if($sql==true)
	{
	echo "<script type='text/javascript'> alert('The data Update sucssfuly');history.back();</script>";
	}
   } catch (Exception $e) {
   	echo $e->getMessage();
   }
   
}
elseif(isset($_GET['action']) AND $_GET['action']=='edit')
{
	
	try {
		$id=(@$_GET['id']);
	    include"databases/displaydata.php";
	    $obj=new Display('section');
	   
    	$res=$obj->getrecordbyid($id);

   include"views/sectionedit.php";
	} catch (Exception $e) {
		echo $e->getMessage();
	}
    
}
}

else
{
	try {
		include"databases/displaydata.php";
	     $res=new Display('section');
	     $data=$res->getData();
		 if(!empty($data))
		 {
		 	include"views/displaysection.php";
		 }
         } catch (Exception $e) {
		include"views/displaysection.php";
		echo "<h3 class='message'>".$e->getMessage()."</h3>";
	}
}
?>