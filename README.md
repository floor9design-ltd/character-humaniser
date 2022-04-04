# character-humaniser

[![Latest Version](https://img.shields.io/github/v/release/floor9design-ltd/character-humaniser?include_prereleases&style=plastic)](https://github.com/floor9design-ltd/character-humaniser/releases)
[![Packagist](https://img.shields.io/packagist/v/floor9design/character-humaniser?style=plastic)](https://packagist.org/packages/floor9design/character-humaniser)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=plastic)](LICENCE.md)

[![Build Status](https://img.shields.io/travis/floor9design-ltd/character-humaniser?style=plastic)](https://travis-ci.com/github/floor9design-ltd/character-humaniser)
[![Build Status](https://img.shields.io/codecov/c/github/floor9design-ltd/character-humaniser?style=plastic)](https://codecov.io/gh/floor9design-ltd/character-humaniser)

[![Github Downloads](https://img.shields.io/github/downloads/floor9design-ltd/character-humaniser/total?style=plastic)](https://github.com/floor9design-ltd/character-humaniser)
[![Packagist Downloads](https://img.shields.io/packagist/dt/floor9design/character-humaniser?style=plastic)](https://packagist.org/packages/floor9design/character-humaniser)


A class that offers quick ways to make confusing/complex strings readable, for example passwords

## Introduction

Passwords often give confusing/difficult outputs. For example: lower case l (lima) and upper case i (indigo) are 
similar in many fonts, and symbols such as tilde have names that are often unknown or difficult to remember.

For example:

```
$password = 'lIaA3~';
```

... can be easily translated to:

```
$password_humanised = 'lima INDIGO alpha ALPHA three tilde';
```

## Features

[![Latest Version](https://img.shields.io/github/v/release/floor9design-ltd/character-humaniser?include_prereleases&style=plastic)](https://github.com/floor9design-ltd/character-humaniser/releases)
[![Packagist](https://img.shields.io/packagist/v/floor9design/character-humaniser?style=plastic)](https://packagist.org/packages/floor9design/character-humaniser)

The classes offer:

* array and string output for easy display
* catches unexpected characters

## Install

Via Composer/packagist

[![Packagist Downloads](https://img.shields.io/packagist/dt/floor9design/character-humaniser?style=plastic)](https://packagist.org/packages/floor9design/character-humaniser)

``` bash
composer require floor9design/character-humaniser
```

Via git

[![Github Downloads](https://img.shields.io/github/downloads/floor9design-ltd/character-humaniser/total?style=plastic)](https://github.com/floor9design-ltd/character-humaniser)

``` bash
git clone https://github.com/floor9design-ltd/character-humaniser.git
```
Or: 
``` bash
git clone git@github.com:floor9design-ltd/character-humaniser.git
```

## Usage

This is discussed in the usage document.

* [usage](docs/project/usage.md)

## Recommended

The following related class has a great password generating function:

* [floor9design/test-data-generator](https://github.com/floor9design-ltd/test-data-generator)
* Use `randomPassword()`

## Setup

There are no specific config setup steps required. 
The class should autoload in PSR-4 compliant systems. If you are using the class on its own, simply include it 
however is most appropriate.

## Testing

[![Build Status](https://img.shields.io/travis/floor9design-ltd/character-humaniser?style=plastic)](https://travis-ci.com/github/floor9design-ltd/character-humaniser)
[![Build Status](https://img.shields.io/codecov/c/github/floor9design-ltd/character-humaniser?style=plastic)](https://codecov.io/gh/floor9design-ltd/character-humaniser)

Tests can be run as follows:

* `./vendor/phpunit/phpunit/phpunit`

Static analysis/code review can be performed by using [phpstan](https://phpstan.org/):

* `./vendor/bin/phpstan`

The following tests and also creates code coverage (usually maintained at 100%)

* `./vendor/phpunit/phpunit/phpunit --coverage-html docs/tests/`

## Credits

- [Rick](https://github.com/elb98rm)

## Changelog

A changelog is generated here:

* [Change log](CHANGELOG.md)

## License

This software is available under the MIT licence. 

* [License File](LICENCE.md)
