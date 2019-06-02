<h4 class='title'>Library pages</h4>

<?php
if ($_POST){
	if (isset($_POST['submit']) && $_POST['submit']=='Upload')
	 {
		 if(isset($_FILES))
		    {
	   		 	$file=@$_FILES['image'];
			 	include "databases/upload.php";
			 	$file=new upload($file,'Resource/upload/',3072000);
			 	$file->UploadFile();
			 	echo $file->geturl();
			 	 
		    }
	  }
	  if (isset($_POST['submit']) && $_POST['submit']=='Delet Image')
	   {
	   	$file=$_POST['checkimage'];
          try {
          	   include "databases/Deletfile.php";
          	   $file= new Deletfile($file);
          	   
           if($file==true)
          	   {
          	   	echo "<script type='text/javascript'> alert('The File deleted sucssfuly');history.back();</script>";
          	   }
          	  } catch (Exception $e)
          	   {
          	  	echo "<h3>".$e->getMessage()."</h3>";	
          	  	}	 	
	   
	
}
}
else
{
	include"views/addnewfile.php";
	echo"<hr>";
	$dir=scandir("Resource/upload");
	$arrdele=array_diff($dir ,array('.','..'));
	echo "<form method='post'>
	<p><input type='submit' name='submit' value='Delet Image'  class='btn btn-danger'></p>";

	foreach ($arrdele as  $value) {
		echo "
        <p class='image wow bounceIn'  data-wow-duration='10' data-wow-delay='1s' >
		<input type='checkbox' name='checkimage[]' value='Resource/upload/{$value}'>
		<img src='Resource/upload/$value' class='imglibrary'/>
		</p>";
	}
	echo "</form>";

}
 
?>