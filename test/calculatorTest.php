<?php

require_once 'src/calculator.php';
use App\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
	public function testAdd()
	{
		$c = new Calculator;
		$result = $c->add(5,10);
		$this->assertEquals(15, $result);
	}
	
	public function testSubstractWithPositiveResult()
	{
		$c = new Calculator;
		$result = $c->substract(10,5);
		$this->assertEquals(5, $result);
	}
	
	public function testSubstractWithNegativeResult()
	{
		$c = new Calculator;
		$result = $c->substract(5,10);
		$this->assertEquals(-5, $result);
	}
}


?>