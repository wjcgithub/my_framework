<?php
namespace Brave\Database;

use Brave\IDatabase;

class MySQL implements IDatabase{
	protected $conn;

	function connect($host, $user, $passwd, $dbname){
		$conn = mysql_connect($host, $user, $passwd);
		mysql_select_db($dbname, $conn);
		$this->conn = $conn;
	}

	function query($sql){
		return mysql_query($sql, $this->conn);
	}

	function close(){
		mysql_close($this->conn);
	}

}
