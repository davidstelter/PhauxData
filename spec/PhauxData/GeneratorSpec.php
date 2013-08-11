<?php

namespace spec\PhauxData;

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
        $this->shouldHaveType('PhauxData\Generator');
    }

	function it_returns_model_name()
	{
		$this->getModelName()->shouldReturn('SomeModelName');
	}

	function it_has_chainable_methods()
	{
		$this->count(2)->shouldReturn($this);
		$this->attribute('foo', new \PhauxData\Constraints\Constant(1))->shouldReturn($this);
	}

	function it_has_a_factory_method()
	{
		$this::create('foo')->shouldHaveType('PhauxData\Generator');
		$this::create('AnotherModelName')->getModelName()->shouldReturn('AnotherModelName');
	}
}
