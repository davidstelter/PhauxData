<?php
/**
 * A Set constraint will return a randomly-selected element of its set.
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

namespace dcbs\PhauxData\Constraints;

class Set extends Constraint {

	protected $set;

	/**
	 * @param array $set_members
	 */
	public function __construct(array $set_members) {
		$this->set = $set_members;
	}

	/**
	 * @return mixed
	 */
	public function getValue() {
		return $this->set[rand(0, count($this->set) - 1)];
	}
}
