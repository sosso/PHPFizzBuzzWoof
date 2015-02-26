<?php

class FizzBuzzComputer {

    public function generate($argument1) {
        if ($argument1 % 3 === 0) {
			return 'fizz';
		}
        if ($argument1 % 5 === 0) {
			return 'buzz';
		}
		if ($argument1 % 7 === 0) {
			return 'woof';
		}
		return "$argument1";
    }
}
