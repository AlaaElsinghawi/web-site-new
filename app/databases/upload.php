<?php
      /*
	  To Upload File check extension ceheck size
      move file from diectory to sever
     use function=> move_uploaded_file()
	 */
class upload
{
	private $file;
	private $filedirec;
	private $maxsize;
	private $fileurl;

	public function __construct($file,$filedirec ,$maxsize)
	{
	 if(is_int($maxsize))
	 {
	    $this->file=$file;
		 $this->filedirec=$filedirec;
         $this->maxsize=$maxsize;	
	 }
	 else
	 {
	 	throw new Exception("not define this value <span style='color: red;'> ".$maxsize."</span> must be integer");
	 	
	 }
		 
          
	}
	public function UploadFile()
	{
		
		
      for($i=0 ;$i<count($this->file['name']);$i++)
 	    {
	      $fileSize=$this->file['size'][$i];
	 	  $filepath=$this->file['tmp_name'][$i];
	      $filename=$this->file['name'][$i];
   	      $arr=explode('.',$filename);
	      $ex=end($arr);
	     
	 	  $extension=array('jpg','png','txt','png','docx','doc','gif');
	 	  /*check extension*/
	 	  
	      if(in_array($ex,$extension))
		      {
		  	       /*check size*/
		  	       if($fileSize > $this->maxsize)
		  	          {
		  	             echo "This File greater Than not allowed";	
		  	          }
		  	        else
		  	          {
			           $this->fileurl=$this->filedirec.time().$filename;
			           
			  	       move_uploaded_file($filepath, $this->fileurl);
			  	    
			  	      
			  		 }
		       }
	       else
	           {
	  	         
	  	         throw new Exception("This File Not allowed To upload It Extension Not Define");
	  	         
	           }
	 	}


	}
	public function getUrl()
	{
		return $this->fileurl;
	}
}


?>