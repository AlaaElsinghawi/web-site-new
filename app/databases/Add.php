<?php
class Add
{
	private $data;
	private $tablename;
	public function __construct($data ,$tablename)
	{
		if(is_array($data))
		{
          $this->data=$data;
          $this->tablename=$tablename;
          $this->AddData();
		}
		else
		{
			throw new Exception("invalid data");
			
		}
       

	}
	public function AddData()
	{
	require_once 'databases/database.php';
	$db=new database();
		foreach ($this->data as $key => $value)
		 {
			$keydata[]   =$key;
			$valuedata[] =$value;
		}
		
		$keyval=implode($keydata,',');
		$datval="'".implode($valuedata,"','")."'";
		$query="INSERT INTO ".$this->tablename."(".$keyval.") VALUES(".$datval.")";
	  
		
		$sql=$db->myExec($query);
		if($sql==true)
		{return true;}
		else
		{throw new Exception("data invalid can't save it");}
	}

}
?>