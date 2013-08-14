<?php

namespace PhauxData\Constraints;

abstract class RangeConstraint extends Constraint {

	protected $min;
	protected $max;

	/**
	 * @param mixed $min
	 * @param mixed $max
	 */
	public function __construct($min, $max)
	{
		$this->min = $min;
		$this->max = $max;
	}

	/**
	 * @return mixed
	 */
	public function getMin()
	{
		return $this->min;
	}

	public function getMax()
	{
		return $this->max;
	}
}
