<?php
namespace Brave;

class ColorDecorator implements DrawDecorator{
	protected $color;

	function __construct($color){
		$this->color = $color;
	}

	function beforeDraw(){
		echo "<div style='color:".$this->color."'>";
	}

	function afterDraw(){
		echo "</div>";
	}

}