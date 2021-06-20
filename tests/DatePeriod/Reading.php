<?php

namespace Kusabi\Date\Tests\DatePeriod;

use Kusabi\Date\DateInterval;
use Kusabi\Date\DatePeriod;
use Kusabi\Date\DateTime;
use PHPUnit\Framework\TestCase;

class Reading extends TestCase
{
    /**
     * Test getting the date interval from a date period
     *
     * @return void
     *
     * @covers \Kusabi\Date\DatePeriod::getDateInterval
     */
    public function testGetDateInterval()
    {
        $interval = DateInterval::weeks(7);
        $period = new DatePeriod(DateTime::today(), $interval, DateTime::today()->addDays(7));
        $this->assertInstanceOf(DateInterval::class, $period->getDateInterval());
        $this->assertSame($interval->getSpec(), $period->getDateInterval()->getSpec());
    }

    /**
     * Test getting the start datetime from a date period
     *
     * @return void
     *
     * @covers \Kusabi\Date\DatePeriod::getEndDatetime
     */
    public function testGetEndDatetime()
    {
        $nextWeek = DateTime::today()->addDays(7);
        $period = new DatePeriod(DateTime::today(), DateInterval::day(), $nextWeek);
        $this->assertInstanceOf(DateTime::class, $period->getEndDatetime());
        $this->assertSame($nextWeek->getTimestamp(), $period->getEndDatetime()->getTimestamp());
    }

    /**
     * Test getting the start datetime from a date period
     *
     * @return void
     *
     * @covers \Kusabi\Date\DatePeriod::getStartDatetime
     */
    public function testGetStartDatetime()
    {
        $today = DateTime::today();
        $period = new DatePeriod($today, DateInterval::day(), DateTime::today()->addDays(7));
        $this->assertInstanceOf(DateTime::class, $period->getStartDatetime());
        $this->assertSame($today->getTimestamp(), $period->getStartDatetime()->getTimestamp());
    }
}
