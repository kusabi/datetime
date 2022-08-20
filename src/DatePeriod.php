<?php

namespace Kusabi\Date;

use DateInterval as NativeDateInterval;
use DatePeriod as NativeDatePeriod;
use DateTimeInterface;

class DatePeriod extends NativeDatePeriod
{
    /**
     * Create a new instance from an existing instance
     *
     * @param NativeDatePeriod $period
     *
     * @return static
     */
    public static function createFromInstance(NativeDatePeriod $period): self
    {
        return static::instance($period->getStartDate(), $period->getDateInterval(), $period->getEndDate() ?: $period->getStartDate());
    }

    /**
     * Create a new instance of a period
     *
     * Useful for chaining
     *
     * @param DateTimeInterface $start
     * @param NativeDateInterval $interval
     * @param DateTimeInterface $end
     * @param int $options
     *
     * @return static
     */
    public static function instance(DateTimeInterface $start, NativeDateInterval $interval, DateTimeInterface $end, int $options = 0): self
    {
        return new static($start, $interval, $end, $options);
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
     * Return a cloned instance of this period
     *
     * @return static
     */
    public function cloned(): self
    {
        return static::createFromInstance($this);
    }

    /**
     * Get the interval
     *
     * @return DateInterval
     *
     * @link https://php.net/manual/en/dateperiod.getdateinterval.php
     */
    public function getDateInterval(): DateInterval
    {
        return DateInterval::createFromInstance(parent::getDateInterval());
    }

    /**
     * Get all the dates
     *
     * @return DateTime[]
     */
    public function getDateTimes(): array
    {
        return array_map(function (DateTimeInterface $datetime) {
            return DateTime::createFromInstance($datetime);
        }, iterator_to_array($this));
    }

    /**
     * Get the end date as our datetime instance
     *
     * @return DateTime
     */
    public function getEndDatetime(): DateTime
    {
        return DateTime::createFromInstance($this->getEndDate() ?: $this->getStartDate());
    }

    /**
     * Get the start date as our datetime instance
     *
     * @return DateTime
     */
    public function getStartDatetime(): DateTime
    {
        return DateTime::createFromInstance($this->getStartDate());
    }

    /**
     * Convert to a string
     *
     * @return string
     */
    public function toString(): string
    {
        return "every {$this->getDateInterval()->optimised()}, from {$this->getStartDatetime()} (included) to {$this->getEndDatetime()}";
    }
}
