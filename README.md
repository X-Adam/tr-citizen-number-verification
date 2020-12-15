# Tr Citizen Number Verification Class

<p align="center">
<a href="https://packagist.org/packages/X-Adam/tr-citizen-number-verification" rel="nofollow"><img src="https://img.shields.io/packagist/v/X-Adam/tr-citizen-number-verification" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/X-Adam/tr-citizen-number-verification" rel="nofollow"><img src="https://img.shields.io/packagist/dt/X-Adam/tr-citizen-number-verification" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/X-Adam/tr-citizen-number-verification" rel="nofollow"><img src="https://poser.pugx.org/X-Adam/tr-citizen-number-verification/dependents.svg" alt="Dependents"></a>
<a href="https://packagist.org/packages/X-Adam/tr-citizen-number-verification" rel="nofollow"><img src="https://img.shields.io/packagist/l/X-Adam/tr-citizen-number-verification" alt="License"></a>
</p>

<p align="center">
<a href="https://scrutinizer-ci.com/g/X-Adam/tr-citizen-number-verification/build-status/master" rel="nofollow"><img src="https://scrutinizer-ci.com/g/X-Adam/tr-citizen-number-verification/badges/quality-score.png?b=master" title="Scrutinizer Code Quality"></a>
<a href="https://styleci.io/repos/321351148" rel="nofollow"><img src="https://styleci.io/repos/321351148/shield?branch=master" alt="StyleCI"></a>
</p>

## Introduction

Turkey citizen number (TC No) verification class. It uses the <a href="https://tckimlik.nvi.gov.tr">tckimlik.nvi.gov.tr</a> service to work.

## Requirements

1. PHP >=5.3
2. PHP SOAP extension have to be loaded.

Other than that, this library has no requirements.

## Install

```bash
$ composer require x-adam/tr-citizen-number-verification:"~1"
```

## Example Usage

```php
include "./vendor/autoload.php";

$result = XAdam\TrCitizenNumberVerification::verify(12345678901, 1992, 'Mehmet', 'ÖĞMEN');
var_dump($result);    # Result: bool(false)
```

## License

This package is open source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
