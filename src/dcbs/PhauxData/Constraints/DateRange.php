<?php
namespace dcbs\PhauxData\Constraints;

/**
 * A DateRange constraint will return a date between the min and max.
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
class DateRange extends RangeConstraint
{

	protected $format = 'Y-m-d';

	/**
	 * Set the format used by getValue(). This should be something that the PHP date()
	 * function can understand.
	 *
	 * @param string $format date format string, eg 'Y-m-d'
	 */
	public function setFormat($format)
	{
		$this->format = $format;
	}

	/**
	 * @return string
	 */
	public function getFormat()
	{
		return $this->format;
	}

	/**
	 * @return mixed
	 */
	public function getValue()
	{
		$min = strtotime($this->min);
		$max = strtotime($this->min);

		$time = rand($min, $max);

		return date('Y-m-d', $time);
	}
}
