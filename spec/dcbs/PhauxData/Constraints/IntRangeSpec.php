<?php

namespace spec\dcbs\PhauxData\Constraints;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IntRangeSpec extends ObjectBehavior
{
	function let() {
		$this->beConstructedWith(0, 5);
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('dcbs\PhauxData\Constraints\IntRange');
    }

	function it_returns_integers()
	{
		$this->getValue()->shouldBeInt();
	}


	function it_returns_values_in_range()
	{
		$this->getValue()->shouldBeInRange(0, 5);
	}

	function getMatchers()
	{
		return [
			'beInRange' => function($subject, $min, $max) {
				return ($min <= $subject && $subject <= $max);
			}
		];
	}
}
