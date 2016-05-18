# Laravel Money

[![Build Status](https://travis-ci.org/cknow/laravel-money.svg)](https://travis-ci.org/cknow/laravel-money)
[![Total Downloads](https://poser.pugx.org/cknow/laravel-money/d/total.svg)](https://packagist.org/packages/cknow/laravel-money)
[![Latest Stable Version](https://poser.pugx.org/cknow/laravel-money/v/stable.svg)](https://packagist.org/packages/cknow/laravel-money)
[![Latest Unstable Version](https://poser.pugx.org/cknow/laravel-money/v/unstable.svg)](https://packagist.org/packages/cknow/laravel-money)
[![License](https://poser.pugx.org/cknow/laravel-money/license.svg)](https://packagist.org/packages/cknow/laravel-money)

## Installation

Run the following command from you terminal:

```bash
composer require cknow/laravel-money:~0.1.0
```

or add this to require section in your composer.json file:

```
"cknow/laravel-money": "~0.1.0"
```

then run ```composer update```

In your **config/app.php** add *'Clicknow\Money\MoneyServiceProvider'* to the end of the **'providers'** array:

```php
'providers' => array(
    ...
    ...
    Clicknow\Money\MoneyServiceProvider::class,
),
```

## Usage

```php
use Clicknow\Money\Money;

echo Money::BRL(500); // 'R$ 5,00' unconverted
echo new Money(500, new Currency('BRL')); // 'R$ 5,00' unconverted
echo Money::BRL(500, true); // 'R$ 500,00' converted
echo new Money(500, new Currency('BRL'), true); // 'R$ 500,00' converted
```

## Advanced Usage

```php
var $m1 = Money::BRL(500);
var $m2 = Money::BRL(500);

$m1->getCurrency();
$m1->isSameCurrency($m2);
$m1->compare($m2);
$m1->equals($m2);
$m1->greaterThan($m2);
$m1->greaterThanOrEqual($m2);
$m1->lessThan($m2);
$m1->lessThanOrEqual($m2);
$m1->convert('USD', 3.5);
$m1->add($m2);
$m1->subtract($m2);
$m1->multiply(2);
$m1->divide(2);
$m1->allocate([1, 1, 1]);
$m1->isZero();
$m1->isPositive();
$m1->isNegative();
$m1->format();
```

## Helpers

```php
money(500, 'BRL')
currency('BRL')
```

## Blade Extensions

```php
@money(500, 'BRL')
@currency('BRL')
```
