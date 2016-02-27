<?php
//单例模式的例子
namespace Brave;

class Database{

	static private $db;

	private function __construct(){
		echo "<br> database has bean created! <br>";
	}

	static function getInstance(){
		if(!self::$db){
            self::$db = new self();
		}
        
		return self::$db;
	}

	function where(){
		echo '<br>where<br>';
		return $this;
	}

	function limit(){
		echo '<br>limit<br>';
		return $this;
	}

	function order(){
		echo '<br>order<br>';
		return $this;
	}		

}