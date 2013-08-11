<?php

namespace spec\PhauxData\Constraints;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SetSpec extends ObjectBehavior
{
	function let()
	{
		$this->beConstructedWith(array('a', 'b', 10));
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('PhauxData\Constraints\Set');
    }

	function it_returns_values_in_set()
	{
		$this->getValue()->shouldBeInSet(array('a', 'b', 10));
	}

	function getMatchers()
	{
		return [
			'beInSet' => function($subject, $set) {
				return in_array($subject, $set);
			}
		];
	}
}
