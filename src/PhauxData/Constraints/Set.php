<?php

namespace PhauxData\Constraints;

class Set extends Constraint {

	private $set;

	public function __construct(array $set_members) {
		$this->set = $set_members;
	}

	public function getValue() {
		return $this->set[rand(0, count($this->set) - 1)];
	}
}
