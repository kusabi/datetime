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
     * Testing create from date values
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::createFromDate
     */
    public function testCreateFromDate()
    {
        $now = DateTime::now();
        $date = DateTime::createFromDate(2022, 02, 03);
        $this->assertSame('2022-02-03 '.$now->format('H:i:s'), $date->format('Y-m-d H:i:s'));

        $now = DateTime::now('Asia/Tokyo');
        $date = DateTime::createFromDate(2022, 02, 03, 'Asia/Tokyo');
        $this->assertSame('2022-02-03 '.$now->format('H:i:s'), $date->format('Y-m-d H:i:s'));
    }

    /**
     * Testing create from date and time values
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::createFromDateAndTime
     */
    public function testCreateFromDateAndTime()
    {
        $date = DateTime::createFromDateAndTime(2022, 02, 03, 10, 30, 20);
        $this->assertSame('2022-02-03 10:30:20.000000', $date->format('Y-m-d H:i:s.u'));

        $date = DateTime::createFromDateAndTime(2022, 02, 03, 10, 30, 20, 500);
        $this->assertSame('2022-02-03 10:30:20.000500', $date->format('Y-m-d H:i:s.u'));

        $date = DateTime::createFromDateAndTime(2022, 02, 03, 10, 30, 20, 0, 'Asia/Tokyo');
        $this->assertSame('2022-02-03 10:30:20.000000+09:00', $date->format('Y-m-d H:i:s.uP'));

        $date = DateTime::createFromDateAndTime(2022, 02, 03, 10, 30, 20, 500, 'Asia/Tokyo');
        $this->assertSame('2022-02-03 10:30:20.000500+09:00', $date->format('Y-m-d H:i:s.uP'));
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
     * Testing create from format returns an instance of DateTime instead of DateTime
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::createFromFormat
     */
    public function testCreateFromFormatWithTimezone()
    {
        $date = DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:00');
        $this->assertSame('2020-01-01 00:00:00+00:00', $date->format('Y-m-d H:i:sP'));

        $date = DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:00', 'Asia/Tokyo');
        $this->assertSame('2020-01-01 00:00:00+09:00', $date->format('Y-m-d H:i:sP'));

        $date = DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:00', DateTimeZone::TokyoAsia());
        $this->assertSame('2020-01-01 00:00:00+09:00', $date->format('Y-m-d H:i:sP'));
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
        $c = DateTime::createFromTimestamp(1594283757, 'Asia/Tokyo');
        $this->assertSame('2020-07-09 08:35:57 1594283757.000000', $a->format('Y-m-d H:i:s U.u'));
        $this->assertSame('2020-07-09 11:35:57 1594283757.000000', $b->format('Y-m-d H:i:s U.u'));
        $this->assertSame('2020-07-09 17:35:57 1594283757.000000', $c->format('Y-m-d H:i:s U.u'));
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
        $c = DateTime::createFromTimestamp('0.460602 1594283757', 'Asia/Tokyo');
        $this->assertSame('2020-07-09 08:35:57 1594283757.460602', $a->format('Y-m-d H:i:s U.u'));
        $this->assertSame('2020-07-09 11:35:57 1594283757.460602', $b->format('Y-m-d H:i:s U.u'));
        $this->assertSame('2020-07-09 17:35:57 1594283757.460602', $c->format('Y-m-d H:i:s U.u'));
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
        $c = DateTime::createFromTimestamp(1594283757.4606, 'Asia/Tokyo');
        $this->assertSame('2020-07-09 08:35:57 1594283757.460600', $a->format('Y-m-d H:i:s U.u'));
        $this->assertSame('2020-07-09 11:35:57 1594283757.460600', $b->format('Y-m-d H:i:s U.u'));
        $this->assertSame('2020-07-09 17:35:57 1594283757.460600', $c->format('Y-m-d H:i:s U.u'));
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
        $a = DateTime::instance('now', DateTimeZone::LondonEurope());
        $b = DateTime::instance('now', 'Asia/Tokyo');
        $this->assertSame($legacy->getTimestamp(), $a->getTimestamp());
        $this->assertSame($legacy->getTimezone()->getName(), $a->getTimezone()->getName());
        $this->assertSame($legacy->getTimestamp(), $b->getTimestamp());
        $this->assertNotSame($legacy->getTimezone()->getName(), $b->getTimezone()->getName());
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
        $this->assertSame($date->cloned()->addHours(9)->format('Y-m-d H:i:s'), DateTime::now('Asia/Tokyo')->format('Y-m-d H:i:s'));
        $this->assertSame($date->cloned()->subHours(7)->format('Y-m-d H:i:s'), DateTime::now(DateTimeZone::LosAngelesAmerica())->format('Y-m-d H:i:s'));
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
        $this->assertSame($date->cloned()->startOfDay()->format('Y-m-d H:i:s'), DateTime::today()->format('Y-m-d H:i:s'));
        $this->assertSame($date->cloned()->addHours(9)->startOfDay()->format('Y-m-d H:i:s'), DateTime::today('Asia/Tokyo')->format('Y-m-d H:i:s'));
        $this->assertSame($date->cloned()->subHours(7)->startOfDay()->format('Y-m-d H:i:s'), DateTime::today(DateTimeZone::LosAngelesAmerica())->format('Y-m-d H:i:s'));
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
        $date->add(new NativeDateInterval('P1D'));
        $this->assertSame($date->cloned()->startOfDay()->format('Y-m-d H:i:s'), DateTime::tomorrow()->format('Y-m-d H:i:s'));
        $this->assertSame($date->cloned()->addHours(9)->startOfDay()->format('Y-m-d H:i:s'), DateTime::tomorrow('Asia/Tokyo')->format('Y-m-d H:i:s'));
        $this->assertSame($date->cloned()->subHours(7)->startOfDay()->format('Y-m-d H:i:s'), DateTime::tomorrow(DateTimeZone::LosAngelesAmerica())->format('Y-m-d H:i:s'));
    }

    /**
     * Testing create shorthand for yesterday
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
        $date->sub(new NativeDateInterval('P1D'));
        $this->assertSame($date->cloned()->startOfDay()->format('Y-m-d H:i:s'), DateTime::yesterday()->format('Y-m-d H:i:s'));
        $this->assertSame($date->cloned()->addHours(9)->startOfDay()->format('Y-m-d H:i:s'), DateTime::yesterday('Asia/Tokyo')->format('Y-m-d H:i:s'));
        $this->assertSame($date->cloned()->subHours(7)->startOfDay()->format('Y-m-d H:i:s'), DateTime::yesterday(DateTimeZone::LosAngelesAmerica())->format('Y-m-d H:i:s'));
    }
}
