<?php

namespace Kusabi\Date\Tests\DateInterval;

use DateInterval as NativeDateInterval;
use Exception;
use Kusabi\Date\DateInterval;
use PHPUnit\Framework\TestCase;

class Modifying extends TestCase
{
    /**
     * Test adding days
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::addDay
     * @covers \Kusabi\Date\DateInterval::addDays
     */
    public function testAddDays()
    {
        $interval = new DateInterval();
        $this->assertSame('PT0S', $interval->getSpec());
        $this->assertSame('P1D', $interval->addDay()->getSpec());
        $this->assertSame('P14D', $interval->addDays(13)->getSpec());
        $this->assertSame('P1M', $interval->addDays(14)->getSpec());
    }

    /**
     * Test adding hours
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::addHour
     * @covers \Kusabi\Date\DateInterval::addHours
     */
    public function testAddHours()
    {
        $interval = new DateInterval();
        $this->assertSame('PT0S', $interval->getSpec());
        $this->assertSame('PT1H', $interval->addHour()->getSpec());
        $this->assertSame('PT12H', $interval->addHours(11)->getSpec());
        $this->assertSame('P1D', $interval->addHours(12)->getSpec());
    }

    /**
     * Test adding minutes
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::addMinute
     * @covers \Kusabi\Date\DateInterval::addMinutes
     */
    public function testAddMinutes()
    {
        $interval = new DateInterval();
        $this->assertSame('PT0S', $interval->getSpec());
        $this->assertSame('PT1M', $interval->addMinute()->getSpec());
        $this->assertSame('PT30M', $interval->addMinutes(29)->getSpec());
        $this->assertSame('PT1H', $interval->addMinutes(30)->getSpec());
    }

    /**
     * Test that the addX methods can be chained
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::addSecond
     * @covers \Kusabi\Date\DateInterval::addSeconds
     * @covers \Kusabi\Date\DateInterval::addMinute
     * @covers \Kusabi\Date\DateInterval::addMinutes
     * @covers \Kusabi\Date\DateInterval::addHour
     * @covers \Kusabi\Date\DateInterval::addHours
     * @covers \Kusabi\Date\DateInterval::addDay
     * @covers \Kusabi\Date\DateInterval::addDays
     * @covers \Kusabi\Date\DateInterval::addMonth
     * @covers \Kusabi\Date\DateInterval::addMonths
     * @covers \Kusabi\Date\DateInterval::addYear
     * @covers \Kusabi\Date\DateInterval::addYears
     */
    public function testAddMixedChain()
    {
        $interval = new DateInterval();
        $this->assertSame('PT0S', $interval->getSpec());
        $this->assertSame('P2Y3M4DT5H6M7S', $interval->addYear()->addYears(1)->addMonth()->addMonths(2)->addDay()->addDays(3)->addHour()->addHours(4)->addMinute()->addMinutes(5)->addSecond()->addSeconds(6)->getSpec());
    }

    /**
     * Test adding months
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::addMonth
     * @covers \Kusabi\Date\DateInterval::addMonths
     */
    public function testAddMonths()
    {
        $interval = new DateInterval();
        $this->assertSame('PT0S', $interval->getSpec());
        $this->assertSame('P1M', $interval->addMonth()->getSpec());
        $this->assertSame('P6M', $interval->addMonths(5)->getSpec());
        $this->assertSame('P1Y', $interval->addMonths(6)->getSpec());
    }

    /**
     * Test adding a negative interval instance
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::addInterval
     */
    public function testAddNegativeInterval()
    {
        $a = new DateInterval('P1Y1MT11S');
        $b = new DateInterval('P1YT50S');
        $b->invert();
        $a->addInterval($b);
        $this->assertSame('P27DT23H59M21S', $a->getSpec());
    }

    /**
     * Test adding a negative legacy interval instance
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::addInterval
     */
    public function testAddNegativeIntervalLegacy()
    {
        $a = new DateInterval('P1Y1MT11S');
        $b = new NativeDateInterval('P1YT50S');
        $b->invert = true;
        $a->addInterval($b);
        $this->assertSame('P27DT23H59M21S', $a->getSpec());
    }

    /**
     * Test adding a positive interval instance
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::addInterval
     */
    public function testAddPositiveInterval()
    {
        $a = new DateInterval('P1YT50S');
        $b = new DateInterval('P1Y1MT11S');
        $a->addInterval($b);
        $this->assertSame('P2Y1MT1M1S', $a->getSpec());
    }

    /**
     * Test adding a positive legacy interval instance
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::addInterval
     */
    public function testAddPositiveIntervalLegacy()
    {
        $a = new DateInterval('P1YT50S');
        $b = new NativeDateInterval('P1Y1MT11S');
        $a->addInterval($b);
        $this->assertSame('P2Y1MT1M1S', $a->getSpec());
    }

    /**
     * Test adding seconds
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::addSecond
     * @covers \Kusabi\Date\DateInterval::addSeconds
     */
    public function testAddSeconds()
    {
        $interval = new DateInterval();
        $this->assertSame('PT0S', $interval->getSpec());
        $this->assertSame('PT1S', $interval->addSecond()->getSpec());
        $this->assertSame('PT30S', $interval->addSeconds(29)->getSpec());
        $this->assertSame('PT1M', $interval->addSeconds(30)->getSpec());
    }

    /**
     * Test adding years
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::addYear
     * @covers \Kusabi\Date\DateInterval::addYears
     */
    public function testAddYears()
    {
        $interval = DateInterval::years(1);
        $this->assertSame('P1Y', $interval->getSpec());
        $this->assertSame('P2Y', $interval->addYear()->getSpec());
        $this->assertSame('P102Y', $interval->addYears(100)->getSpec());
    }

    /**
     * Test removing days
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::subDay
     * @covers \Kusabi\Date\DateInterval::subDays
     */
    public function testSubDays()
    {
        $interval = DateInterval::months(2);
        $this->assertSame('P2M', $interval->getSpec());
        $this->assertSame('P1M27D', $interval->subDay()->getSpec());
        $this->assertSame('P1M14D', $interval->subDays(13)->getSpec());
        $this->assertSame('P1M', $interval->subDays(14)->getSpec());
        $this->assertSame('P14D', $interval->subDays(14)->getSpec());
        $this->assertSame('PT0S', $interval->subDays(14)->getSpec());

        $interval->subDay();
        $this->assertSame('P1D', $interval->getSpec());
        $this->assertTrue($interval->isInverted());

        $interval->subDays(26);
        $this->assertSame('P27D', $interval->getSpec());
        $this->assertTrue($interval->isInverted());

        $interval->subDay();
        $this->assertSame('P1M', $interval->getSpec());
        $this->assertTrue($interval->isInverted());

        $interval->addDays(29);
        $this->assertSame('P1D', $interval->getSpec());
        $this->assertFalse($interval->isInverted());
    }

    /**
     * Test removing hours
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::subHour
     * @covers \Kusabi\Date\DateInterval::subHours
     */
    public function testSubHours()
    {
        $interval = DateInterval::days(2);
        $this->assertSame('P2D', $interval->getSpec());
        $this->assertSame('P1DT23H', $interval->subHour()->getSpec());
        $this->assertSame('P1DT12H', $interval->subHours(11)->getSpec());
        $this->assertSame('P1D', $interval->subHours(12)->getSpec());
        $this->assertSame('PT12H', $interval->subHours(12)->getSpec());
        $this->assertSame('PT0S', $interval->subHours(12)->getSpec());

        $interval->subHour();
        $this->assertSame('PT1H', $interval->getSpec());
        $this->assertTrue($interval->isInverted());

        $interval->subHours(22);
        $this->assertSame('PT23H', $interval->getSpec());
        $this->assertTrue($interval->isInverted());

        $interval->subHour();
        $this->assertSame('P1D', $interval->getSpec());
        $this->assertTrue($interval->isInverted());

        $interval->addHours(25);
        $this->assertSame('PT1H', $interval->getSpec());
        $this->assertFalse($interval->isInverted());
    }

    /**
     * Test removing minutes
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::subMinute
     * @covers \Kusabi\Date\DateInterval::subMinutes
     */
    public function testSubMinutes()
    {
        $interval = DateInterval::hours(2);
        $this->assertSame('PT2H', $interval->getSpec());
        $this->assertSame('PT1H59M', $interval->subMinute()->getSpec());
        $this->assertSame('PT1H30M', $interval->subMinutes(29)->getSpec());
        $this->assertSame('PT1H', $interval->subMinutes(30)->getSpec());
        $this->assertSame('PT30M', $interval->subMinutes(30)->getSpec());
        $this->assertSame('PT0S', $interval->subMinutes(30)->getSpec());

        $interval->subMinute();
        $this->assertSame('PT1M', $interval->getSpec());
        $this->assertTrue($interval->isInverted());

        $interval->subMinutes(58);
        $this->assertSame('PT59M', $interval->getSpec());
        $this->assertTrue($interval->isInverted());

        $interval->subMinute();
        $this->assertSame('PT1H', $interval->getSpec());
        $this->assertTrue($interval->isInverted());

        $interval->addMinutes(61);
        $this->assertSame('PT1M', $interval->getSpec());
        $this->assertFalse($interval->isInverted());
    }

    public function testSubMixedChain()
    {
        $interval = new DateInterval();
        $this->assertSame('PT0S', $interval->getSpec());
        $this->assertSame('P1Y2M3DT4H5M6S', $interval->subYears(1)->subMonths(2)->subDays(3)->subHours(4)->subMinutes(5)->subSeconds(6)->getSpec());
        $this->assertTrue($interval->isInverted());
    }

    /**
     * Test removing months
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::subMonth
     * @covers \Kusabi\Date\DateInterval::subMonths
     */
    public function testSubMonths()
    {
        $interval = DateInterval::years(2);
        $this->assertSame('P2Y', $interval->getSpec());
        $this->assertSame('P1Y11M', $interval->subMonth()->getSpec());
        $this->assertSame('P1Y6M', $interval->subMonths(5)->getSpec());
        $this->assertSame('P1Y', $interval->subMonths(6)->getSpec());
        $this->assertSame('P6M', $interval->subMonths(6)->getSpec());
        $this->assertSame('PT0S', $interval->subMonths(6)->getSpec());

        $interval->subMonth();
        $this->assertSame('P1M', $interval->getSpec());
        $this->assertTrue($interval->isInverted());

        $interval->subMonths(10);
        $this->assertSame('P11M', $interval->getSpec());
        $this->assertTrue($interval->isInverted());

        $interval->subMonth();
        $this->assertSame('P1Y', $interval->getSpec());
        $this->assertTrue($interval->isInverted());

        $interval->addMonths(13);
        $this->assertSame('P1M', $interval->getSpec());
        $this->assertFalse($interval->isInverted());
    }

    /**
     * Test removing seconds
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::subSecond
     * @covers \Kusabi\Date\DateInterval::subSeconds
     */
    public function testSubSeconds()
    {
        $interval = DateInterval::minutes(2);
        $this->assertSame('PT2M', $interval->getSpec());
        $this->assertSame('PT1M59S', $interval->subSecond()->getSpec());
        $this->assertSame('PT59S', $interval->subSeconds(60)->getSpec());
        $this->assertSame('PT30S', $interval->subSeconds(29)->getSpec());
        $this->assertSame('PT0S', $interval->subSeconds(30)->getSpec());

        $interval->subSecond();
        $this->assertSame('PT1S', $interval->getSpec());
        $this->assertTrue($interval->isInverted());

        $interval->subSeconds(58);
        $this->assertSame('PT59S', $interval->getSpec());
        $this->assertTrue($interval->isInverted());

        $interval->subSecond();
        $this->assertSame('PT1M', $interval->getSpec());
        $this->assertTrue($interval->isInverted());

        $interval->addSeconds(61);
        $this->assertSame('PT1S', $interval->getSpec());
        $this->assertFalse($interval->isInverted());
    }

    /**
     * Test removing years
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::subYear
     * @covers \Kusabi\Date\DateInterval::subYears
     */
    public function testSubYears()
    {
        $interval = DateInterval::years(200);
        $this->assertSame('P200Y', $interval->getSpec());
        $this->assertSame('P199Y', $interval->subYear()->getSpec());
        $this->assertSame('P150Y', $interval->subYears(49)->getSpec());
        $this->assertSame('P100Y', $interval->subYears(50)->getSpec());
        $this->assertSame('P50Y', $interval->subYears(50)->getSpec());
        $this->assertSame('PT0S', $interval->subYears(50)->getSpec());

        $interval->subYear();
        $this->assertSame('P1Y', $interval->getSpec());
        $this->assertTrue($interval->isInverted());

        $interval->subYear();
        $this->assertSame('P2Y', $interval->getSpec());
        $this->assertTrue($interval->isInverted());

        $interval->addYear();
        $this->assertSame('P1Y', $interval->getSpec());
        $this->assertTrue($interval->isInverted());

        $interval->subYears(49);
        $this->assertSame('P50Y', $interval->getSpec());
        $this->assertTrue($interval->isInverted());

        $interval->addYears(1000);
        $this->assertSame('P950Y', $interval->getSpec());
        $this->assertFalse($interval->isInverted());
    }

    /**
     * Test subtracting a negative interval instance
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::subInterval
     */
    public function testSubtractNegativeInterval()
    {
        $a = new DateInterval('P1YT50S');
        $b = new DateInterval('P1Y1MT11S');
        $b->invert();
        $a->subInterval($b);
        $this->assertSame('P2Y1MT1M1S', $a->getSpec());
    }

    /**
     * Test subtracting a negative legacy interval instance
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::subInterval
     */
    public function testSubtractNegativeLegacyInterval()
    {
        $a = new DateInterval('P1YT50S');
        $b = new NativeDateInterval('P1Y1MT11S');
        $b->invert = true;
        $a->subInterval($b);
        $this->assertSame('P2Y1MT1M1S', $a->getSpec());
    }

    /**
     * Test subtracting a positive interval instance
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::subInterval
     */
    public function testSubtractPositiveInterval()
    {
        $a = new DateInterval('P1Y1MT11S');
        $b = new DateInterval('P1YT50S');
        $a->subInterval($b);
        $this->assertSame('P27DT23H59M21S', $a->getSpec());
    }

    /**
     * Test subtracting a positive legacy interval instance
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::subInterval
     */
    public function testSubtractPositiveLegacyInterval()
    {
        $a = new DateInterval('P1Y1MT11S');
        $b = new NativeDateInterval('P1YT50S');
        $a->subInterval($b);
        $this->assertSame('P27DT23H59M21S', $a->getSpec());
    }
}
