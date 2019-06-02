<?php
$id=@$_GET['id'];
include'site/includes/init.php';
include"site/header.php";

echo '<div id="contents">';

 
 include"site/sidbar.php";
 echo'<div id="conts">'; 

try {
	require_once'app/databases/displaydata.php';
	$res=new Display('sub_pages');
    $data=$res->getrecordbyid($id);
    echo'<div class=row>
<div class="header wow bounceIn" data-wow-duration=5s>'.$data['subpages_name'].'</div>
<div class=content>'.$data['subpages_content'].'</div>
<div><img src="app/'.$data['sub_pages_images'].'" class=imagnews></div>



</div>';
	
} catch (Exception $e) {
	echo $e->getMessage();
}

/*echo $data['subpages_name'].'<br>';
echo $data['subpages_content'];*/



echo " </div>";

echo"</div>";

?>
<?php
include"site/footer.php";

?>

        	
            

        	
            
       