<?php
class Delete
{
	private $tablename;
	public function  __construct($tablename)
	{
     $this->tablename=$tablename;    
	}
	public function deleteRecordbyid($id)
	{
		  include_once 'database.php';
			 
		    $query="DELETE FROM $this->tablename WHERE id=$id";
		
		     if($sql=$db->myExec($query))
		     {
		     	return true;
		     }
		     else
		     {   
		     	throw new Exception("Error can't Delete This Record");	
		     }
		
	
	}
}

?>