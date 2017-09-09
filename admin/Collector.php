<?php
include_once('dataBase.php');

// Define configuration
// define("DB_HOST", "ec2-184-73-202-112.compute-1.amazonaws.com");
// define("DB_USER", "zotmujkesrmedb");
// define("DB_PASS", "e637fb85cc61967d8964db6bdb56c57701b79ec6c7c2b6f7d687724385af3116");
// define("DB_NAME", "d96lpr4l7l0g95");

define("DB_HOST", "localhost");
define("DB_USER", "postgres");
define("DB_PASS", "postgres");
define("DB_NAME", "comunidad");



class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
