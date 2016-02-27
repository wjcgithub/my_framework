<?php
namespace Brave\Database;

use Brave\IDatabase;

class PDO implements IDatabase{
	protected $conn;

	function connect($host, $user, $passwd, $dbname){
		$conn = new \PDO("mysql:host=$host;dbname=$dbname", $user, $passwd);
		$this->conn = $conn;
	}

	function query($sql){
		return $this->conn->query($sql);
	}

	function close(){
		unset($this->conn);
	}
}