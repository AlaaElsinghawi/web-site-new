<?php
class Deletfile
{
	private $files;
	public function __construct($files)
	{
		if(is_array($files))
		{
			  $this->files=$files;
		}
		else
		{
			throw new Exception("Error can't Delete This file");
			
		}
     
         $this->Deletefiles();
	}
	public function Deletefiles()
	{
		foreach ($this->files as $file) {
			if (file_exists($file)) {
				unlink($file);
			}
			else
			{
				throw new Exception("File Not Found try agin");
			}
			
		}
		return true;
	}
}

?>