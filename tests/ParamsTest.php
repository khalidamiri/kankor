<?php

require "../controllers/Params.php";

class ParamsTest extends PHPUnit_Framework_TestCase{

	public function setUp(){
		$this->params = new Params;
	}

	public function testOffsetSet(){
		$this->params->offsetSet("offset", 0);
		$this->assertTrue($this->params->offsetExists("offset"), "Check if the offset item is set.");
	}

	public function testOffsetUnset(){
		$this->params->offsetSet("value", 10);
		$this->params->offsetUnset("value");
		$this->assertFalse($this->params->offsetExists("value"), "Check if the offsetUnset function unset the the value item in params.");
	}

	public function testOffsetGet(){
		$this->params->offsetSet("offset", 10);
		$this->assertEquals(10, $this->params->offsetGet("offset"), 'Check if offsetGet returns the value we entered (10).');
	}
}

?>