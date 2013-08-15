<?php

namespace spec\dcbs\PhauxData\Constraints;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DateRangeSpec extends ObjectBehavior
{

	function let()
	{
		$this->beConstructedWith('2013-01-01', '2013-06-01');
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('dcbs\PhauxData\Constraints\DateRange');
        $this->shouldHaveType('dcbs\PhauxData\Constraints\RangeConstraint');
        $this->shouldHaveType('dcbs\PhauxData\Constraints\Constraint');
    }

	function it_returns_min_and_max() {
		$this->getMin()->shouldBe('2013-01-01');
		$this->getMax()->shouldBe('2013-06-01');
	}


}
