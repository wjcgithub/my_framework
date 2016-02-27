<?php
//单例模式的例子
namespace Brave;

interface IDatabase{	
	function connect($host, $user, $passwd, $dbname);
	function query($sql);
	function close();
}