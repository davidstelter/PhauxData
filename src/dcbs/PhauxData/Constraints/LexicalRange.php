<?php

namespace dcbs\PhauxData\Constraints;

class LexicalRange extends Constraint {
	private $min;
	private $max;

	public function __construct($min, $max) {
		$this->min = $min;
		$this->max = $max;
	}

	public function getValue() {
		return chr(rand(ord($this->min), ord($this->max)));
	}
}
