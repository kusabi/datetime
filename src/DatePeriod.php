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
        return static::instance($period->getStartDate(), $period->getDateInterval(), $period->getEndDate());
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
     * Return a cloned instance of this period
     *
     * @return self
     */
    public function cloned()
    {
        return static::createFromInstance($this);
    }
}
