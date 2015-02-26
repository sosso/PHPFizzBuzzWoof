<?php

class FizzBuzzComputer {

	private $rules = [
		3 => 'fizz',
		5 => 'buzz',
		7 => 'woof'
	];

	private $ruleFunctionName = 'FizzBuzzComputer::defaultRuleFunction';

	public function setRules(Array $rules) {
		$this->rules = $rules;
	}

	public function setRuleFunction($ruleFunctionName) {
		$this->ruleFunctionName = $ruleFunctionName;
	}

    public function generate($argument1) {
		$output = '';
		foreach ($this->rules as $in => $out) {
			if ($argument1 % $in === 0) {
				$output .= call_user_func($this->ruleFunctionName, $argument1, $in, $out);
			}
		}

		if ($output) {
			return $output;
		} else {
			return "$argument1";
		}
    }

	private static function defaultRuleFunction($argument1, $in, $out) {
		return $out;
	}
}
