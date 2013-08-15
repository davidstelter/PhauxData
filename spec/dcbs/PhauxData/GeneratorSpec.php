<?php

namespace spec\dcbs\PhauxData;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GeneratorSpec extends ObjectBehavior
{
	function let()
	{
		$this->beConstructedWith('SomeModelName');
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('dcbs\PhauxData\Generator');
    }

	function it_returns_model_name()
	{
		$this->getModelName()->shouldReturn('SomeModelName');
	}

	/**
	 * @param dcbs\PhauxData\Constraints\Constant $constant
	 */
	function it_has_chainable_methods($constant)
	{
		$this->count(2)->shouldReturn($this);
		$this->attribute('foo', $constant)->shouldReturn($this);
	}

	function it_has_a_factory_method()
	{
		$this::create('foo')->shouldHaveType('dcbs\PhauxData\Generator');
		$this::create('AnotherModelName')->getModelName()->shouldReturn('AnotherModelName');
	}
}
