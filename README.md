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

This library is compatible with PHP version `7.2`, `7.3`, `7.4` and `8.0`.

This library has no dependencies.

## Installation

Installation is simple using composer.

```bash
composer require kusabi/datetime
```

Or simply add it to your `composer.json` file

```json
{
    "require": {
        "kusabi/datetime": "^1.0"
    }
}
```

## Contributing

This library follows [PSR-1](https://www.php-fig.org/psr/psr-1/) & [PSR-2](https://www.php-fig.org/psr/psr-2/) standards.


#### Unit Tests

Before pushing any changes, please ensure the unit tests are all passing.

If possible, feel free to improve coverage in a separate commit.

```bash
vendor/bin/phpunit
```

#### Code sniffer

Before pushing, please ensure you have run the code sniffer. **Only run it using the lowest support PHP version (5.6)**

```bash
vendor/bin/php-cs-fixer fix
```

#### Static Analyses

Before pushing, please ensure you have run the static analyses tool.

```bash
vendor/bin/phan
```

#### Benchmarks

Before pushing, please ensure you have checked the benchmarks and ensured that your code has not introduced any slowdowns.

Feel free to speed up existing code, in a separate commit.

Feel free to add more benchmarks for greater coverage, in a separate commit.

```bash
vendor/bin/phpbench run --report=quick
vendor/bin/phpbench run --report=quick --output=markdown
vendor/bin/phpbench run --report=quick --filter=benchNetFromTax --iterations=50 --revs=50000

vendor/bin/phpbench xdebug:profile
vendor/bin/phpbench xdebug:profile --gui
```


## Documentation

```php
use Kusabi\Date\DateTime;
use Kusabi\Date\DateTimeZone;

// Create a basic instance
$date = new DateTime();
$date = new DateTime('monday');
$date = new DateTime('tomorrow');

// Create an instance with a chain-able static method
$date = DateTime::instance();
$date = DateTime::instance('monday');
$date = DateTime::instance('tomorrow');

// Create an instance from another instance
$legacy = new \DateTime('tomorrow');
$date = DateTime::createFromInstance($legacy);

// Short hand creators
$date = DateTime::now();       // 2020-01-02 12:30:00
$date = DateTime::today();     // 2020-01-02 00:00:00
$date = DateTime::yesterday(); // 2020-01-01 00:00:00
$date = DateTime::tomorrow();  // 2020-01-03 00:00:00

// Create from timestamps or microtime
$date = DateTime::createFromTimestamp(time());
$date = DateTime::createFromTimestamp(microtime(true));
$date = DateTime::createFromTimestamp(microtime());
$date = DateTime::createFromTimestamp(time(), DateTimeZone::LondonEurope());
$date = DateTime::createFromTimestamp(microtime(true), DateTimeZone::LondonEurope());
$date = DateTime::createFromTimestamp(microtime(), DateTimeZone::LondonEurope());

// Set time zone
$date = new DateTime();
$date->setTimezone(DateTimeZone::LondonEurope());
$date->setTimezone(DateTimeZone::AbidjanAfrica(), true); // Lock the date time string, bu translating the timestamp by the offset

// Update from format
$date = new DateTime();
$date->setFromFormat('Y-m-d H:i:s', '2030-12-25 07:30:00');

// Moving to limits
$date = new DateTime();
$date->endOfDay(); // 2020-01-02 23:59:59
$date->endOfMonth(); // 2020-01-31 00:00:00
$date->startOfDay(); // 2020-01-02 00:00:00

// Setting units
$date->setDay(25);
$date->setMonth(12);
$date->setYear(12);
$date->setTime(7, 30, 0);
$date->setDay(25)->setMonth(12)->setYear(2020)->setTime(7, 30, 0);
$date->setDate(2020, 12, 25)->setTime(7, 30, 0);

// Reading units
$date->getDayOfMonth();      // 25
$date->getDayOfWeek();       // 1
$date->getDayName();         // Monday
$date->getDayShortName();    // Mon
$date->getDaysInMonth();     // 31
$date->getDaysLeftInMonth(); // 6
$date->getMonth();           // 1
$date->getMonthName();       // January
$date->getMonthShortName();  // Jan

// Adding units
$date->addSecond();
$date->addSeconds(10);
$date->addMinute();
$date->addMinutes(10);
$date->addHour();
$date->addHours(10);
$date->addDay();
$date->addDays(10);
$date->addMonth();
$date->addMonths(10);
$date->addYear();
$date->addYears(10);

// Subtracting units
$date->subSecond();
$date->subSeconds(10);
$date->subMinute();
$date->subMinutes(10);
$date->subHour();
$date->subHours(10);
$date->subDay();
$date->subDays(10);
$date->subMonth();
$date->subMonths(10);
$date->subYear();
$date->subYears(10);

```

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