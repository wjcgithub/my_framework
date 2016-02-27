<?php
namespace Brave;

class User{

	public $id;
	public $name;
	public $mobile;
	public $regTime;
	public $serial_no;

	protected $db;

	function __construct($id){
		$this->db = new \Brave\Database\MySQLi();
		$this->db->connect('127.0.0.1', 'root', 'root', 'test');
		$res = $this->db->query("select * from user where id = '{$id}' limit 1");
		$data = $res->fetch_assoc();
		$this->id = $data['id'];
		$this->name = $data['name'];
		$this->mobile = $data['mobile'];
		$this->regTime = $data['regTime'];
		$this->serial_no = $data['serial_no'];
	}

	function __destruct(){
		$this->db->query("update user set name = '{$this->name}', mobile = '{$this->mobile}', name='{$this->name}', serial_no='{$this->serial_no}', regTime='{$this->regTime}'  where id='{$this->id}'");
	}

}