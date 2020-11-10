<?php

namespace Kusabi\Date\Tests\DateInterval;

use Kusabi\Date\DateInterval;
use PHPUnit\Framework\TestCase;

class Optimising extends TestCase
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
     * The number of seconds in a day
     *
     * @var int
     */
    const SECONDS_IN_DAY = self::SECONDS_IN_HOUR * self::HOURS_IN_DAY;

    /**
     * The number of seconds in an hour
     *
     * @var int
     */
    const SECONDS_IN_HOUR = self::SECONDS_IN_MINUTE * self::MINUTES_IN_HOUR;

    /**
     * The number of seconds in a minute
     *
     * @var int
     */
    const SECONDS_IN_MINUTE = 60;

    /**
     * The number of seconds in a month
     *
     * @var int
     */
    const SECONDS_IN_MONTH = self::SECONDS_IN_DAY * self::DAYS_IN_MONTH;

    /**
     * The number of seconds in a year
     *
     * @var int
     */
    const SECONDS_IN_YEAR = self::SECONDS_IN_MONTH * self::MONTHS_IN_YEAR;

    /**
     * Test the optimise method with overflowing seconds
     *
     * @covers \Kusabi\Date\DateInterval::optimise
     *
     * @return void
     */
    public function testOptimiseSeconds()
    {
        $this->assertSame('PT59S', DateInterval::seconds(self::SECONDS_IN_MINUTE - 1)->optimise()->getSpec());
        $this->assertSame('PT1M', DateInterval::seconds(self::SECONDS_IN_MINUTE)->optimise()->getSpec());
        $this->assertSame('PT1M1S', DateInterval::seconds(self::SECONDS_IN_MINUTE + 1)->optimise()->getSpec());
        $this->assertSame('PT2M10S', DateInterval::seconds((self::SECONDS_IN_MINUTE * 2) + 10)->optimise()->getSpec());

        $this->assertSame('PT59M59S', DateInterval::seconds(self::SECONDS_IN_HOUR - 1)->optimise()->getSpec());
        $this->assertSame('PT1H', DateInterval::seconds(self::SECONDS_IN_HOUR)->optimise()->getSpec());
        $this->assertSame('PT1H1S', DateInterval::seconds(self::SECONDS_IN_HOUR + 1)->optimise()->getSpec());
        $this->assertSame('PT1H1M1S', DateInterval::seconds(self::SECONDS_IN_HOUR + self::SECONDS_IN_MINUTE + 1)->optimise()->getSpec());

        $this->assertSame('PT23H59M59S', DateInterval::seconds(self::SECONDS_IN_DAY - 1)->optimise()->getSpec());
        $this->assertSame('P1D', DateInterval::seconds(self::SECONDS_IN_DAY)->optimise()->getSpec());
        $this->assertSame('P1DT1S', DateInterval::seconds(self::SECONDS_IN_DAY + 1)->optimise()->getSpec());
        $this->assertSame('P1DT1H', DateInterval::seconds(self::SECONDS_IN_DAY + self::SECONDS_IN_HOUR)->optimise()->getSpec());
        $this->assertSame('P1DT1H1S', DateInterval::seconds(self::SECONDS_IN_DAY + self::SECONDS_IN_HOUR + 1)->optimise()->getSpec());
        $this->assertSame('P1DT1H1M', DateInterval::seconds(self::SECONDS_IN_DAY + self::SECONDS_IN_HOUR + self::SECONDS_IN_MINUTE)->optimise()->getSpec());
        $this->assertSame('P1DT1H1M1S', DateInterval::seconds(self::SECONDS_IN_DAY + self::SECONDS_IN_HOUR + self::SECONDS_IN_MINUTE + 1)->optimise()->getSpec());

        $this->assertSame('P27DT23H59M59S', DateInterval::seconds(self::SECONDS_IN_MONTH - 1)->optimise()->getSpec());
        $this->assertSame('P1M', DateInterval::seconds(self::SECONDS_IN_MONTH)->optimise()->getSpec());
        $this->assertSame('P1MT1S', DateInterval::seconds(self::SECONDS_IN_MONTH + 1)->optimise()->getSpec());
        $this->assertSame('P1M1D', DateInterval::seconds(self::SECONDS_IN_MONTH + self::SECONDS_IN_DAY)->optimise()->getSpec());
        $this->assertSame('P1M1DT1S', DateInterval::seconds(self::SECONDS_IN_MONTH + self::SECONDS_IN_DAY + 1)->optimise()->getSpec());
        $this->assertSame('P1M1DT1H', DateInterval::seconds(self::SECONDS_IN_MONTH + self::SECONDS_IN_DAY + self::SECONDS_IN_HOUR)->optimise()->getSpec());
        $this->assertSame('P1M1DT1H1S', DateInterval::seconds(self::SECONDS_IN_MONTH + self::SECONDS_IN_DAY + self::SECONDS_IN_HOUR + 1)->optimise()->getSpec());
        $this->assertSame('P1M1DT1H1M', DateInterval::seconds(self::SECONDS_IN_MONTH + self::SECONDS_IN_DAY + self::SECONDS_IN_HOUR + self::SECONDS_IN_MINUTE)->optimise()->getSpec());
        $this->assertSame('P1M1DT1H1M1S', DateInterval::seconds(self::SECONDS_IN_MONTH + self::SECONDS_IN_DAY + self::SECONDS_IN_HOUR + self::SECONDS_IN_MINUTE + 1)->optimise()->getSpec());

        $this->assertSame('P11M27DT23H59M59S', DateInterval::seconds(self::SECONDS_IN_YEAR - 1)->optimise()->getSpec());
        $this->assertSame('P1Y', DateInterval::seconds(self::SECONDS_IN_YEAR)->optimise()->getSpec());
        $this->assertSame('P1YT1S', DateInterval::seconds(self::SECONDS_IN_YEAR + 1)->optimise()->getSpec());
    }

    /**
     * Test the optimised method returns an optimised clone
     *
     * @covers \Kusabi\Date\DateInterval::optimised
     *
     * @return void
     */
    public function testOptimisedReturnsClone()
    {
        $interval = DateInterval::seconds(999999999);
        $optimised = $interval->optimised();
        $this->assertNotSame($interval, $optimised);
        $this->assertSame('PT999999999S', $interval->getSpec());
        $this->assertSame('P34Y5M10DT1H46M39S', $optimised->getSpec());
    }
}
