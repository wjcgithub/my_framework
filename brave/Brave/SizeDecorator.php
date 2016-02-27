<?php
namespace Brave;

class SizeDecorator implements DrawDecorator{
	protected $size;

	function __construct($size){
		$this->size = $size;
	}

	function beforeDraw(){
		echo "<span style='font-size:".$this->size."'>";
	}

	function afterDraw(){
		echo "</span>";
	}

}