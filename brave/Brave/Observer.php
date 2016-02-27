<?php
namespace Brave;

interface Observer{

	function update($event_info = null);

}