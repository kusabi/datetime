<?php

namespace Kusabi\Date\Tests\DateTime;

use DateTimeZone as NativeDateTimeZone;
use Kusabi\Date\DateTime;
use Kusabi\Date\DateTimeZone;
use PHPUnit\Framework\TestCase;

class Modifying extends TestCase
{
    /**
     * Test adding a day
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::addDay
     */
    public function testAddDay()
    {
        // Increase unit
        $this->assertSame('2020-01-02 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:00')->addDay()->format('Y-m-d H:i:s'));

        // Tick over month
        $this->assertSame('2020-03-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-02-29 00:00:00')->addDay()->format('Y-m-d H:i:s'));

        // Tick over year
        $this->assertSame('2021-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-12-31 00:00:00')->addDay()->format('Y-m-d H:i:s'));
    }

    /**
     * Test adding days
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::addDays
     */
    public function testAddDays()
    {
        // Increase unit
        $this->assertSame('2020-01-06 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:00')->addDays(5)->format('Y-m-d H:i:s'));

        // Tick over month
        $this->assertSame('2020-03-03 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-02-27 00:00:00')->addDays(5)->format('Y-m-d H:i:s'));

        // Tick over year
        $this->assertSame('2021-01-02 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-12-28 00:00:00')->addDays(5)->format('Y-m-d H:i:s'));
    }

    /**
     * Test adding an hour
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::addHour
     */
    public function testAddHour()
    {
        // Increase unit
        $this->assertSame('2020-01-01 01:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:00')->addHour()->format('Y-m-d H:i:s'));

        // Tick over day
        $this->assertSame('2020-01-02 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 23:00:00')->addHour()->format('Y-m-d H:i:s'));

        // Tick over month
        $this->assertSame('2020-03-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-02-29 23:00:00')->addHour()->format('Y-m-d H:i:s'));

        // Tick over year
        $this->assertSame('2021-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-12-31 23:00:00')->addHour()->format('Y-m-d H:i:s'));
    }

    /**
     * Test adding hours
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::addHours
     */
    public function testAddHours()
    {
        // Increase unit
        $this->assertSame('2020-01-01 12:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:00')->addHours(12)->format('Y-m-d H:i:s'));

        // Tick over day
        $this->assertSame('2020-01-02 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 12:00:00')->addHours(12)->format('Y-m-d H:i:s'));

        // Tick over month
        $this->assertSame('2020-03-01 20:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-02-29 23:00:00')->addHours(21)->format('Y-m-d H:i:s'));

        // Tick over year
        $this->assertSame('2021-01-01 11:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-12-31 23:00:00')->addHours(12)->format('Y-m-d H:i:s'));
    }

    /**
     * Test adding a minute
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::addMinute
     */
    public function testAddMinute()
    {
        // Increase unit
        $this->assertSame('2020-01-01 00:01:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:00')->addMinute()->format('Y-m-d H:i:s'));

        // Tick over hour
        $this->assertSame('2020-01-01 01:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:59:00')->addMinute()->format('Y-m-d H:i:s'));

        // Tick over day
        $this->assertSame('2020-01-02 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 23:59:00')->addMinute()->format('Y-m-d H:i:s'));

        // Tick over month
        $this->assertSame('2020-03-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-02-29 23:59:00')->addMinute()->format('Y-m-d H:i:s'));

        // Tick over year
        $this->assertSame('2021-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-12-31 23:59:00')->addMinute()->format('Y-m-d H:i:s'));
    }

    /**
     * Test adding minutes
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::addMinutes
     */
    public function testAddMinutes()
    {
        // Increase unit
        $this->assertSame('2020-01-01 00:30:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:00')->addMinutes(30)->format('Y-m-d H:i:s'));

        // Tick over hour
        $this->assertSame('2020-01-01 01:29:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:59:00')->addMinutes(30)->format('Y-m-d H:i:s'));

        // Tick over day
        $this->assertSame('2020-01-02 00:29:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 23:59:00')->addMinutes(30)->format('Y-m-d H:i:s'));

        // Tick over month
        $this->assertSame('2020-03-01 00:29:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-02-29 23:59:00')->addMinutes(30)->format('Y-m-d H:i:s'));

        // Tick over year
        $this->assertSame('2021-01-01 00:29:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-12-31 23:59:00')->addMinutes(30)->format('Y-m-d H:i:s'));
    }

    /**
     * Test adding a month
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::addMonth
     */
    public function testAddMonth()
    {
        // Increase unit
        $this->assertSame('2020-02-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:00')->addMonth()->format('Y-m-d H:i:s'));

        // Wrap extra days into next month
        $this->assertSame('2020-03-02 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-31 00:00:00')->addMonth()->format('Y-m-d H:i:s'));

        // Tick over year
        $this->assertSame('2021-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-12-01 00:00:00')->addMonth()->format('Y-m-d H:i:s'));
    }

    /**
     * Test adding months
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::addMonths
     */
    public function testAddMonths()
    {
        // Increase unit
        $this->assertSame('2020-07-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:00')->addMonths(6)->format('Y-m-d H:i:s'));
    }

    /**
     * Test adding a second
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::addSecond
     */
    public function testAddSecond()
    {
        // Increase unit
        $this->assertSame('2020-01-01 00:00:01', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:00')->addSecond()->format('Y-m-d H:i:s'));

        // Tick over to minute
        $this->assertSame('2020-01-01 00:01:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:59')->addSecond()->format('Y-m-d H:i:s'));

        // Tick over to hour
        $this->assertSame('2020-01-01 01:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:59:59')->addSecond()->format('Y-m-d H:i:s'));

        // Tick over to day
        $this->assertSame('2020-01-02 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 23:59:59')->addSecond()->format('Y-m-d H:i:s'));

        // Tick over to month
        $this->assertSame('2020-03-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-02-29 23:59:59')->addSecond()->format('Y-m-d H:i:s'));

        // Tick over to year
        $this->assertSame('2021-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-12-31 23:59:59')->addSecond()->format('Y-m-d H:i:s'));
    }

    /**
     * Test adding seconds
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::addSeconds
     */
    public function testAddSeconds()
    {
        // Increase unit
        $this->assertSame('2020-01-01 00:00:30', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:00')->addSeconds(30)->format('Y-m-d H:i:s'));

        // Tick over to minute
        $this->assertSame('2020-01-01 00:01:29', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:59')->addSeconds(30)->format('Y-m-d H:i:s'));

        // Tick over to hour
        $this->assertSame('2020-01-01 01:00:29', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:59:59')->addSeconds(30)->format('Y-m-d H:i:s'));

        // Tick over to day
        $this->assertSame('2020-01-02 00:00:29', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 23:59:59')->addSeconds(30)->format('Y-m-d H:i:s'));

        // Tick over to month
        $this->assertSame('2020-03-01 00:00:29', DateTime::createFromFormat('Y-m-d H:i:s', '2020-02-29 23:59:59')->addSeconds(30)->format('Y-m-d H:i:s'));

        // Tick over to year
        $this->assertSame('2021-01-01 00:00:29', DateTime::createFromFormat('Y-m-d H:i:s', '2020-12-31 23:59:59')->addSeconds(30)->format('Y-m-d H:i:s'));
    }

    /**
     * Test adding a year
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::addYear
     */
    public function testAddYear()
    {
        $this->assertSame('2021-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:00')->addYear()->format('Y-m-d H:i:s'));
    }

    /**
     * Test adding years
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::addYears
     */
    public function testAddYears()
    {
        $this->assertSame('2021-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:00')->addYears(1)->format('Y-m-d H:i:s'));
        $this->assertSame('2030-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:00')->addYears(10)->format('Y-m-d H:i:s'));
        $this->assertSame('2120-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:00')->addYears(100)->format('Y-m-d H:i:s'));
        $this->assertSame('3020-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:00')->addYears(1000)->format('Y-m-d H:i:s'));
    }

    /**
     * Test setting to the end of the day
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::endOfDay
     */
    public function testEndOfDay()
    {
        $this->assertSame(date('Y-m-d').' 23:59:59', DateTime::now()->endOfDay()->format('Y-m-d H:i:s'));
    }

    /**
     * Test setting to the end of the month
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::endOfMonth
     */
    public function testEndOfMonth()
    {
        $this->assertSame('2020-01-31', DateTime::createFromFormat('Y-m-d', '2020-01-01')->endOfMonth()->format('Y-m-d'));
        $this->assertSame('2020-02-29', DateTime::createFromFormat('Y-m-d', '2020-02-05')->endOfMonth()->format('Y-m-d'));
        $this->assertSame('2019-02-28', DateTime::createFromFormat('Y-m-d', '2019-02-05')->endOfMonth()->format('Y-m-d'));
    }

    /**
     * Test setting day of the month
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::setDay
     */
    public function testSetDay()
    {
        $this->assertInstanceOf(DateTime::class, DateTime::createFromFormat('Y-m-d', '1990-01-01')->setDay(1));
        $this->assertSame('1990-01-05', DateTime::createFromFormat('Y-m-d', '1990-01-01')->setDay(5)->format('Y-m-d'));
        $this->assertSame('2020-02-29', DateTime::createFromFormat('Y-m-d', '2020-02-01')->setDay(29)->format('Y-m-d'));
        $this->assertSame('2019-03-01', DateTime::createFromFormat('Y-m-d', '2019-02-01')->setDay(29)->format('Y-m-d'));
    }

    /**
     * Test setting from a custom format
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::setFromFormat
     */
    public function testSetFromFormat()
    {
        $date = DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:00');
        $this->assertSame('2020-01-01 00:00:00', $date->format('Y-m-d H:i:s'));

        $date->setFromFormat('Y-m-d H:i:s', '1970-10-31 19:30:00');
        $this->assertSame('1970-10-31 19:30:00', $date->format('Y-m-d H:i:s'));

        $date->setFromFormat('dmYHis', '02032030093009');
        $this->assertSame('2030-03-02 09:30:09', $date->format('Y-m-d H:i:s'));
    }

    /**
     * Test setting the month
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::setMonth
     */
    public function testSetMonth()
    {
        $this->assertInstanceOf(DateTime::class, DateTime::createFromFormat('Y-m-d', '1990-01-01')->setMonth(1));
        $this->assertSame('1990-05-01', DateTime::createFromFormat('Y-m-d', '1990-01-01')->setMonth(5)->format('Y-m-d'));
        $this->assertSame('1970-07-25', DateTime::createFromFormat('Y-m-d', '1970-02-25')->setMonth(7)->format('Y-m-d'));
        $this->assertSame('2020-03-29', DateTime::createFromFormat('Y-m-d', '2020-02-29')->setMonth(3)->format('Y-m-d'));
        $this->assertSame('2020-03-01', DateTime::createFromFormat('Y-m-d', '2020-03-30')->setMonth(2)->format('Y-m-d'));
        $this->assertSame('2019-03-02', DateTime::createFromFormat('Y-m-d', '2019-03-30')->setMonth(2)->format('Y-m-d'));
    }

    /**
     * Test set timezone using a legacy timezone
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::setTimezone
     */
    public function testSetTimezoneWithLegacyTimezone()
    {
        $date = DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:00');
        $this->assertInstanceOf(DateTime::class, $date->setTimezone(new NativeDateTimeZone('Europe/London')));
        $this->assertSame('Europe/London', $date->getTimezone()->getName());
        $this->assertSame('2020-01-01 00:00:00', $date->format('Y-m-d H:i:s'));

        // Set timezone changes the timezone and the date value
        $date->setTimezone(new NativeDateTimeZone('America/New_York'));
        $this->assertSame('America/New_York', $date->getTimezone()->getName());
        $this->assertSame('2019-12-31 19:00:00', $date->format('Y-m-d H:i:s'));

        // Set timezone while freezing the datetime
        $date->setTimezone(new NativeDateTimeZone('Europe/London'), true);
        $this->assertSame('Europe/London', $date->getTimezone()->getName());
        $this->assertSame('2019-12-31 19:00:00', $date->format('Y-m-d H:i:s'));
        $date->setTimezone(new NativeDateTimeZone('Europe/London'), true);
        $this->assertSame('Europe/London', $date->getTimezone()->getName());
        $this->assertSame('2019-12-31 19:00:00', $date->format('Y-m-d H:i:s'));
    }

    /**
     * Test set timezone using a timezone
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::setTimezone
     */
    public function testSetTimezoneWithTimezone()
    {
        $date = DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:00');
        $this->assertInstanceOf(DateTime::class, $date->setTimezone(DateTimeZone::LondonEurope()));
        $this->assertSame('Europe/London', $date->getTimezone()->getName());
        $this->assertSame('2020-01-01 00:00:00', $date->format('Y-m-d H:i:s'));

        // Set timezone changes the timezone and the date value
        $date->setTimezone(DateTimeZone::NewYorkAmerica());
        $this->assertSame('America/New_York', $date->getTimezone()->getName());
        $this->assertSame('2019-12-31 19:00:00', $date->format('Y-m-d H:i:s'));

        // Set timezone while freezing the datetime
        $date->setTimezone(DateTimeZone::LondonEurope(), true);
        $this->assertSame('Europe/London', $date->getTimezone()->getName());
        $this->assertSame('2019-12-31 19:00:00', $date->format('Y-m-d H:i:s'));
        $date->setTimezone(DateTimeZone::LondonEurope(), true);
        $this->assertSame('Europe/London', $date->getTimezone()->getName());
        $this->assertSame('2019-12-31 19:00:00', $date->format('Y-m-d H:i:s'));
    }

    /**
     * Test setting the year
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::setYear
     */
    public function testSetYear()
    {
        $this->assertInstanceOf(DateTime::class, DateTime::createFromFormat('Y-m-d', '1990-01-01')->setYear(2020));
        $this->assertSame('2020-01-01', DateTime::createFromFormat('Y-m-d', '1990-01-01')->setYear(2020)->format('Y-m-d'));
        $this->assertSame('2020-02-25', DateTime::createFromFormat('Y-m-d', '1970-02-25')->setYear(2020)->format('Y-m-d'));
        $this->assertSame('2021-03-01', DateTime::createFromFormat('Y-m-d', '2020-02-29')->setYear(2021)->format('Y-m-d'));
    }

    /**
     * Test setting to the start of the day
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::startOfDay
     */
    public function testStartOfDay()
    {
        $this->assertSame(date('Y-m-d').' 00:00:00', DateTime::now()->startOfDay()->format('Y-m-d H:i:s'));
    }

    /**
     * Test setting to the start of the month
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::startOfMonth
     */
    public function testStartOfMonth()
    {
        $this->assertSame('2020-01-01', DateTime::createFromFormat('Y-m-d', '2020-01-26')->startOfMonth()->format('Y-m-d'));
        $this->assertSame('2020-02-01', DateTime::createFromFormat('Y-m-d', '2020-02-29')->startOfMonth()->format('Y-m-d'));
    }

    /**
     * Test removing a day
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::subDay
     */
    public function testSubDay()
    {
        // Decrease unit
        $this->assertSame('2020-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-02 00:00:00')->subDay()->format('Y-m-d H:i:s'));

        // Tick over month
        $this->assertSame('2020-02-29 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-03-01 00:00:00')->subDay()->format('Y-m-d H:i:s'));

        // Tick over year
        $this->assertSame('2020-12-31 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2021-01-01 00:00:00')->subDay()->format('Y-m-d H:i:s'));
    }

    /**
     * Test removing days
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::subDays
     */
    public function testSubDays()
    {
        // Decrease unit
        $this->assertSame('2020-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-06 00:00:00')->subDays(5)->format('Y-m-d H:i:s'));

        // Tick over month
        $this->assertSame('2020-02-27 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-03-03 00:00:00')->subDays(5)->format('Y-m-d H:i:s'));

        // Tick over year
        $this->assertSame('2020-12-28 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2021-01-02 00:00:00')->subDays(5)->format('Y-m-d H:i:s'));
    }

    /**
     * Test removing an hour
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::subHour
     */
    public function testSubHour()
    {
        // Decrease unit
        $this->assertSame('2020-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 01:00:00')->subHour()->format('Y-m-d H:i:s'));

        // Tick over day
        $this->assertSame('2020-01-01 23:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-02 00:00:00')->subHour()->format('Y-m-d H:i:s'));

        // Tick over month
        $this->assertSame('2020-02-29 23:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-03-01 00:00:00')->subHour()->format('Y-m-d H:i:s'));

        // Tick over year
        $this->assertSame('2020-12-31 23:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2021-01-01 00:00:00')->subHour()->format('Y-m-d H:i:s'));
    }

    /**
     * Test removing hours
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::subHours
     */
    public function testSubHours()
    {
        // Decrease unit
        $this->assertSame('2020-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 12:00:00')->subHours(12)->format('Y-m-d H:i:s'));

        // Tick over day
        $this->assertSame('2020-01-01 12:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-02 00:00:00')->subHours(12)->format('Y-m-d H:i:s'));

        // Tick over month
        $this->assertSame('2020-02-29 23:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-03-01 20:00:00')->subHours(21)->format('Y-m-d H:i:s'));

        // Tick over year
        $this->assertSame('2020-12-31 23:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2021-01-01 11:00:00')->subHours(12)->format('Y-m-d H:i:s'));
    }

    /**
     * Test removing a minute
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::subMinute
     */
    public function testSubMinute()
    {
        // Decrease unit
        $this->assertSame('2020-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:01:00')->subMinute()->format('Y-m-d H:i:s'));

        // Tick over hour
        $this->assertSame('2020-01-01 00:59:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 01:00:00')->subMinute()->format('Y-m-d H:i:s'));

        // Tick over day
        $this->assertSame('2020-01-01 23:59:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-02 00:00:00')->subMinute()->format('Y-m-d H:i:s'));

        // Tick over month
        $this->assertSame('2020-02-29 23:59:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-03-01 00:00:00')->subMinute()->format('Y-m-d H:i:s'));

        // Tick over year
        $this->assertSame('2020-12-31 23:59:00', DateTime::createFromFormat('Y-m-d H:i:s', '2021-01-01 00:00:00')->subMinute()->format('Y-m-d H:i:s'));
    }

    /**
     * Test removing minutes
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::subMinutes
     */
    public function testSubMinutes()
    {
        // Decrease unit
        $this->assertSame('2020-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:30:00')->subMinutes(30)->format('Y-m-d H:i:s'));

        // Tick over hour
        $this->assertSame('2020-01-01 00:59:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 01:29:00')->subMinutes(30)->format('Y-m-d H:i:s'));

        // Tick over day
        $this->assertSame('2020-01-01 23:59:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-02 00:29:00')->subMinutes(30)->format('Y-m-d H:i:s'));

        // Tick over month
        $this->assertSame('2020-02-29 23:59:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-03-01 00:29:00')->subMinutes(30)->format('Y-m-d H:i:s'));

        // Tick over year
        $this->assertSame('2020-12-31 23:59:00', DateTime::createFromFormat('Y-m-d H:i:s', '2021-01-01 00:29:00')->subMinutes(30)->format('Y-m-d H:i:s'));
    }

    /**
     * Test removing a month
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::subMonth
     */
    public function testSubMonth()
    {
        // Decrease unit
        $this->assertSame('2020-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-02-01 00:00:00')->subMonth()->format('Y-m-d H:i:s'));

        // Wrap extra days into next month
        $this->assertSame('2020-03-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-03-30 00:00:00')->subMonth()->format('Y-m-d H:i:s'));

        // Tick over year
        $this->assertSame('2020-12-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2021-01-01 00:00:00')->subMonth()->format('Y-m-d H:i:s'));
    }

    /**
     * Test removing months
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::subMonths
     */
    public function testSubMonths()
    {
        // Decrease unit
        $this->assertSame('2020-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-07-01 00:00:00')->subMonths(6)->format('Y-m-d H:i:s'));
    }

    /**
     * Test removing a second
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::subSecond
     */
    public function testSubSecond()
    {
        // Decrease unit
        $this->assertSame('2020-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:01')->subSecond()->format('Y-m-d H:i:s'));

        // Tick over to minute
        $this->assertSame('2020-01-01 00:00:59', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:01:00')->subSecond()->format('Y-m-d H:i:s'));

        // Tick over to hour
        $this->assertSame('2020-01-01 00:59:59', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 01:00:00')->subSecond()->format('Y-m-d H:i:s'));

        // Tick over to day
        $this->assertSame('2020-01-01 23:59:59', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-02 00:00:00')->subSecond()->format('Y-m-d H:i:s'));

        // Tick over to month
        $this->assertSame('2020-02-29 23:59:59', DateTime::createFromFormat('Y-m-d H:i:s', '2020-03-01 00:00:00')->subSecond()->format('Y-m-d H:i:s'));

        // Tick over to year
        $this->assertSame('2020-12-31 23:59:59', DateTime::createFromFormat('Y-m-d H:i:s', '2021-01-01 00:00:00')->subSecond()->format('Y-m-d H:i:s'));
    }

    /**
     * Test removing seconds
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::subSeconds
     */
    public function testSubSeconds()
    {
        // Decrease unit
        $this->assertSame('2020-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:30')->subSeconds(30)->format('Y-m-d H:i:s'));

        // Tick over to minute
        $this->assertSame('2020-01-01 00:00:59', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:01:29')->subSeconds(30)->format('Y-m-d H:i:s'));

        // Tick over to hour
        $this->assertSame('2020-01-01 00:59:59', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 01:00:29')->subSeconds(30)->format('Y-m-d H:i:s'));

        // Tick over to day
        $this->assertSame('2020-01-01 23:59:59', DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-02 00:00:29')->subSeconds(30)->format('Y-m-d H:i:s'));

        // Tick over to month
        $this->assertSame('2020-02-29 23:59:59', DateTime::createFromFormat('Y-m-d H:i:s', '2020-03-01 00:00:29')->subSeconds(30)->format('Y-m-d H:i:s'));

        // Tick over to year
        $this->assertSame('2020-12-31 23:59:59', DateTime::createFromFormat('Y-m-d H:i:s', '2021-01-01 00:00:29')->subSeconds(30)->format('Y-m-d H:i:s'));
    }

    /**
     * Test removing a year
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::subYear
     */
    public function testSubYear()
    {
        $this->assertSame('2020-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2021-01-01 00:00:00')->subYear()->format('Y-m-d H:i:s'));
    }

    /**
     * Test removing years
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::subYears
     */
    public function testSubYears()
    {
        $this->assertSame('2020-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2021-01-01 00:00:00')->subYears(1)->format('Y-m-d H:i:s'));
        $this->assertSame('2020-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2030-01-01 00:00:00')->subYears(10)->format('Y-m-d H:i:s'));
        $this->assertSame('2020-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '2120-01-01 00:00:00')->subYears(100)->format('Y-m-d H:i:s'));
        $this->assertSame('2020-01-01 00:00:00', DateTime::createFromFormat('Y-m-d H:i:s', '3020-01-01 00:00:00')->subYears(1000)->format('Y-m-d H:i:s'));
    }
}
