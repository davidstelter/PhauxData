<?php

namespace spec\PhauxData\Constraints;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ConstantSpec extends ObjectBehavior
{
	function let()
	{
		$this->beConstructedWith(1);
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('PhauxData\Constraints\Constant');
    }

	function it_returns_its_value() {
		$this->getValue()->shouldReturn(1);
	}

}
