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

	function it_returns_fizzbuzzwoof_for_12927810() {
		$this->callGenerate(12927810, 'fizzbuzzwoof');
	}

	function it_returns_fizz_for_123456789() {
		$this->callGenerate(123456789, 'fizz');
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

	function it_allows_rule_function() {
		$this->setRules([
			3 => 'fizz',
			5 => 'buzz',
		]);
		$this->setRuleFunction('\spec\FizzBuzzRuleClass::newRuleFunction');
		$this->callGenerate(3, 'fizzfizzfizz');
		$this->callGenerate(5, 'buzzbuzzbuzzbuzzbuzz');
		$this->callGenerate(7, '7');
		$this->callGenerate(15, 'fizzfizzfizzfizzfizzfizzfizzfizzfizzfizzfizzfizzfizzfizzfizzbuzzbuzzbuzzbuzzbuzzbuzzbuzzbuzzbuzzbuzzbuzzbuzzbuzzbuzzbuzz');

		$this->setRuleFunction('\spec\FizzBuzzRuleClass::newRuleFunction2');
		$this->callGenerate(3, 'fizz');
		$this->callGenerate(5, 'buzz');
		$this->callGenerate(7, '7');
		$this->callGenerate(15, 'fizzfizzfizzfizzfizzbuzzbuzzbuzz');
	}

	private function callGenerate($in, $expected) {
		$this->generate($in)->shouldReturn($expected);
	}
}

class FizzBuzzRuleClass {
	public static function newRuleFunction($argument1, $in, $out) {
		$output = '';
		for ($i = 0; $i < $argument1; $i++) {
			$output .= $out;
		}
		return $output;
	}

	public static function newRuleFunction2($argument1, $in, $out) {
		$output = '';
		for ($i = 0; $i < $argument1 / $in; $i++) {
			$output .= $out;
		}
		return $output;
	}
}
