<?php
class login
{
	private $email;
	private $password;
	private $cxn;
	function __construct($email,$password)
	{
		/*
		 set data
		 connect database
		 get data
		*/
		 
		$this->setData($email,$password);
		$this->getData();
	

	}
	private  function SetData($email ,$password)
	{
		$this->email=$email;
		$this->password=$password;
	}
	
	private function getData()
	{
	 include"databases/database.php";
	$sql="SELECT * FROM users WHERE email=? AND password=?";
	 
	 $result=$db->getRow($sql,$asd=array($this->email,$this->password));
	 /*$sql="SELECT * FROM users WHERE email='$this->email' AND password=$this->password";
	 $result=$db->getRow($sql);*/

	 
	if(!empty($result))
	  {
	  	  session_start();
          $_SESSION['user']=$result['username'];
          
         return "true";
	  }
	  else 
	  {
	  	throw new Exception("Error invalid username or password try again");	
	  }

    }
	 function close()
	  {
		mysql_close();
	  }
}
?>