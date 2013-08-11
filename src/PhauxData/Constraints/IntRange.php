<?php

namespace PhauxData\Constraints;

class IntRange extends Constraint {

	private $min;
	private $max;

	/**
	 * @param int $min
	 * @param int $max
	 */
	public function __construct($min, $max) {
		if (! is_numeric($min) || ! is_numeric($max)) {
			throw new DomainException('min and max parameters must both be numeric.');
		}

		$this->min = (int) $min;
		$this->max = (int) $max;
	}

	/**
	 * @return int
	 */
	public function getMin() {
		return $this->min;
	}

	/**
	 * @return int
	 */
	public function getMax() {
		return $this->max;
	}

	/**
	 * @return int
	 */
	public function getValue() {
		return rand($this->min, $this->max);
	}
}
