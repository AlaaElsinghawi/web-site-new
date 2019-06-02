<?php

class UPDATE 
{
	 private $tablename;
	
	public function __construct($tablename)
	{

		$this->tablename=$tablename;

	}
	public  function  UpdateRecord($dataupdate,$id)
	   {
	   	require_once"database.php";
	     $db=new database();
	   	$query="UPDATE $this->tablename SET";
		foreach ($dataupdate as $key => $value) {	
		$query.=" $key"."="."'$value' ,";	
		}
		$query.=", WHERE id=$id";
		
		$query=str_replace(',,',"  ", $query);
   
		$sql=$db->myExec($query);
		if($sql==true)
		{
		return true;
		}
		else
		{
	    throw new Exception("Error :Can't update This value");
		}

		
		

	}
	
}

?>