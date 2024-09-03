<?php

session_start();

class Database {
	private $DBserver;
	private $DBuser;
	private $DBpass;
	private $Database;
	public 	$Conn;

	function __construct(){
		$this->dbconnect();
	}

	function dbconnect(){
		$this->DBserver = "localhost";
		$this->DBuser   = "root";
		$this->DBpass   = "";
		$this->Database = "final";

		$this->Conn = new mysqli($this->DBserver, $this->DBuser, $this->DBpass, $this->Database);
		return $this->Conn;
	}
}

?>