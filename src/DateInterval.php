<?php

namespace Kusabi\Date;

use DateInterval as NativeDateInterval;
use DateTimeInterface;
use Exception;

class DateInterval extends NativeDateInterval
{
    /**
     * The number of days in a month
     *
     * @var int
     */
    const DAYS_IN_MONTH = 28;

    /**
     * The number of hours in a day
     *
     * @var int
     */
    const HOURS_IN_DAY = 24;

    /**
     * The number of minutes in an hour
     *
     * @var int
     */
    const MINUTES_IN_HOUR = 60;

    /**
     * The number of months in a year
     *
     * @var int
     */
    const MONTHS_IN_YEAR = 12;

    /**
     * The number of seconds in a minute
     *
     * @var int
     */
    const SECONDS_IN_MINUTE = 60;

    /**
     * A spec that resents no time
     *
     * @var string
     */
    const SPEC_EMPTY = 'PT0S';

    /**
     * Override the default constructor to have a default value.
     *
     * The constructor will return false if the spec is bad, instead of throwing an exception
     *
     * @param string $spec
     *
     * @throws Exception when the spec cannot be parsed as an interval.
     *
     * @link https://php.net/manual/en/dateinterval.construct.php
     */
    public function __construct($spec = self::SPEC_EMPTY)
    {
        parent::__construct($spec === '' ? self::SPEC_EMPTY : $spec);
    }

    /**
     * Create a date interval that represents the interval between two datetime instances
     *
     * @param DateTimeInterface $from
     * @param DateTimeInterface $to
     *
     * @throws Exception Emits Exception in case of an error.
     *
     * @return static
     */
    public static function createFromDateTimes(DateTimeInterface $from, DateTimeInterface $to): DateInterval
    {
        return DateTime::createFromInstance($from)->diff($to);
    }

    /**
     * Create an interval instance using any DateInterval instance
     *
     * @param NativeDateInterval $interval
     *
     * @return DateInterval
     */
    public static function createFromInstance(NativeDateInterval $interval): DateInterval
    {
        if ($interval instanceof DateInterval) {
            return $interval->cloned();
        }
        return static::createFromValues()->copy($interval);
    }

    /**
     * Create a new instance from a spec string
     *
     * @param int|null $years
     * @param int|null $months
     * @param int|null $weeks
     * @param int|null $days
     * @param int|null $hours
     * @param int|null $minutes
     * @param int|null $seconds
     *
     * @return DateInterval
     *
     * @noinspection PhpDocMissingThrowsInspection
     * @noinspection PhpUnhandledExceptionInspection
     */
    public static function createFromValues(int $years = null, int $months = null, int $weeks = null, int $days = null, int $hours = null, int $minutes = null, int $seconds = null): DateInterval
    {
        $factory = new IntervalSpecFactory();
        return new static($factory->createFromValues($years, $months, $weeks, $days, $hours, $minutes, $seconds));
    }

    /**
     * Shorthand for creating a day interval
     *
     * @return static
     *
     * @see DateInterval::days()
     */
    public static function day(): DateInterval
    {
        return static::days(1);
    }

    /**
     * Shorthand for creating a daily interval
     *
     * @param int $days
     *
     * @return static
     */
    public static function days(int $days): DateInterval
    {
        return static::createFromValues(null, null, null, $days);
    }

    /**
     * Shorthand for creating an hour interval
     *
     * @return static
     *
     * @see DateInterval::hours()
     */
    public static function hour(): DateInterval
    {
        return static::hours(1);
    }

    /**
     * Shorthand for creating an hourly interval
     *
     * @param int $hours
     *
     * @return static
     */
    public static function hours($hours): DateInterval
    {
        return static::createFromValues(null, null, null, null, $hours);
    }

    /**
     * Create a new instance using the constructor
     *
     * Useful for chaining
     *
     * @param string $spec
     *
     * @throws Exception when the interval_spec cannot be parsed as an interval.
     *
     * @return self
     *
     * @link https://php.net/manual/en/dateinterval.construct.php
     */
    public static function instance(string $spec = self::SPEC_EMPTY): DateInterval
    {
        return new static($spec);
    }

    /**
     * Shorthand for creating a minute interval
     *
     * @return static
     *
     * @see DateInterval::minutes()
     */
    public static function minute(): DateInterval
    {
        return static::minutes(1);
    }

    /**
     * Shorthand for creating a minute interval
     *
     * @param int $minutes
     *
     * @return static
     */
    public static function minutes(int $minutes): DateInterval
    {
        return static::createFromValues(null, null, null, null, null, $minutes);
    }

    /**
     * Shorthand for creating an month interval
     *
     * @return static
     *
     * @see DateInterval::months()
     */
    public static function month(): DateInterval
    {
        return static::months(1);
    }

    /**
     * Shorthand for creating a monthly interval
     *
     * @param int $months
     *
     * @return static
     */
    public static function months(int $months): DateInterval
    {
        return static::createFromValues(null, $months);
    }

    /**
     * Shorthand for creating a second interval
     *
     * @return static
     *
     * @see DateInterval::seconds()
     */
    public static function second(): DateInterval
    {
        return static::seconds(1);
    }

    /**
     * Shorthand for creating a seconds interval
     *
     * @param int $second
     *
     * @return static
     */
    public static function seconds(int $second): DateInterval
    {
        return static::createFromValues(null, null, null, null, null, null, $second);
    }

    /**
     * Shorthand for creating a week interval
     *
     * @return static
     *
     * @see DateInterval::weeks()
     */
    public static function week(): DateInterval
    {
        return static::weeks(1);
    }

    /**
     * Shorthand for creating a weekly interval
     *
     * @param int $weeks
     *
     * @return static
     */
    public static function weeks(int $weeks): DateInterval
    {
        return static::createFromValues(null, null, $weeks);
    }

    /**
     * Shorthand for creating a year interval
     *
     * @return static
     */
    public static function year(): DateInterval
    {
        return static::years(1);
    }

    /**
     * Shorthand for creating a yearly interval
     *
     * @param int $years
     *
     * @return static
     */
    public static function years(int $years): DateInterval
    {
        return static::createFromValues($years);
    }

    /**
     * Cast as a string
     *
     * @return string
     */
    public function __toString()
    {
        return $this->toString();
    }

    /**
     * Add a day to the interval
     *
     * @return self
     */
    public function addDay(): DateInterval
    {
        return $this->addDays(1);
    }

    /**
     * Add days to the interval
     *
     * @param int $days
     *
     * @return self
     */
    public function addDays(int $days): DateInterval
    {
        $this->d += $this->isInverted() ? -$days : $days;
        return $this->optimise();
    }

    /**
     * Add an hour to the interval
     *
     * @return self
     */
    public function addHour(): DateInterval
    {
        return $this->addHours(1);
    }

    /**
     * Add hours to the interval
     *
     * @param int $hours
     *
     * @return self
     */
    public function addHours(int $hours): DateInterval
    {
        $this->h += $this->isInverted() ? -$hours : $hours;
        return $this->optimise();
    }

    /**
     * Add another interval to this one
     *
     * @param NativeDateInterval $interval
     *
     * @return self
     */
    public function addInterval(NativeDateInterval $interval): DateInterval
    {
        $this->addYears($interval->invert ? -$interval->y : $interval->y);
        $this->addMonths($interval->invert ? -$interval->m : $interval->m);
        $this->addDays($interval->invert ? -$interval->d : $interval->d);
        $this->addHours($interval->invert ? -$interval->h : $interval->h);
        $this->addMinutes($interval->invert ? -$interval->i : $interval->i);
        $this->addSeconds($interval->invert ? -$interval->s : $interval->s);
        return $this;
    }

    /**
     * Add a minute to the interval
     *
     * @return self
     */
    public function addMinute(): DateInterval
    {
        return $this->addMinutes(1);
    }

    /**
     * Add minutes to the interval
     *
     * @param int $minutes
     *
     * @return self
     */
    public function addMinutes(int $minutes): DateInterval
    {
        $this->i += $this->isInverted() ? -$minutes : $minutes;
        return $this->optimise();
    }

    /**
     * Add a month to the interval
     *
     * @return self
     */
    public function addMonth(): DateInterval
    {
        return $this->addMonths(1);
    }

    /**
     * Add months to the interval
     *
     * @param int $months
     *
     * @return self
     */
    public function addMonths(int $months): DateInterval
    {
        $this->m += $this->isInverted() ? -$months : $months;
        return $this->optimise();
    }

    /**
     * Add a second to the interval
     *
     * @return self
     */
    public function addSecond(): DateInterval
    {
        return $this->addSeconds(1);
    }

    /**
     * Add seconds to the interval
     *
     * @param int $seconds
     *
     * @return self
     */
    public function addSeconds(int $seconds): DateInterval
    {
        $this->s += $this->isInverted() ? -$seconds : $seconds;
        return $this->optimise();
    }

    /**
     * Add a year to the interval
     *
     * @return self
     */
    public function addYear(): DateInterval
    {
        return $this->addYears(1);
    }

    /**
     * Add years to the interval
     *
     * @param int $years
     *
     * @return self
     */
    public function addYears(int $years): DateInterval
    {
        $this->y += $this->isInverted() ? -$years : $years;
        return $this->optimise();
    }

    /**
     * Return a cloned instance of this interval
     *
     * @return self
     *
     * @noinspection PhpUnhandledExceptionInspection
     * @noinspection PhpDocMissingThrowsInspection
     */
    public function cloned(): DateInterval
    {
        return static::instance()->copy($this);
    }

    /**
     * Copy the values from another date interval
     *
     * @param NativeDateInterval $date
     *
     * @return self
     */
    public function copy(NativeDateInterval $date): DateInterval
    {
        $this->y = $date->y;
        $this->m = $date->m;
        $this->d = $date->d;
        $this->h = $date->h;
        $this->i = $date->i;
        $this->s = $date->s;
        $this->invert = $date->invert;
        return $this;
    }

    /**
     * Get the total number of days
     *
     * @return int
     */
    public function getDays(): int
    {
        $real = $this->getRealDays();
        return (int) ($real >= 0 ? floor($real) : ceil($real));
    }

    /**
     * Get the total number of hours
     *
     * @return int
     */
    public function getHours(): int
    {
        $real = $this->getRealHours();
        return (int) ($real >= 0 ? floor($real) : ceil($real));
    }

    /**
     * Get the total number of minutes
     *
     * @return int
     */
    public function getMinutes(): int
    {
        $real = $this->getRealMinutes();
        return (int) ($real >= 0 ? floor($real) : ceil($real));
    }

    /**
     * Get the total number of months
     *
     * @return int
     */
    public function getMonths(): int
    {
        $real = $this->getRealMonths();
        return (int) ($real >= 0 ? floor($real) : ceil($real));
    }

    /**
     * Get the total number of days as a float
     *
     * @return float
     */
    public function getRealDays(): float
    {
        return (float) ($this->getRealHours() / self::HOURS_IN_DAY);
    }

    /**
     * Get the total number of hours as a float
     *
     * @return float
     */
    public function getRealHours(): float
    {
        return (float) ($this->getRealMinutes() / self::MINUTES_IN_HOUR);
    }

    /**
     * Get the total number of minutes as a float
     *
     * @return float
     */
    public function getRealMinutes(): float
    {
        return (float) ($this->getSeconds() / self::SECONDS_IN_MINUTE);
    }

    /**
     * Get the total number of months as a float
     *
     * @return float
     */
    public function getRealMonths(): float
    {
        return (float) ($this->getRealDays() / self::DAYS_IN_MONTH);
    }

    /**
     * Get the total number of years as a float
     *
     * @return float
     */
    public function getRealYears(): float
    {
        return (float) ($this->getRealMonths() / self::MONTHS_IN_YEAR);
    }

    /**
     * Get the total number of seconds
     *
     * @return int
     */
    public function getSeconds()
    {
        $seconds = $this->s;
        $seconds += $this->i * self::SECONDS_IN_MINUTE;
        $seconds += $this->h * self::SECONDS_IN_MINUTE * self::MINUTES_IN_HOUR;
        $seconds += $this->d * self::SECONDS_IN_MINUTE * self::MINUTES_IN_HOUR * self::HOURS_IN_DAY;
        $seconds += $this->m * self::SECONDS_IN_MINUTE * self::MINUTES_IN_HOUR * self::HOURS_IN_DAY * self::DAYS_IN_MONTH;
        $seconds += $this->y * self::SECONDS_IN_MINUTE * self::MINUTES_IN_HOUR * self::HOURS_IN_DAY * self::DAYS_IN_MONTH * self::MONTHS_IN_YEAR;
        return $this->isInverted() ? -$seconds : $seconds;
    }

    /**
     * Get the spec string for this instance
     *
     * @return string
     */
    public function getSpec(): string
    {
        $factory = new IntervalSpecFactory();
        return $factory->createFromInterval($this);
    }

    /**
     * Get the total number of years
     *
     * @return int
     */
    public function getYears(): int
    {
        $real = $this->getRealYears();
        return (int) ($real >= 0 ? floor($real) : ceil($real));
    }

    /**
     * Invert the interval
     *
     * @return self
     */
    public function invert(): DateInterval
    {
        return $this->setInverted(!$this->isInverted());
    }

    /**
     * Is the interval a negative one?
     *
     * @return bool
     */
    public function isInverted(): bool
    {
        return (bool) $this->invert;
    }

    /**
     * Restructure the interval moving any overflowing smaller units into the larger ones
     *
     * @return self
     */
    public function optimise(): DateInterval
    {
        $seconds = $this->getSeconds();
        $this->setInverted($seconds < 0);
        $seconds = abs($seconds);

        // Reset all
        $this->s = 0;
        $this->i = 0;
        $this->h = 0;
        $this->d = 0;
        $this->m = 0;
        $this->y = 0;

        // Seconds up to minutes
        $overflow = (int) floor($seconds / self::SECONDS_IN_MINUTE);
        $remaining = $seconds % self::SECONDS_IN_MINUTE;
        $this->i += $overflow;
        $this->s = $remaining;

        // Minutes up to hours
        $overflow = (int) floor($this->i / self::MINUTES_IN_HOUR);
        $remaining = $this->i % self::MINUTES_IN_HOUR;
        $this->h += $overflow;
        $this->i = $remaining;

        // Hours up to days
        $overflow = (int) floor($this->h / self::HOURS_IN_DAY);
        $remaining = $this->h % self::HOURS_IN_DAY;
        $this->d += $overflow;
        $this->h = $remaining;

        // Days up to months
        $overflow = (int) floor($this->d / self::DAYS_IN_MONTH);
        $remaining = $this->d % self::DAYS_IN_MONTH;
        $this->m += $overflow;
        $this->d = $remaining;

        // Months up to year
        $overflow = (int) floor($this->m / self::MONTHS_IN_YEAR);
        $remaining = $this->m % self::MONTHS_IN_YEAR;
        $this->y += $overflow;
        $this->m = $remaining;

        return $this;
    }

    /**
     * Return a cloned instance that is optimise.
     *
     * Leaves the current instance intact
     *
     * @return self
     */
    public function optimised(): DateInterval
    {
        return $this->cloned()->optimise();
    }

    /**
     * Set the inverted flag
     *
     * @param bool $inverted
     *
     * @return self
     */
    public function setInverted(bool $inverted = true): DateInterval
    {
        $this->invert = (int) $inverted;
        return $this;
    }

    /**
     * Subtract a day from the interval
     *
     * @return self
     */
    public function subDay(): DateInterval
    {
        return $this->subDays(1);
    }

    /**
     * Subtract days from the interval
     *
     * @param int $days
     *
     * @return self
     */
    public function subDays(int $days): DateInterval
    {
        return $this->addDays(-$days);
    }

    /**
     * Subtract an hour from the interval
     *
     * @return self
     */
    public function subHour(): DateInterval
    {
        return $this->subHours(1);
    }

    /**
     * Subtract hours from the interval
     *
     * @param int $hours
     *
     * @return self
     */
    public function subHours(int $hours): DateInterval
    {
        return $this->addHours(-$hours);
    }

    /**
     * Add another interval to this one
     *
     * @param NativeDateInterval $interval
     *
     * @return self
     */
    public function subInterval(NativeDateInterval $interval): DateInterval
    {
        return $this->addInterval(static::createFromInstance($interval)->invert());
    }

    /**
     * Subtract a minute from the interval
     *
     * @return self
     */
    public function subMinute(): DateInterval
    {
        return $this->subMinutes(1);
    }

    /**
     * Subtract minutes from the interval
     *
     * @param int $minutes
     *
     * @return self
     */
    public function subMinutes(int $minutes): DateInterval
    {
        return $this->addMinutes(-$minutes);
    }

    /**
     * Subtract a month from the interval
     *
     * @return self
     */
    public function subMonth(): DateInterval
    {
        return $this->subMonths(1);
    }

    /**
     * Subtract months from the interval
     *
     * @param int $months
     *
     * @return self
     */
    public function subMonths(int $months): DateInterval
    {
        return $this->addMonths(-$months);
    }

    /**
     * Subtract a second from the interval
     *
     * @return self
     */
    public function subSecond(): DateInterval
    {
        return $this->subSeconds(1);
    }

    /**
     * Subtract seconds from the interval
     *
     * @param int $seconds
     *
     * @return self
     */
    public function subSeconds(int $seconds): DateInterval
    {
        return $this->addSeconds(-$seconds);
    }

    /**
     * Subtract a year from the interval
     *
     * @return self
     */
    public function subYear(): DateInterval
    {
        return $this->subYears(1);
    }

    /**
     * Subtract years from the interval
     *
     * @param int $years
     *
     * @return self
     */
    public function subYears(int $years): DateInterval
    {
        return $this->addYears(-$years);
    }

    /**
     * Convert to a string
     *
     * @return string
     */
    public function toString(): string
    {
        $parts = [];
        if ($this->y != 0) {
            $parts[] = $this->y.' '.($this->y > 1 ? 'years' : 'year');
        }
        if ($this->m != 0) {
            $parts[] = $this->m.' '.($this->m > 1 ? 'months' : 'month');
        }
        if ($this->d != 0) {
            $parts[] = $this->d.' '.($this->d > 1 ? 'days' : 'day');
        }
        if ($this->h != 0) {
            $parts[] = $this->h.' '.($this->h > 1 ? 'hours' : 'hour');
        }
        if ($this->i != 0) {
            $parts[] = $this->i.' '.($this->i > 1 ? 'minutes' : 'minute');
        }
        if ($this->s != 0) {
            $parts[] = $this->s.' '.($this->s > 1 ? 'seconds' : 'second');
        }

        $last = array_pop($parts);
        $left = implode(', ', array_filter($parts));
        $final = implode(' and ', array_filter([$left, $last]));
        $final = $final ?: '0 seconds';
        $sign = $this->invert ? '-' : '+';

        return $sign.$final;
    }
}
