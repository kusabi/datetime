<?php

namespace Kusabi\Date\Tests\DateTime;

use Carbon\Carbon;
use DateInterval as NativeDateInterval;
use DateTime as NativeDateTime;
use Exception;
use Kusabi\Date\DateTime;
use Kusabi\Date\DateTimeZone;
use PHPUnit\Framework\TestCase;

class Creating extends TestCase
{
    /**
     * Testing create from another carbon instance
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::createFromInstance
     */
    public function testCreateFromCarbonInstance()
    {
        $carbon = Carbon::createFromFormat('Y-m-d', '2020-01-01');
        $date = DateTime::createFromInstance($carbon);
        $this->assertSame($carbon->getTimestamp(), $date->getTimestamp());
    }

    /**
     * Testing create from format returns an instance of DateTime instead of DateTime
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::createFromFormat
     */
    public function testCreateFromFormat()
    {
        $date = DateTime::createFromFormat('Y-m-d', '2020-01-01');
        $this->assertInstanceOf(NativeDateTime::class, $date);
        $this->assertInstanceOf(DateTime::class, $date);
    }

    /**
     * Testing create from format returns false if it fails
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::createFromFormat
     */
    public function testCreateFromFormatReturnsFalseOnError()
    {
        $this->assertFalse(DateTime::createFromFormat('Y-m-d', '2020'));
    }

    /**
     * Testing create from another instance
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::createFromInstance
     */
    public function testCreateFromInstance()
    {
        $date = DateTime::createFromFormat('Y-m-d', '2020-01-01');
        $instance = DateTime::createFromInstance($date);
        $this->assertSame($instance->getTimestamp(), $date->getTimestamp());
        $this->assertNotSame($instance, $date);
    }

    /**
     * Testing create from another lagacy instance
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::createFromInstance
     */
    public function testCreateFromLegacyInstance()
    {
        $legacy = DateTime::createFromFormat('Y-m-d', '2020-01-01');
        $date = DateTime::createFromInstance($legacy);
        $this->assertSame($legacy->getTimestamp(), $date->getTimestamp());
    }

    /**
     * Testing create from timestamp
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::createFromTimestamp
     */
    public function testCreateFromTimestamp()
    {
        $a = DateTime::createFromTimestamp(1594283757);
        $b = DateTime::createFromTimestamp(1594283757, DateTimeZone::AddisAbabaAfrica());
        $this->assertSame('2020-07-09 08:35:57 1594283757.000000', $a->format('Y-m-d H:i:s U.u'));
        $this->assertSame('2020-07-09 11:35:57 1594283757.000000', $b->format('Y-m-d H:i:s U.u'));
    }

    /**
     * Testing create from timestamp using the string value from `microtime(false)`
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::createFromTimestamp
     */
    public function testCreateFromTimestampMicroTimeFalse()
    {
        $a = DateTime::createFromTimestamp('0.460602 1594283757');
        $b = DateTime::createFromTimestamp('0.460602 1594283757', DateTimeZone::AddisAbabaAfrica());
        $this->assertSame('2020-07-09 08:35:57 1594283757.460602', $a->format('Y-m-d H:i:s U.u'));
        $this->assertSame('2020-07-09 11:35:57 1594283757.460602', $b->format('Y-m-d H:i:s U.u'));
    }

    /**
     * Testing create from timestamp using the float value from `microtime(true)`
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::createFromTimestamp
     */
    public function testCreateFromTimestampMicroTimeTrue()
    {
        $a = DateTime::createFromTimestamp(1594283757.4606);
        $b = DateTime::createFromTimestamp(1594283757.4606, DateTimeZone::AddisAbabaAfrica());
        $this->assertSame('2020-07-09 08:35:57 1594283757.460600', $a->format('Y-m-d H:i:s U.u'));
        $this->assertSame('2020-07-09 11:35:57 1594283757.460600', $b->format('Y-m-d H:i:s U.u'));
    }

    /**
     * Testing create new instance using the chain-able instance method
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::instance
     */
    public function testInstance()
    {
        $legacy = new DateTime('now', DateTimeZone::LondonEurope());
        $date = DateTime::instance('now', DateTimeZone::LondonEurope());
        $this->assertSame($legacy->getTimestamp(), $date->getTimestamp());
    }

    /**
     * Testing create short hand for now
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::now
     */
    public function testNow()
    {
        $date = new DateTime();
        $this->assertSame($date->format('Y-m-d H:i:s'), DateTime::now()->format('Y-m-d H:i:s'));
    }

    /**
     * Testing create short hand for today
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::today
     */
    public function testToday()
    {
        $date = new DateTime();
        $date->setTime(0, 0, 0);
        $this->assertSame($date->format('Y-m-d H:i:s'), DateTime::today()->format('Y-m-d H:i:s'));
    }

    /**
     * Testing create short hand for tomorrow
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::tomorrow
     */
    public function testTomorrow()
    {
        $date = new DateTime();
        $date->setTime(0, 0, 0);
        $date->add(new NativeDateInterval('P1D'));
        $this->assertSame($date->format('Y-m-d H:i:s'), DateTime::tomorrow()->format('Y-m-d H:i:s'));
    }

    /**
     * Testing create short hand for yesterday
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::yesterday
     */
    public function testYesterday()
    {
        $date = new DateTime();
        $date->setTime(0, 0, 0);
        $date->sub(new NativeDateInterval('P1D'));
        $this->assertSame($date->format('Y-m-d H:i:s'), DateTime::yesterday()->format('Y-m-d H:i:s'));
    }
}
