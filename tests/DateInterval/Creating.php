<?php

namespace Kusabi\Date\Tests\DateInterval;

use DateInterval as NativeDateInterval;
use Exception;
use Kusabi\Date\DateInterval;
use PHPUnit\Framework\TestCase;

class Creating extends TestCase
{
    public function provideSpecs()
    {
        return [
            ['P1Y'],
            ['P1M'],
            ['P1D'],
            ['PT1H'],
            ['PT1M'],
            ['PT1S'],
            ['P1Y2M3D'],
            ['PT4H5M6S'],
            ['P1Y2M3DT4H5M6S'],
        ];
    }

    /**
     * Test the constructor with multiple specs
     *
     * @dataProvider provideSpecs
     *
     * @param string $spec
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::__construct
     *
     * @noinspection PhpDocMissingThrowsInspection
     * @noinspection PhpUnhandledExceptionInspection
     */
    public function testConstructor($spec)
    {
        $interval = new DateInterval($spec);
        $this->assertSame($spec, $interval->getSpec());
    }

    /**
     * Test the default value of the constructor is an empty interval spec
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::__construct
     */
    public function testConstructorDefaultValue()
    {
        $interval = new DateInterval();
        $this->assertSame(DateInterval::SPEC_EMPTY, $interval->getSpec());
    }

    /**
     * Test that we can create an instance using another instance
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::createFromInstance
     */
    public function testCreateFromInstance()
    {
        $interval = new DateInterval('P1Y2M3DT4H5M6S');
        $cloned = DateInterval::createFromInstance($interval);
        $this->assertNotSame($interval, $cloned);
        $this->assertEqualInterval($interval, $cloned);
    }

    /**
     * Test that we can create an instance using another legacy instance
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::createFromInstance
     */
    public function testCreateFromLegacyInstance()
    {
        $legacy = new NativeDateInterval('P1Y2M3DT4H5M6S');
        $interval = DateInterval::createFromInstance($legacy);
        $this->assertEqualInterval($legacy, $interval);
    }

    /**
     * Test that we can create from the individual unit values
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::createFromValues
     */
    public function testCreateFromValues()
    {
        $this->assertSame('PT0S', DateInterval::createFromValues()->getSpec());
        $this->assertSame('P1Y', DateInterval::createFromValues(1)->getSpec());
        $this->assertSame('P1M', DateInterval::createFromValues(null, 1)->getSpec());
        $this->assertSame('P7D', DateInterval::createFromValues(null, null, 1)->getSpec());
        $this->assertSame('P1D', DateInterval::createFromValues(null, null, null, 1)->getSpec());
        $this->assertSame('PT1H', DateInterval::createFromValues(null, null, null, null, 1)->getSpec());
        $this->assertSame('PT1M', DateInterval::createFromValues(null, null, null, null, null, 1)->getSpec());
        $this->assertSame('PT1S', DateInterval::createFromValues(null, null, null, null, null, null, 1)->getSpec());
        $this->assertSame('P1Y2M25D', DateInterval::createFromValues(1, 2, 3, 4)->getSpec());
        $this->assertSame('PT4H5M6S', DateInterval::createFromValues(null, null, null, null, 4, 5, 6)->getSpec());
        $this->assertSame('P1Y2M3DT4H5M6S', DateInterval::createFromValues(1, 2, null, 3, 4, 5, 6)->getSpec());
        $this->assertSame('P1Y2M25DT5H6M7S', DateInterval::createFromValues(1, 2, 3, 4, 5, 6, 7)->getSpec());
    }

    /**
     * Test the instance method with multiple specs
     *
     * @dataProvider provideSpecs
     *
     * @param string $spec
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::instance
     */
    public function testInstance($spec)
    {
        $this->assertSame($spec, DateInterval::instance($spec)->getSpec());
    }

    /**
     * Test the default value of the instance method is an empty interval spec
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::instance
     */
    public function testInstanceDefaultValue()
    {
        $this->assertSame(DateInterval::SPEC_EMPTY, DateInterval::instance()->getSpec());
    }

    /**
     * Test shorthand to create a day
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::day
     * @covers \Kusabi\Date\DateInterval::days
     */
    public function testShorthandConstructorDay()
    {
        $this->assertSame('P1D', DateInterval::day()->getSpec());
        $this->assertSame('P1D', DateInterval::days(1)->getSpec());
        $this->assertSame('P4D', DateInterval::days(4)->getSpec());
    }

    /**
     * Test shorthand to create an hour
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::hour
     * @covers \Kusabi\Date\DateInterval::hours
     */
    public function testShorthandConstructorHour()
    {
        $this->assertSame('PT1H', DateInterval::hour()->getSpec());
        $this->assertSame('PT1H', DateInterval::hours(1)->getSpec());
        $this->assertSame('PT4H', DateInterval::hours(4)->getSpec());
    }

    /**
     * Test shorthand to create a minute
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::minute
     * @covers \Kusabi\Date\DateInterval::minutes
     */
    public function testShorthandConstructorMinute()
    {
        $this->assertSame('PT1M', DateInterval::minute()->getSpec());
        $this->assertSame('PT1M', DateInterval::minutes(1)->getSpec());
        $this->assertSame('PT4M', DateInterval::minutes(4)->getSpec());
    }

    /**
     * Test shorthand to create a month
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::month
     * @covers \Kusabi\Date\DateInterval::months
     */
    public function testShorthandConstructorMonth()
    {
        $this->assertSame('P1M', DateInterval::month()->getSpec());
        $this->assertSame('P1M', DateInterval::months(1)->getSpec());
        $this->assertSame('P4M', DateInterval::months(4)->getSpec());
    }

    /**
     * Test shorthand to create a second
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::second
     * @covers \Kusabi\Date\DateInterval::seconds
     */
    public function testShorthandConstructorSecond()
    {
        $this->assertSame('PT1S', DateInterval::second()->getSpec());
        $this->assertSame('PT1S', DateInterval::seconds(1)->getSpec());
        $this->assertSame('PT4S', DateInterval::seconds(4)->getSpec());
    }

    /**
     * Test shorthand to create a week
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::week
     * @covers \Kusabi\Date\DateInterval::weeks
     */
    public function testShorthandConstructorWeek()
    {
        $this->assertSame('P7D', DateInterval::week()->getSpec());
        $this->assertSame('P7D', DateInterval::weeks(1)->getSpec());
        $this->assertSame('P28D', DateInterval::weeks(4)->getSpec());
    }

    /**
     * Test shorthand to create a year
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::year
     * @covers \Kusabi\Date\DateInterval::years
     */
    public function testShorthandConstructorYear()
    {
        $this->assertSame('P1Y', DateInterval::year()->getSpec());
        $this->assertSame('P1Y', DateInterval::years(1)->getSpec());
        $this->assertSame('P4Y', DateInterval::years(4)->getSpec());
    }

    protected function assertEqualInterval(NativeDateInterval $a, NativeDateInterval $b)
    {
        $this->assertSame($a->y, $b->y);
        $this->assertSame($a->m, $b->m);
        $this->assertSame($a->d, $b->d);
        $this->assertSame($a->h, $b->h);
        $this->assertSame($a->i, $b->i);
        $this->assertSame($a->s, $b->s);
        $this->assertSame($a->invert, $b->invert);
    }
}
