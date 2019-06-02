<?php

if(isset($_POST['submit']) && $_POST['submit']=="Send")
{
	$data['name']=$_POST['name'];
 	$data['email']=$_POST['email'];
 	$data['message']=$_POST['message'];
 	
 try {

	require_once 'databases/add.php';
	$res=new Add($data,'comments');
		echo "<script type='text/javascript'> alert('Message send sucssfuly')</script>";
header('Location:../index.php');

 } catch (Exception $e) {
 	echo $e->getMessage();
 }


}
if(isset($_GET['action']) AND $_GET['action']=='del')
{
	try {
		$id=$_GET['id'];
		include 'databases/delete.php';
	    $obj=New Delete('comments');
	    $res=$obj->deleteRecordbyid($id);
		if($res==true)
		{
	     echo "<script type='text/javascript'> alert('The data Delete sucssfuly');history.back();</script>";
		}
    }catch (Exception $e) {
    echo "<h3 class='message'>{$e->getMessage()}</h3>";		
	}
	
	
}
else
{
	require_once'databases/displaydata.php';

	$res =new Display('comments');
	$data=$res->getData();
	include'views/displaycoments.php';
}
?>