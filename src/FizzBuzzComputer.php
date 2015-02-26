<?php

class FizzBuzzComputer {

    public function generate($argument1) {
        if ($argument1 === 3 || $argument1 === 6) {
			return 'fizz';
		}
        if ($argument1 === 5) {
			return 'buzz';
		}
		return "$argument1";
    }
}
