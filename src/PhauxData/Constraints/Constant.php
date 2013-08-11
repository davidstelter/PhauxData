<?php

namespace PhauxData\Constraints;

class Constant extends Constraint {

	public function __construct($value) {
		$this->value = $value;
	}

	public function getValue() {
		return $this->value;
	}
}
