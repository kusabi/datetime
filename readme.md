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

## DateInterval

```php
use Kusabi\Date\DateInterval;

// Create a basic instance
$interval = new DateInterval(); // Defaults to PT0S (0 second interval)
$interval = new DateInterval('P1YT10S');

// Create an instance with a chain-able static method
$interval = DateInterval::instance(); // Defaults to PT0S (0 second interval)
$interval = DateInterval::instance('P1YT10S');

// Create an instance from another instance
$legacy = new \DateInterval('P1YT10S');
$interval = DateInterval::createFromInstance($legacy);

// Create from values
$interval = DateInterval::createFromValues(1, 2, 3, 4, 5, 6); // years, months, days, hours, minutes, seconds

// Quickly create common intervals
$interval = DateInterval::second();
$interval = DateInterval::seconds(15);
$interval = DateInterval::minute();
$interval = DateInterval::minutes(30);
$interval = DateInterval::hour();
$interval = DateInterval::hours(8);
$interval = DateInterval::day();
$interval = DateInterval::days(7);
$interval = DateInterval::week();
$interval = DateInterval::weeks(4);
$interval = DateInterval::month();
$interval = DateInterval::months(6);
$interval = DateInterval::year();
$interval = DateInterval::years(100);

// Get the spec from the instance
$interval = DateInterval::year()->getSpec();

// Optimise the interval into it's larger components
$interval = DateInterval::seconds(125)->optimise(); // Becomes PT2M5S (2 minutes and 5 seconds)

// Optimise into a cloned instance
$interval = DateInterval::seconds(125);
$optimisedClone = $interval->optimised();

// Clone the instance
$interval = new DateInterval();
$cloned = $interval->cloned();

// Modifying the instance
$interval = new DateInterval();
$interval->addSecond();
$interval->addSeconds(10);
$interval->addMinute();
$interval->addMinutes(10);
$interval->addHour();
$interval->addHours(10);
$interval->addDay();
$interval->addDays(10);
$interval->addMonth();
$interval->addMonths(10);
$interval->addYear();
$interval->addYears(10);
$interval->addInterval(new \DateInterval('P1YT10S'));
$interval->addInterval(DateInterval::month());

$interval->subSecond();
$interval->subSeconds(10);
$interval->subMinute();
$interval->subMinutes(10);
$interval->subHour();
$interval->subHours(10);
$interval->subDay();
$interval->subDays(10);
$interval->subMonth();
$interval->subMonths(10);
$interval->subYear();
$interval->subYears(10);
$interval->subInterval(new \DateInterval('P1YT10S'));
$interval->subInterval(DateInterval::month());
```

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