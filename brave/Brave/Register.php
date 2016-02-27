<?php
//注册器模式的例子

namespace Brave;

class Register{

	protected static $objects;

	static function set($alias, $object){
		self::$objects[$alias] = $object;
	}

	static function get($alias){
		return isset(self::$objects[$alias]) ? self::$objects[$alias] : false;
	}

	function _unset($alias){
		unset(self::$objects[$alias]);
	}

}