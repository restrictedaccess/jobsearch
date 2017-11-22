<?php

require_once('dbmysql.php');

class Session
{
	protected $oMySql;

	function __construct()
	{
		//session_start();
		$this->oMySql = new MySql();	// open database
	}


	function __destruct()
	{
		//session_destroy();
	}

	public function getDbConn()
	{
		return $this->oMySql;
	}

}




// Warning - No white space at end of file - causes errors
?>
