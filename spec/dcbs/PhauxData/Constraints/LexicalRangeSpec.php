<?php

namespace spec\dcbs\PhauxData\Constraints;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LexicalRangeSpec extends ObjectBehavior
{
	function let()
	{
		$this->beConstructedWith('a', 'b');
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('dcbs\PhauxData\Constraints\LexicalRange');
    }
}
