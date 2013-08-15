<?php
namespace dcbs\PhauxData;
use dcbs\PhauxData\Constraints\Constraint;

/**
 * The Generator is responsible for creating model instances and applying the
 * constraints to them.
 *
 * PHP version 5
 *
 * @category  Testing
 * @package   PhauxData
 * @author    David Stelter <david.stelter@gmail.com>
 * @copyright 2013 David Stelter
 * @license   http://opensource.org/licenses/MIT The MIT License
 * @link      http://github.com/davidstelter/PhauxData
 */
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
	 * Creates and returns an instance of a Generator.
	 *
	 * @param string $model_name passed to the created Generator instance
	 * @return Generator
	 */
	public static function create($model_name) {
		return new Generator($model_name);
	}

	/**
	 * Takes a name of a class (model) to generate.
	 *
	 * @param string $model_name
	 */
	public function __construct($model_name) {
		$this->model_name = $model_name;
	}

	/**
	 * Returns the name of the model this Generator will produce.
	 *
	 * @return string
	 */
	public function getModelName() {
		return $this->model_name;
	}

	/**
	 * Set the number of model instances to generate.
	 *
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
