<?php
namespace Brave;

class Proxy implements IUserProxy{

	function getUserName($id){
		$db = \Brave\Factory::getDatabase('slave');
		$info = $db->query("select name from user where id = '{$id}' limit 1");

	}

	function setUserName($id, $name){
		$db1 = \Brave\Factory::getDatabase('master');
		$db1->query("update user name='{$name}' where id = '{id}' limit 1");
	}

}