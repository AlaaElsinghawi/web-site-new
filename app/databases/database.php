<?php

require_once('variables.php');
class database {
    private $RDBMType = DB_TYPE;  //In the PHP PDO format
    private $username = DB_USER;
    private $password = DB_PASS;
    private $dbhost = DB_HOST;
    private $database =DB_DATABASE;
  public $LastInsertId=0;
 
  public   function __construct() {
        //Connection string 
   	$this->pdo = new PDO($this->RDBMType . ":host=" . $this->dbhost . ";dbname=" . $this->database, $this->username,
   	$this->password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
     }
     public function Disconnect(){
            $this->pdo = null;
            $this->isConnected = false;
        }

        public function getRow($query, $params=array())
     	   {
                $stmt = $this->pdo->prepare($query);
                
               $stmt->execute($params);

          return $stmt->fetch(PDO::FETCH_ASSOC);
               
          }
       public function getCount($query, $params=array())
     	   {
                $stmt = $this->pdo->prepare($query);

                $stmt->execute($params);
                return $stmt->rowCount();
           }
      	public function getRows($query, $params=array()){
      	        $stmt = $this->pdo->prepare($query);
                $stmt->execute($params);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }

       public function getObjs($query, $params=array()){
                $stmt = $this->pdo->prepare($query);
                $stmt->execute($params);
                return $stmt->fetchAll(PDO::FETCH_OBJ);
            }

        public function insertRow($query, $params){
                $stmt = $this->pdo->prepare($query);

                   $stmt->execute($params);
            
              return$stmt->rowCount();

              //  return  pdo->lastInsertId();
              }
              
              

        public function updateRow($query, $params){
            return $this->insertRow($query, $params);
        }
        public function deleteRow($query, $params){
          return $this->insertRow($query, $params);
        }
           public function myExec($query)
       	{
          return $this->pdo->exec($query);
        }
         public function phpAlert($msg) {
      	echo '<script type="text/javascript">alert("' . $msg . '")</script>';
	}
}

$db = new database;
?>