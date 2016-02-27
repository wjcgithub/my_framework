<?php
namespace Brave;

class MaleUserStrategy implements UserStrategy{

	function showAd(){
		echo "2014新款男装";
	}

	function showCategory(){
		echo "男装";
	}

}