PhauxData
=========

[![Build Status](https://travis-ci.org/davidstelter/PhauxData.png)](https://travis-ci.org/davidstelter/PhauxData)

Random data generator for PHP

Basic example:

```php
	Generator::create('User')->count(5)
		->attribute('Status', new Constant(true))
		->attribute('Created', new DateRange('2013-01-01', '2013-07-01'))
		->attribute('Type', new Constant(7))
		->attribute('Age', new IntRange(18, 99))
		->attribute('FirstName', new Set(array(
			'Joe',
			'Bob',
			'Ralph',
			'Rupert',
			'George',
			'Mason',
		)))
		->attribute('LastName', new Set(array(
			'Winkle',
			'Bonkle',
			'Dangle',
			'Sprinkle',
			'Ankle',
			'Bagel',
		)))
		->run();
```
