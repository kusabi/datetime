<?php

namespace Kusabi\Date;

use DateTimeInterface;
use Exception;

class DateTime extends \DateTime
{
    /**
     * {@inheritDoc}
     *
     * Override the method to return an epoch date
     *
     * @return static|false
     *
     * @see \DateTime::createFromFormat()
     *
     * @suppress PhanParamSignatureRealMismatchHasNoParamTypeInternal,PhanTypeMismatchArgumentInternal
     */
    public static function createFromFormat($format, $datetime, $timezone = null)
    {
        $legacy = parent::createFromFormat($format, $datetime, $timezone);
        return $legacy ? static::createFromInstance($legacy) : false;
    }

    /**
     * Create a new Epoch instance from a DateTime instance
     *
     * @param DateTimeInterface $datetime
     *
     * @return static
     *
     * @noinspection PhpDocMissingThrowsInspection
     * @noinspection PhpUnhandledExceptionInspection
     */
    public static function createFromInstance(DateTimeInterface $datetime): self
    {
        return new static($datetime->format('Y-m-d H:i:s.u'), $datetime->getTimezone());
    }

    /**
     * Create a new instance from a unix timestamp
     *
     * @param int|float|string $timestamp
     * @param DateTimeZone|null $timezone
     *
     * @return static
     *
     * @noinspection PhpUnhandledExceptionInspection
     * @noinspection PhpDocMissingThrowsInspection
     */
    public static function createFromTimestamp($timestamp, DateTimeZone $timezone = null): self
    {
        $timezone = $timezone ?: DateTimeZone::UTC();

        if (is_float($timestamp)) {
            return static::createFromFormat('U.u', (string) $timestamp)->setTimezone($timezone);
        }

        if (is_string($timestamp)) {
            list($milli, $seconds) = explode(' ', $timestamp);
            $float = number_format((double) $milli + (int) $seconds, 6, '.', '');
            return static::createFromFormat('U.u', $float)->setTimezone($timezone);
        }

        return static::instance('now', $timezone)->setTimestamp((int) $timestamp);
    }

    /**
     * Create a new instance of a Date
     *
     * Useful for chaining commands
     *
     * @param string $time
     * @param DateTimeZone|null $timezone
     *
     * @throws Exception Emits Exception in case of an error.
     *
     * @return static
     *
     * @see DateTime::__construct
     * @link https://php.net/manual/en/datetime.construct.php
     */
    public static function instance(string $time = 'now', DateTimeZone $timezone = null): self
    {
        return new static($time, $timezone);
    }

    /**
     * Create an instance of a date for right now.
     *
     * @return static
     */
    public static function now(): self
    {
        return new static();
    }

    /**
     * Create an instance of a date for today.
     *
     * @return static
     */
    public static function today(): self
    {
        return static::now()->startOfDay();
    }

    /**
     * Create an instance of a date for tomorrow.
     *
     * @return static
     */
    public static function tomorrow(): self
    {
        return static::today()->add(DateInterval::day());
    }

    /**
     * Create an instance of a date for yesterday.
     *
     * @return static
     */
    public static function yesterday(): self
    {
        return static::today()->sub(DateInterval::day());
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
     * Add a day to the date
     *
     * @return static
     */
    public function addDay(): self
    {
        return $this->addDays(1);
    }

    /**
     * Add days to the date
     *
     * @param int $days
     *
     * @return static
     */
    public function addDays(int $days): self
    {
        return $this->add(DateInterval::days($days));
    }

    /**
     * Add an hour to the date
     *
     * @return static
     */
    public function addHour(): self
    {
        return $this->addHours(1);
    }

    /**
     * Add hours to the date
     *
     * @param int $hours
     *
     * @return static
     */
    public function addHours(int $hours): self
    {
        return $this->add(DateInterval::hours($hours));
    }

    /**
     * Add a minute to the date
     *
     * @return static
     */
    public function addMinute(): self
    {
        return $this->addMinutes(1);
    }

    /**
     * Add minutes to the date
     *
     * @param int $minutes
     *
     * @return static
     */
    public function addMinutes(int $minutes): self
    {
        return $this->add(DateInterval::minutes($minutes));
    }

    /**
     * Add a month to the date
     *
     * @return static
     */
    public function addMonth(): self
    {
        return $this->addMonths(1);
    }

    /**
     * Add months to the date
     *
     * @param int $months
     *
     * @return static
     */
    public function addMonths(int $months): self
    {
        return $this->add(DateInterval::months($months));
    }

    /**
     * Add a second to the date
     *
     * @return static
     */
    public function addSecond(): self
    {
        return $this->addSeconds(1);
    }

    /**
     * Add seconds to the date
     *
     * @param int $seconds
     *
     * @return static
     */
    public function addSeconds(int $seconds): self
    {
        return $this->add(DateInterval::seconds($seconds));
    }

    /**
     * Add a year to the date
     *
     * @return static
     */
    public function addYear(): self
    {
        return $this->addYears(1);
    }

    /**
     * Add year to the date
     *
     * @param int $years
     *
     * @return static
     */
    public function addYears(int $years): self
    {
        return $this->add(DateInterval::years($years));
    }

    /**
     * {@inheritDoc}
     *
     * @return DateInterval
     *
     * @see \DateTime::diff()
     */
    public function diff($targetObject, $absolute = false): DateInterval
    {
        return DateInterval::createFromInstance(parent::diff($targetObject, $absolute));
    }

    /**
     * Set the time to the end of the day
     *
     * @return static
     */
    public function endOfDay(): self
    {
        return $this->setTime(23, 59, 59);
    }

    /**
     * Set the date to the end of the calendar month it is currently in
     *
     * @return static
     */
    public function endOfMonth(): self
    {
        return $this->setDay($this->getDaysInMonth());
    }

    /**
     * Get the name of the day
     *
     * @return string
     */
    public function getDayName(): string
    {
        return $this->format('l');
    }

    /**
     * Get the day of the month as a number
     *
     * @return int
     */
    public function getDayOfMonth(): int
    {
        return (int) $this->format('j');
    }

    /**
     * Get the day of the week as a number
     *
     * @return int
     */
    public function getDayOfWeek(): int
    {
        return (int) $this->format('N');
    }

    /**
     * Get the day of the year as a number
     *
     * @return int
     */
    public function getDayOfYear(): int
    {
        return (int) $this->format('z');
    }

    /**
     * Get the short name of the day
     *
     * @return string
     */
    public function getDayShortName(): string
    {
        return $this->format('D');
    }

    /**
     * Get the number of days in the current calendar month
     *
     * @return int
     */
    public function getDaysInMonth(): int
    {
        return (int) $this->format('t');
    }

    /**
     * Get the number of days left in the current calendar month
     *
     * @return int
     */
    public function getDaysLeftInMonth(): int
    {
        return $this->getDaysInMonth() - $this->getDayOfMonth();
    }

    /**
     * Get the month from the date
     *
     * @return int
     */
    public function getMonth(): int
    {
        return (int) $this->format('m');
    }

    /**
     * Get the name for the month
     *
     * @return string
     */
    public function getMonthName(): string
    {
        return $this->format('F');
    }

    /**
     * Get the short name for the month
     *
     * @return string
     */
    public function getMonthShortName(): string
    {
        return $this->format('M');
    }

    /**
     * Get the Timezone associated with the date
     *
     * @return DateTimeZone
     *
     * @link http://php.net/manual/en/datetime.gettimezone.php
     */
    public function getTimezone(): DateTimeZone
    {
        return DateTimeZone::createFromInstance(parent::getTimezone());
    }

    /**
     * Get the year from the date
     *
     * @return int
     */
    public function getYear(): int
    {
        return (int) $this->format('Y');
    }

    /**
     * Is this datetime a weekday?
     *
     * @return bool
     */
    public function isWeekday(): bool
    {
        return !$this->isWeekend();
    }

    /**
     * Is this datetime the weekend?
     *
     * @return bool
     */
    public function isWeekend(): bool
    {
        return $this->getDayName() === 'Saturday' || $this->getDayName() === 'Sunday';
    }

    /**
     * Set the day
     *
     * @param int $day
     *
     * @return static
     */
    public function setDay(int $day): self
    {
        return $this->setDate($this->getYear(), $this->getMonth(), $day);
    }

    /**
     * Set the date and time from a format and value
     *
     * @param string $format
     * @param string $time
     *
     * @return static
     *
     * @see Date::createFromFormat()
     */
    public function setFromFormat(string $format, string $time): self
    {
        $this->setTimestamp(
            DateTime::createFromFormat($format, $time, $this->getTimezone())->getTimestamp()
        );
        return $this;
    }

    /**
     * Set the month
     *
     * @param int $month
     *
     * @return static
     */
    public function setMonth(int $month): self
    {
        return $this->setDate($this->getYear(), $month, $this->getDayOfMonth());
    }

    /**
     * Set the timezone associated with the Date
     *
     * @param \DateTimeZone $timezone
     * @param bool $freezeDatetime
     *
     * @return static
     *
     * @link https://php.net/manual/en/datetime.settimezone.php
     */
    public function setTimezone($timezone, bool $freezeDatetime = false): self
    {
        if ($freezeDatetime) {
            $this->subSeconds($timezone->getOffset($this) - $this->getTimezone()->getOffset($this));
        }
        parent::setTimezone($timezone);
        return $this;
    }

    /**
     * Set the year
     *
     * @param int $year
     *
     * @return static
     */
    public function setYear(int $year): self
    {
        return $this->setDate($year, $this->getMonth(), $this->getDayOfMonth());
    }

    /**
     * Set the time to the start of the day
     *
     * @return static
     */
    public function startOfDay(): self
    {
        return $this->setTime(00, 00, 00);
    }

    /**
     * Set the date to the start of the calendar month it is currently in
     *
     * @return static
     */
    public function startOfMonth(): self
    {
        return $this->setDate($this->getYear(), $this->getMonth(), 1);
    }

    /**
     * Subtract a day from the date
     *
     * @return static
     */
    public function subDay(): self
    {
        return $this->subDays(1);
    }

    /**
     * Subtract days from the date
     *
     * @param int $days
     *
     * @return static
     */
    public function subDays(int $days): self
    {
        return $this->sub(DateInterval::days($days));
    }

    /**
     * Subtract an hour from the date
     *
     * @return static
     */
    public function subHour(): self
    {
        return $this->subHours(1);
    }

    /**
     * Subtract hours from the date
     *
     * @param int $hours
     *
     * @return static
     */
    public function subHours(int $hours): self
    {
        return $this->sub(DateInterval::hours($hours));
    }

    /**
     * Subtract a minute from the date
     *
     * @return static
     */
    public function subMinute(): self
    {
        return $this->subMinutes(1);
    }

    /**
     * Subtract minutes from the date
     *
     * @param int $minutes
     *
     * @return static
     */
    public function subMinutes(int $minutes): self
    {
        return $this->sub(DateInterval::minutes($minutes));
    }

    /**
     * Subtract a month from the date
     *
     * @return static
     */
    public function subMonth(): self
    {
        return $this->subMonths(1);
    }

    /**
     * Subtract months from the date
     *
     * @param int $months
     *
     * @return static
     */
    public function subMonths(int $months): self
    {
        return $this->sub(DateInterval::months($months));
    }

    /**
     * Subtract a second from the date
     *
     * @return static
     */
    public function subSecond(): self
    {
        return $this->subSeconds(1);
    }

    /**
     * Subtract seconds from the date
     *
     * @param int $seconds
     *
     * @return static
     */
    public function subSeconds(int $seconds): self
    {
        return $this->sub(DateInterval::seconds($seconds));
    }

    /**
     * Subtract a year from the date
     *
     * @return static
     */
    public function subYear(): self
    {
        return $this->subYears(1);
    }

    /**
     * Subtract years from the date
     *
     * @param int $years
     *
     * @return static
     */
    public function subYears(int $years): self
    {
        return $this->sub(DateInterval::years($years));
    }

    /**
     * Convert to a string
     *
     * @return string
     */
    public function toString(): string
    {
        return $this->format(DateTimeInterface::ATOM);
    }
}
