PhauxData\Generator
===============

The Generator is responsible for creating model instances and applying the
constraints to them.

<p>PHP version 5</p>


* Class name: Generator
* Namespace: PhauxData





Properties
----------


### $model_name

```
private string $model_name
```





* Visibility: **private**


### $count

```
private int $count
```





* Visibility: **private**


### $attributes

```
private array $attributes
```





* Visibility: **private**


Methods
-------


### create

```
\PhauxData\Generator PhauxData\Generator::create(string $model_name)
```

Creates and returns an instance of a Generator.



* Visibility: **public**
* This method is **static**.

#### Arguments

* $model_name **string** - passed to the created Generator instance



### __construct

```
mixed PhauxData\Generator::__construct(string $model_name)
```

Takes a name of a class (model) to generate.



* Visibility: **public**

#### Arguments

* $model_name **string**



### getModelName

```
string PhauxData\Generator::getModelName()
```

Returns the name of the model this Generator will produce.



* Visibility: **public**



### setCount

```
mixed PhauxData\Generator::setCount(int $count)
```

Set the number of model instances to generate.



* Visibility: **public**

#### Arguments

* $count **int**



### count

```
\PhauxData\Generator PhauxData\Generator::count(int $count)
```

Chainable method



* Visibility: **public**

#### Arguments

* $count **int**



### getCount

```
int PhauxData\Generator::getCount()
```





* Visibility: **public**



### setAttribute

```
mixed PhauxData\Generator::setAttribute(string $name, \PhauxData\Constraints\Constraint $constraints)
```





* Visibility: **public**

#### Arguments

* $name **string**
* $constraints **[PhauxData\Constraints\Constraint](PhauxData-Constraints-Constraint.md)**



### attribute

```
\PhauxData\Generator PhauxData\Generator::attribute(string $name, \PhauxData\Constraints\Constraint $constraints)
```

Chainable method



* Visibility: **public**

#### Arguments

* $name **string**
* $constraints **[PhauxData\Constraints\Constraint](PhauxData-Constraints-Constraint.md)**



### run

```
mixed PhauxData\Generator::run()
```

Generates the models.



* Visibility: **public**


