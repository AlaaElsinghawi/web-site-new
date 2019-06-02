<h3 class='title'>Banners</h3>

<?php
if($_POST or @$_GET['action'])
{
 if(isset($_GET['action']) && $_GET['action']=='add')
  {
	include"views/addnewBanners.php";
  }
  if(isset($_GET['action']) && $_GET['action']=='del')
  {
    $id=$_GET['id'];
    try {
      include"databases/delete.php";
      include"databases/Deletfile.php";

      $file=new Delete('banners');
      /*$fileing=new Deletefile('');
      $fileing->Deletefile();*/
        
      if($file->deleteRecordbyid($id))
      {
         echo "<script type='text/javascript'> alert('The data Delete sucssfuly');history.back();</script>";
      }
    } catch (Exception $e) {
      echo "<h3 class='message'>".$e->getMessage()."</h3>";
    }
  }
  if(isset($_POST['submit']) && $_POST['submit']=='Upload')
  {
    
     if(isset($_FILES))
       {
        try {
          include"databases/Add.php";
            include"databases/upload.php";
            $file=$_FILES['image'];
            $file=new Upload($file,"Resource/upload/",3072000);
            $file->UploadFile();
         for($i=0 ;$i<count($_FILES['image']['name']) ;$i++)
              {            
              $databannes['banners_name']=$_FILES['image']['name'][$i];
              $databannes['banners_url']="Resource/upload/".time().$_FILES['image']['name'][$i];
              $databannes['status']='active';
              $databannes['username']=$_SESSION['username'];
              $addfilebanners=new Add($databannes,'banners');
              }
            }catch (Exception $e) {
             echo $e->getMessage();
            }
  }
  
      
}


}
else
{
	
	try {
		include"databases/displaydata.php";
		$databanners=new Display('banners');
		$data=$databanners->getData();
         include"views/displaybanners.php";
	} catch (Exception $e) {
		echo "<h3 class='message'>".$e->getMessage()."</h3>";
	}
	
}

?>