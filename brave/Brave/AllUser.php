<?php
namespace Brave;

class AllUser implements \Iterator{
	protected $ids;
	protected $data = array();
	protected $index;
	protected $db;

	function __construct(){
		$this->db = new \Brave\Database\PDO();
		$this->db->connect('127.0.0.1', 'root', 'root', 'test');
		$res = $this->db->query('select id from user');
		$this->ids = $res->fetchAll();
	}

	function rewind(){
		$this->index  = 0;
	}

	function valid(){
		return $this->index < count($this->ids);
	}

	function next(){
		$this->index++;
	}

	function key(){
		return $this->index;
	}

	function current(){
		$id = $this->ids[$this->index]['id'];
		$user = Factory::getUser($id);
		return $user;
	}

}