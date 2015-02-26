<?php

class FizzBuzzComputer {

	private $rules = [
		3 => 'fizz',
		5 => 'buzz',
		7 => 'woof'
	];

	public function setRules(Array $rules) {
		$this->rules = $rules;
	}

    public function generate($argument1) {
		$output = '';
		foreach ($this->rules as $in => $out) {
			if ($argument1 % $in === 0) {
				$output .= $out;
			}
		}

		if ($output) {
			return $output;
		} else {
			return "$argument1";
		}
    }
}
