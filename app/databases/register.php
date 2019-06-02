<?php
class Register
{
	private $username;
	private $name;
	private $email;
	private $password;
	private $reg;
	function __construct($data)
	{
		$this->SetData($data);
		$this->insertdata();

	}
	private function SetData($data)
	{
		$this->name    =$data['name'];
		$this->username=$data['username'];
		$this->email   =$data['email'];
		$this->password=$data['password'];
	}
	private function insertdata()
	{
     include'database.php';
     $query="INSERT INTO `users` (`username`,`name`,`email`,`password`) VALUES (?,?,?,?);";
    $this->reg=$db->insertRow($query,$param=array($this->username,$this->name,$this->email,$this->password));
     	if($this->reg > 0)
     	{
     		session_start();
          $_SESSION['user']=$this->username;
     		return "true";
     	}
     	else
     	{
         throw new Exception("invalid  email already Token ");	
     	}
	}

}
?>