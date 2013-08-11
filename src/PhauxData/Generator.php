<?php

namespace PhauxData;
use \PhauxData\Constraints\Constraint;

class Generator {

	/**
	 * @var string $model_name
	 */
	private $model_name;

	/**
	 * @var int $count
	 */
	private $count;


	/**
	 * @var array $attributes
	 * array(
	 *     'name' => Constraint,
	 * )
	 */
	private $attributes;

	/**
	 * @param string $model_name
	 * @return Generator
	 */
	public static function create($model_name) {
		return new Generator($model_name);
	}

	/**
	 * @param string $model_name
	 */
	public function __construct($model_name) {
		$this->model_name = $model_name;
	}

	/**
	 * @return string
	 */
    public function getModelName() {
		return $this->model_name;
    }

	/**
	 * @param int $count
	 */
	public function setCount($count) {
		$this->count = $count;
	}

	/**
	 * Chainable method
	 * @param int $count
	 * @return Generator
	 */
	public function count($count) {
		$this->count = $count;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getCount() {
		return $this->count;
	}

	/**
	 * @param string $name
	 * @param Constraint $constraints
	 */
	public function setAttribute($name, Constraint $constraints) {
		$this->attributes[$name] = $constraints;
	}

	/**
	 * Chainable method
	 * @param string $name
	 * @param Constraint $constraints
	 * @return Generator
	 */
	public function attribute($name, Constraint $constraints) {
		$this->setAttribute($name, $constraints);
		return $this;
	}

	/**
	 * Generates the models.
	 */
	public function run() {
		$created = 0;

		for ($created = 0; $created < $this->count; ++$created) {
			$class = $this->model_name;
			$model = new $class;

			foreach ($this->attributes as $name => $constraint) {
				$setter = 'set' . $name;
				$model->{$setter}($constraint->getValue());
			}

			$model->save();
		}
	}
}
