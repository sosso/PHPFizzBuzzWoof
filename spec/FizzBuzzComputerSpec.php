<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzComputerSpec extends ObjectBehavior {
	function it_returns_1_for_1() {
		$this->generate(1)->shouldReturn('1');
	}

	function it_returns_2_for_2() {
		$this->generate(2)->shouldReturn('2');
	}
}
