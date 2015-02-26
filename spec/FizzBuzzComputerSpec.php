<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzComputerSpec extends ObjectBehavior {
	function it_returns_1_for_1() {
		$this->callGenerate(1, '1');
	}

	function it_returns_2_for_2() {
		$this->callGenerate(2, '2');
	}

	function it_returns_fizz_for_3() {
		$this->callGenerate(3, 'fizz');
	}


	private function callGenerate($in, $expected) {
		$this->generate($in)->shouldReturn($expected);
	}
}
