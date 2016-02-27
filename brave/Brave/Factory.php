<?php
//工厂模式的例子

namespace Brave;

class Factory{
	protected $db;

	static function createDatabase(){
		$db = \Brave\Database::getInstance();
		\Brave\Register::set('db1', $db);
		return $db;
	}

	static function getUser($id){
		$key = 'user_'.$id;
		$user = Register::get($key);
		if(!$user){
			$user = new \Brave\User($id);
			Register::set($key, $user);
		}
		return $user;
	}

//	static function getDatabase($dbname){
//		$db = new \Brave\Database\MySQLi();
//		$db->connect('127.0.0.1', 'root', 'root', $dbname);
//		return $db;
//	}

    static function getDatabase($id = 'master'){
        $key = 'database_'.$id;
        if($id == 'slave'){
            $slaves = Application::getInstance()->config['database']['slave'];
            $db_conf = $slaves[array_rand($slaves)];
        }else{
            $db_conf = Application::getInstance()->config['database'][$id];
        }

        $db = Register::get($key);
        if(!$db){
            $db = new Database\MySQLi();
            $db->connect($db_conf['host'], $db_conf['user'], $db_conf['password'], $db_conf['dbname']);
            Register::set($key, $db);
        }

        return $db;
    }

}