<?php
require_once "config.php";

class Database{
	
	protected static $instance;
	
	protected function __construct() {}
	
	public static function getInstance() 
    {
        if(!self::$instance) { 
	        try {
				
				self::$instance = new PDO(DSN, USERNAME, PASSWORD);
				
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);  
								
				self::$instance->query('SET CHARACTER SET utf8');
				
			} catch (PDOException $e) { 
			   
			   die("PDO CONNECTION ERROR: " . $e->getMessage() . "<br/>");
			}
    	}
      	return self::$instance;    	    	
    }
	
}

?>