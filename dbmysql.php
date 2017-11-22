<?php
/*******************************

dbmysql.php

Opens/Closes MySQL Database


********************************/

require_once('dbparms.php');	// Database Connection criteria

class MySqlException extends Exception 
{
  
  function __construct($msg, $code = 99)
  {
    parent::__construct();
    $this->message = "msg !! " . $msg;
    $this->code = $code;
  }

  public function get_errorInfo()
  {

    return  'File: ' . $this->getFile() . '<br />' .
	    'Line: ' . $this->getLine() . '<br />' . 
	    'Error Code: ' . $this->getCode() . '<br />' . 
	    'Error Message: ' . $this->getMessage(); 
  }
}

class MySql
{
	protected $mysqli;

	function __construct() 
	{
	try
	{
		$this->mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_SCHEMA);
		if ($this->mysqli->connect_errno) 
		{
		throw new MySqlException("Failed to connect to MySQL: (" . $this->mysqli->connect_errno . ") " .
					$this->mysqli->connect_error, 
					$this->mysqli->connect_errno);
		}
		//echo $this->mysqli->host_info . "<br />";
	}
	catch (MySqlException $e)
	{
		print $e->get_errorInfo();
	}
	}

	function __destruct() 
	{
		$this->mysqli->close();
	}
  

	public function getServerInfo()
	{
		return "Server version: " . $this->mysqli->server_info .
			   " : " . $this->mysqli->host_info;
	}


}

?>