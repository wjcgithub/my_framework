<?php
namespace Brave;

class Loader{

	static function autoload($class){
		// echo BASEDIR.'/'.str_replace('\\', '/', $class).'.php';;
		require BASEDIR.'/'.str_replace('\\', '/', $class).'.php';
	}

}