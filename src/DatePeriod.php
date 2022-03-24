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
    public static function createFromInstance(NativeDatePeriod $period)
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
    public static function instance(DateTimeInterface $start, NativeDateInterval $interval, DateTimeInterface $end, $options = 0)
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
     * @return self
     */
    public function cloned()
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
    public function getDateInterval()
    {
        return DateInterval::createFromInstance(parent::getDateInterval());
    }

    /**
     * Get the end date as our datetime instance
     *
     * @return DateTime
     */
    public function getEndDatetime()
    {
        return DateTime::createFromInstance($this->getEndDate() ?: $this->getStartDate());
    }

    /**
     * Get the start date as our datetime instance
     *
     * @return DateTime
     */
    public function getStartDatetime()
    {
        return DateTime::createFromInstance($this->getStartDate());
    }

    /**
     * Convert to a string
     *
     * @return string
     */
    public function toString()
    {
        return "every {$this->getDateInterval()->optimised()}, from {$this->getStartDatetime()} (included) to {$this->getEndDatetime()}";
    }
}
