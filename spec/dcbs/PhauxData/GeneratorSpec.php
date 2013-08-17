<?php

namespace spec\dcbs\PhauxData;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GeneratorSpec extends ObjectBehavior
{
	function let()
	{
		$this->beConstructedWith('stdClass');
	}

	function it_is_initializable()
	{
		$this->shouldHaveType('dcbs\PhauxData\Generator');
	}

	function it_returns_model_name()
	{
		$this->getModelName()->shouldReturn('stdClass');
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

	function it_disallows_non_callable_callback_args()
	{
		$this->shouldThrow('InvalidArgumentException')->duringSetPostSaveCallback('foo');
		$this->shouldThrow('InvalidArgumentException')->duringSetModelFactory('foo');
	}

	function it_should_return_model_instance()
	{
		$this->getModelInstance()->shouldReturnAnInstanceOf('stdClass');
	}

	/**
	 * @param dcbs\PhauxData\ModelMaker $model_maker
	 */
	function it_should_use_provided_model_factory($model_maker)
	{
		$model_maker->getInstance('stdClass')->shouldBeCalled();
		$this->setModelFactory(array($model_maker, 'getInstance'));

		//when
		$this->getModelInstance();
	}
}
