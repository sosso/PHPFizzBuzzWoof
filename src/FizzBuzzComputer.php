<?php

class FizzBuzzComputer {

    public function generate($argument1) {
        if ($argument1 === 3) {
			return 'fizz';
		}
		return "$argument1";
    }
}
