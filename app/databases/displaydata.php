<?php
class Display
{
	private $tablename;
	public function __construct($tablename)
	{
		$this->tablename=$tablename; 
	}

	public function getData()
	{
		    require_once'database.php';

		    $data = new database();
		    $query="SELECT * FROM $this->tablename ORDER BY id DESC";
	        $res=$data->getRows($query);
			if(!empty($res))
			{return $res;}
			else {throw new Exception("Not Found Any Data To Display it");}	
	 }
	 public function getrecordbyid($id)
     {
        $id=intval($id);

     	 require_once'database.php';
     	 $db= new database();
	  $query="SELECT * FROM $this->tablename WHERE id=$id"; 
	 
	  if($sql=$db->getRow($query))
	  {
	  	return $sql;
	  }
	  else
	  {
         throw new Exception("Error : Can't Found Data");

	  }
	}
}



?>