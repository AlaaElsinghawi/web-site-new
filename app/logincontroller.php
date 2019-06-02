<?php

if(isset($_POST['send'])=="Register")
{

  
/*$rules= array('name' =>'checkRequired',
             'username'=>'checkRequired');
             'email'=>'checkRequired'
             'password'=>'checkRequired'
              );

*/

	  $data['name']      =$_POST['name'];
    $data['username']  =$_POST['username'];
    $data['email']     =filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
    $data['password']  =$_POST['password'];
       include"databases/register.php";
       try {
           $res=new Register($data);
       if($res==true) 
       {
        $_SESSION['username']= $_SESSION['user'];
         header('Location:index.php');
       }
       } catch (Exception $e) {
        echo $e->getMessage();   
       }
}

if(isset($_POST['submit'])=="login")
{

	  $email=$_POST['email'];
    $password=$_POST['password'];
   
  
   try {
         include"databases/login.php";

           $login=new login($email,$password);
           if($login==true)
           {
            $_SESSION['username']= $_SESSION['user'];
             header('Location:index.php');
           }
        } 
     catch (Exception $e) {
       echo $e->getMessage();    
     }
        
        
           
        
}
?>