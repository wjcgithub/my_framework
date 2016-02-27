<?php
namespace Brave;

interface IUserProxy{

	function getUserName($id);
	function setUserName($id, $name);

}