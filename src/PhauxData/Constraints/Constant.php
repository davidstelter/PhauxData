<?php
namespace PhauxData\Constraints;

/**
 * A Constant constraint will always return the same value.
 *
 * PHP version 5
 *
 * @category  Testing
 * @package   PhauxData.Constraints
 * @author    David Stelter <david.stelter@gmail.com>
 * @copyright 2013 David Stelter
 * @license   http://opensource.org/licenses/MIT The MIT License
 * @link      http://github.com/davidstelter/PhauxData
 */
class Constant extends Constraint {

	public function __construct($value) {
		$this->value = $value;
	}

	public function getValue() {
		return $this->value;
	}
}
