PhauxData\Constraints\DateRange
===============

A DateRange constraint will return a date between the min and max.

<p>PHP version 5</p>


* Class name: DateRange
* Namespace: PhauxData\Constraints
* Parent class: [PhauxData\Constraints\RangeConstraint](PhauxData-Constraints-RangeConstraint.md)





Properties
----------


### $format

```
protected mixed $format = 'Y-m-d'
```





* Visibility: **protected**


### $min

```
protected mixed $min
```





* Visibility: **protected**
* This property is defined by [PhauxData\Constraints\RangeConstraint](PhauxData-Constraints-RangeConstraint.md)


### $max

```
protected mixed $max
```





* Visibility: **protected**
* This property is defined by [PhauxData\Constraints\RangeConstraint](PhauxData-Constraints-RangeConstraint.md)


Methods
-------


### setFormat

```
mixed PhauxData\Constraints\DateRange::setFormat(string $format)
```

Set the format used by getValue().

<p>This should be something that the PHP date()
function can understand.</p>

* Visibility: **public**

#### Arguments

* $format **string** - date format string, eg &#039;Y-m-d&#039;



### getFormat

```
string PhauxData\Constraints\DateRange::getFormat()
```





* Visibility: **public**



### getValue

```
mixed PhauxData\Constraints\DateRange::getValue()
```





* Visibility: **public**



### __construct

```
mixed PhauxData\Constraints\RangeConstraint::__construct(mixed $min, mixed $max)
```





* Visibility: **public**
* This method is defined by [PhauxData\Constraints\RangeConstraint](PhauxData-Constraints-RangeConstraint.md)

#### Arguments

* $min **mixed**
* $max **mixed**



### getMin

```
mixed PhauxData\Constraints\RangeConstraint::getMin()
```





* Visibility: **public**
* This method is defined by [PhauxData\Constraints\RangeConstraint](PhauxData-Constraints-RangeConstraint.md)



### getMax

```
mixed PhauxData\Constraints\RangeConstraint::getMax()
```





* Visibility: **public**
* This method is defined by [PhauxData\Constraints\RangeConstraint](PhauxData-Constraints-RangeConstraint.md)


