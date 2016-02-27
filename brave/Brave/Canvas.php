<?php
namespace Brave;

class Canvas implements DrawDecorator{
	protected $width;
	protected $height;
	protected $line;
	protected $decorators;

	function init($width=20, $height=10, $line="*", $space){
		$this->width = $width;
		$this->height = $height;
		$this->line = $line;
		$this->space = $space;
	}

	function rect($a1,$a2,$b1,$b2){
		$this->sHeight = $a1;
		$this->eHeight = $a2;
		$this->sWidth = $b1;
		$this->eWidth = $b2;
	}

	function addDecorator(DrawDecorator $decorator){
		$this->decorators[] = $decorator;
	}

	function beforeDraw(){
		foreach ($this->decorators as $decorator) {
			$decorator->beforeDraw();
		}
	}

	function afterDraw(){
		$rdecorators = array_reverse($this->decorators);
		foreach ($rdecorators as $decorator) {
			$decorator->afterDraw();
		}
	}

	function draw(){
		$this->beforeDraw();

		for ($height=0; $height < $this->height; $height++) { 
			for ($width=0; $width < $this->width; $width++) { 
				if( ($height>$this->sHeight && $height<$this->eHeight) && ($width>$this->sWidth && $width<$this->eWidth) ) {
					echo $this->space; continue;
				}
				echo $this->line; 
			}
				echo "<br>"; 
		}

		$this->afterDraw();
	}

}