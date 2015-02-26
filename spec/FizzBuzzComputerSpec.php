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

	function it_returns_4_for_4() {
		$this->callGenerate(4, '4');
	}

	function it_returns_buzz_for_5() {
		$this->callGenerate(5, 'buzz');
	}

	function it_returns_fizz_for_6() {
		$this->callGenerate(6, 'fizz');
	}

	function it_returns_woof_for_7() {
		$this->callGenerate(7, 'woof');
	}

	function it_returns_fizz_for_9() {
		$this->callGenerate(9, 'fizz');
	}

	function it_returns_buzz_for_10() {
		$this->callGenerate(10, 'buzz');
	}

	function it_returns_woof_for_14() {
		$this->callGenerate(14, 'woof');
	}

	function it_returns_fizzbuzz_for_15() {
		$this->callGenerate(15, 'fizzbuzz');
	}

	function it_allows_input_set_of_rules() {
		$this->setRules([
			3 => 'fizz',
			5 => 'buzz',
		]);
		$this->callGenerate(3, 'fizz');
		$this->callGenerate(5, 'buzz');
		$this->callGenerate(7, '7');
		$this->callGenerate(15, 'fizzbuzz');
	}

	private function callGenerate($in, $expected) {
		$this->generate($in)->shouldReturn($expected);
	}
}
