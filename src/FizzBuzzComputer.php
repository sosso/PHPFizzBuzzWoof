<?php

class FizzBuzzComputer {

    public function generate($argument1) {
		$output = '';
        if ($argument1 % 3 === 0) {
			$output .= 'fizz';
		}
        if ($argument1 % 5 === 0) {
			$output .= 'buzz';
		}
		if ($argument1 % 7 === 0) {
			$output .= 'woof';
		}

		if ($output) {
			return $output;
		} else {
			return "$argument1";
		}
    }
}
