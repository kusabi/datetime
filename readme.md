# Datetime

![Tests](https://github.com/kusabi/datetime/workflows/tests/badge.svg)
[![codecov](https://codecov.io/gh/kusabi/datetime/branch/main/graph/badge.svg)](https://codecov.io/gh/kusabi/datetime)
[![Licence Badge](https://img.shields.io/github/license/kusabi/datetime.svg)](https://img.shields.io/github/license/kusabi/datetime.svg)
[![Release Badge](https://img.shields.io/github/release/kusabi/datetime.svg)](https://img.shields.io/github/release/kusabi/datetime.svg)
[![Tag Badge](https://img.shields.io/github/tag/kusabi/datetime.svg)](https://img.shields.io/github/tag/kusabi/datetime.svg)
[![Issues Badge](https://img.shields.io/github/issues/kusabi/datetime.svg)](https://img.shields.io/github/issues/kusabi/datetime.svg)
[![Code Size](https://img.shields.io/github/languages/code-size/kusabi/datetime.svg?label=size)](https://img.shields.io/github/languages/code-size/kusabi/datetime.svg)

<sup>A quality of life extension for PHPs datetime libraries</sup>

## Compatibility and dependencies

This library is compatible with PHP version `5.6`, `7.0`, `7.1`, `7.2`, `7.3` and `7.4`.

This library has no dependencies.

## DateTimeZone

```php
use Kusabi\Date\DateTimeZone;

// Create a basic instance
$timezone = new DateTimeZone();
$timezone = new DateTimeZone('Asia/Yakutsk');

// Create an instance with a chain-able static method
$timezone = DateTimeZone::instance();
$timezone = DateTimeZone::instance('Asia/Yakutsk');

// Create an instance from another instance
$legacy = new \DateTimeZone('UTC');
$timezone = DateTimeZone::createFromInstance($legacy);

// Quickly create timezones for a particular area
$timezone = DateTimeZone::PerthAustralia();
$timezone = DateTimeZone::PhoenixAmerica();
$timezone = DateTimeZone::TokyoAsia();

// Quick access to timezone data
$lat = $timezone->getLatitude();
$lon = $timezone->getLongitude();
$code = $timezone->getCountryCode();
```