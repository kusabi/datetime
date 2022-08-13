<?php

namespace Kusabi\Date\Tests\DateTime;

use DateInterval as NativeDateInterval;
use DatePeriod as NativeDatePeriod;
use Exception;
use Kusabi\Date\DateTime;
use Kusabi\Date\DateTimeZone;
use PHPUnit\Framework\TestCase;

class Reading extends TestCase
{
    /**
     * Test getting the date interval to another datetime
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::diff
     */
    public function testDiff()
    {
        $from = DateTime::createFromFormat('Y-m-d h:i:s', '2022-01-01 00:00:00');
        $to = DateTime::createFromFormat('Y-m-d h:i:s', '2022-01-02 00:00:00');
        $this->assertSame(1, $from->diff($to)->getDays());

        $from = DateTime::createFromFormat('Y-m-d h:i:s', '2022-01-01 00:00:00');
        $to = DateTime::createFromFormat('Y-m-d h:i:s', '2022-01-01 12:00:00');
        $this->assertSame(0, $from->diff($to)->getDays());
        $this->assertSame(0.5, $from->diff($to)->getRealDays());
        $this->assertSame(12, $from->diff($to)->getHours());

        $from = DateTime::createFromFormat('Y-m-d h:i:s', '2000-01-01 00:00:00');
        $to = DateTime::createFromFormat('Y-m-d h:i:s', '2003-05-01 00:00:00');
        $this->assertSame(1120, $from->diff($to)->getDays());
    }

    /**
     * Test getting the full name of the week
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::getDayName
     */
    public function testGetDayName()
    {
        $this->assertSame('Wednesday', DateTime::createFromFormat('Y-m-d', '2020-01-01')->getDayName());
        $this->assertSame('Thursday', DateTime::createFromFormat('Y-m-d', '2020-01-02')->getDayName());
        $this->assertSame('Friday', DateTime::createFromFormat('Y-m-d', '2020-01-03')->getDayName());
        $this->assertSame('Saturday', DateTime::createFromFormat('Y-m-d', '2020-01-04')->getDayName());
        $this->assertSame('Sunday', DateTime::createFromFormat('Y-m-d', '2020-01-05')->getDayName());
        $this->assertSame('Monday', DateTime::createFromFormat('Y-m-d', '2020-01-06')->getDayName());
        $this->assertSame('Tuesday', DateTime::createFromFormat('Y-m-d', '2020-01-07')->getDayName());
    }

    /**
     * Test getting the number of the day of the month
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::getDayOfMonth
     */
    public function testGetDayOfMonth()
    {
        for ($i = 1; $i <= 31; $i++) {
            $this->assertSame($i, DateTime::createFromFormat('Y-m-j', '2020-01-'.$i)->getDayOfMonth());
        }
    }

    /**
     * Test getting the number of the day of the week
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::getDayOfWeek
     */
    public function testGetDayOfWeek()
    {
        $this->assertSame(3, DateTime::createFromFormat('Y-m-d', '2020-01-01')->getDayOfWeek());
        $this->assertSame(4, DateTime::createFromFormat('Y-m-d', '2020-01-02')->getDayOfWeek());
        $this->assertSame(5, DateTime::createFromFormat('Y-m-d', '2020-01-03')->getDayOfWeek());
        $this->assertSame(6, DateTime::createFromFormat('Y-m-d', '2020-01-04')->getDayOfWeek());
        $this->assertSame(7, DateTime::createFromFormat('Y-m-d', '2020-01-05')->getDayOfWeek());
        $this->assertSame(1, DateTime::createFromFormat('Y-m-d', '2020-01-06')->getDayOfWeek());
        $this->assertSame(2, DateTime::createFromFormat('Y-m-d', '2020-01-07')->getDayOfWeek());
    }

    /**
     * Test getting the number of the day of the year
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::getDayOfYear
     */
    public function testGetDayOfYear()
    {
        $from = DateTime::createFromFormat('Y-m-d', '2020-01-01');
        $to = DateTime::createFromFormat('Y-m-d', '2020-12-31');
        $interval = new NativeDateInterval('P1D');
        $period = new NativeDatePeriod($from, $interval, $to);
        $dayCount = 0;
        foreach ($period as $date) {
            $date = DateTime::createFromInstance($date);
            $this->assertSame($dayCount++, $date->getDayOfYear());
        }
    }

    /**
     * Test getting the short name of the week
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::getDayShortName
     */
    public function testGetDayShortName()
    {
        $this->assertSame('Wed', DateTime::createFromFormat('Y-m-d', '2020-01-01')->getDayShortName());
        $this->assertSame('Thu', DateTime::createFromFormat('Y-m-d', '2020-01-02')->getDayShortName());
        $this->assertSame('Fri', DateTime::createFromFormat('Y-m-d', '2020-01-03')->getDayShortName());
        $this->assertSame('Sat', DateTime::createFromFormat('Y-m-d', '2020-01-04')->getDayShortName());
        $this->assertSame('Sun', DateTime::createFromFormat('Y-m-d', '2020-01-05')->getDayShortName());
        $this->assertSame('Mon', DateTime::createFromFormat('Y-m-d', '2020-01-06')->getDayShortName());
        $this->assertSame('Tue', DateTime::createFromFormat('Y-m-d', '2020-01-07')->getDayShortName());
    }

    /**
     * Test getting the number of days in a month
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::getDaysInMonth
     */
    public function testGetDaysInMonth()
    {
        $this->assertSame(31, DateTime::createFromFormat('Y-m-d', '2001-01-01')->getDaysInMonth());
        $this->assertSame(28, DateTime::createFromFormat('Y-m-d', '2001-02-01')->getDaysInMonth());
        $this->assertSame(29, DateTime::createFromFormat('Y-m-d', '2000-02-01')->getDaysInMonth());
        $this->assertSame(31, DateTime::createFromFormat('Y-m-d', '2001-03-01')->getDaysInMonth());
        $this->assertSame(30, DateTime::createFromFormat('Y-m-d', '2001-04-01')->getDaysInMonth());
        $this->assertSame(31, DateTime::createFromFormat('Y-m-d', '2001-05-01')->getDaysInMonth());
        $this->assertSame(30, DateTime::createFromFormat('Y-m-d', '2001-06-01')->getDaysInMonth());
        $this->assertSame(31, DateTime::createFromFormat('Y-m-d', '2001-07-01')->getDaysInMonth());
        $this->assertSame(31, DateTime::createFromFormat('Y-m-d', '2001-08-01')->getDaysInMonth());
        $this->assertSame(30, DateTime::createFromFormat('Y-m-d', '2001-09-01')->getDaysInMonth());
        $this->assertSame(31, DateTime::createFromFormat('Y-m-d', '2001-10-01')->getDaysInMonth());
        $this->assertSame(30, DateTime::createFromFormat('Y-m-d', '2001-11-01')->getDaysInMonth());
        $this->assertSame(31, DateTime::createFromFormat('Y-m-d', '2001-12-01')->getDaysInMonth());
    }

    /**
     * Test getting the number of days left in a month
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::getDaysLeftInMonth
     */
    public function testGetDaysLeftInMonth()
    {
        $this->assertSame(16, DateTime::createFromFormat('Y-m-d', '2001-01-15')->getDaysLeftInMonth());
        $this->assertSame(13, DateTime::createFromFormat('Y-m-d', '2001-02-15')->getDaysLeftInMonth());
        $this->assertSame(14, DateTime::createFromFormat('Y-m-d', '2000-02-15')->getDaysLeftInMonth());
        $this->assertSame(16, DateTime::createFromFormat('Y-m-d', '2001-03-15')->getDaysLeftInMonth());
        $this->assertSame(15, DateTime::createFromFormat('Y-m-d', '2001-04-15')->getDaysLeftInMonth());
        $this->assertSame(16, DateTime::createFromFormat('Y-m-d', '2001-05-15')->getDaysLeftInMonth());
        $this->assertSame(15, DateTime::createFromFormat('Y-m-d', '2001-06-15')->getDaysLeftInMonth());
        $this->assertSame(16, DateTime::createFromFormat('Y-m-d', '2001-07-15')->getDaysLeftInMonth());
        $this->assertSame(16, DateTime::createFromFormat('Y-m-d', '2001-08-15')->getDaysLeftInMonth());
        $this->assertSame(15, DateTime::createFromFormat('Y-m-d', '2001-09-15')->getDaysLeftInMonth());
        $this->assertSame(16, DateTime::createFromFormat('Y-m-d', '2001-10-15')->getDaysLeftInMonth());
        $this->assertSame(15, DateTime::createFromFormat('Y-m-d', '2001-11-15')->getDaysLeftInMonth());
        $this->assertSame(16, DateTime::createFromFormat('Y-m-d', '2001-12-15')->getDaysLeftInMonth());
    }

    /**
     * Test getHours
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::getHours
     */
    public function testGetHours()
    {
        for ($i = 0; $i < 24; $i++) {
            $datetime = DateTime::createFromFormat('Y-m-d H:i:s', sprintf('2022-01-01 %s:00:00', str_pad($i, 2, '0', STR_PAD_LEFT)));
            $this->assertSame($i, $datetime->getHours());
        }
    }

    /**
     * Test getMicroseconds
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::getMicroseconds
     */
    public function testMicroseconds()
    {
        $datetime = DateTime::createFromFormat('Y-m-d H:i:s', '2022-01-01 00:00:00');
        $this->assertSame(0, $datetime->getMicroseconds());

        $datetime = DateTime::createFromTimestamp('0.555555 1640995200');
        $this->assertSame(555555, $datetime->getMicroseconds());
    }

    /**
     * Test getMinutes
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::getMinutes
     */
    public function testGetMinutes()
    {
        for ($i = 0; $i < 60; $i++) {
            $datetime = DateTime::createFromFormat('Y-m-d H:i:s', sprintf('2022-01-01 00:%s:00', str_pad($i, 2, '0', STR_PAD_LEFT)));
            $this->assertSame($i, $datetime->getMinutes());
        }
    }

    /**
     * Test getting the number of the month of the year
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::getMonth
     */
    public function testGetMonth()
    {
        $this->assertSame(1, DateTime::createFromFormat('Y-m-d', '2020-01-01')->getMonth());
        $this->assertSame(2, DateTime::createFromFormat('Y-m-d', '2020-02-01')->getMonth());
        $this->assertSame(3, DateTime::createFromFormat('Y-m-d', '2020-03-01')->getMonth());
        $this->assertSame(4, DateTime::createFromFormat('Y-m-d', '2020-04-01')->getMonth());
        $this->assertSame(5, DateTime::createFromFormat('Y-m-d', '2020-05-01')->getMonth());
        $this->assertSame(6, DateTime::createFromFormat('Y-m-d', '2020-06-01')->getMonth());
        $this->assertSame(7, DateTime::createFromFormat('Y-m-d', '2020-07-01')->getMonth());
        $this->assertSame(8, DateTime::createFromFormat('Y-m-d', '2020-08-01')->getMonth());
        $this->assertSame(9, DateTime::createFromFormat('Y-m-d', '2020-09-01')->getMonth());
        $this->assertSame(10, DateTime::createFromFormat('Y-m-d', '2020-10-01')->getMonth());
        $this->assertSame(11, DateTime::createFromFormat('Y-m-d', '2020-11-01')->getMonth());
        $this->assertSame(12, DateTime::createFromFormat('Y-m-d', '2020-12-01')->getMonth());
    }

    /**
     * Test getting the name of the month of the year
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::getMonthName
     */
    public function testGetMonthName()
    {
        $this->assertSame('January', DateTime::createFromFormat('Y-m-d', '2020-01-01')->getMonthName());
        $this->assertSame('February', DateTime::createFromFormat('Y-m-d', '2020-02-01')->getMonthName());
        $this->assertSame('March', DateTime::createFromFormat('Y-m-d', '2020-03-01')->getMonthName());
        $this->assertSame('April', DateTime::createFromFormat('Y-m-d', '2020-04-01')->getMonthName());
        $this->assertSame('May', DateTime::createFromFormat('Y-m-d', '2020-05-01')->getMonthName());
        $this->assertSame('June', DateTime::createFromFormat('Y-m-d', '2020-06-01')->getMonthName());
        $this->assertSame('July', DateTime::createFromFormat('Y-m-d', '2020-07-01')->getMonthName());
        $this->assertSame('August', DateTime::createFromFormat('Y-m-d', '2020-08-01')->getMonthName());
        $this->assertSame('September', DateTime::createFromFormat('Y-m-d', '2020-09-01')->getMonthName());
        $this->assertSame('October', DateTime::createFromFormat('Y-m-d', '2020-10-01')->getMonthName());
        $this->assertSame('November', DateTime::createFromFormat('Y-m-d', '2020-11-01')->getMonthName());
        $this->assertSame('December', DateTime::createFromFormat('Y-m-d', '2020-12-01')->getMonthName());
    }

    /**
     * Test getting the short name of the month of the year
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::getMonthShortName
     */
    public function testGetMonthShortName()
    {
        $this->assertSame('Jan', DateTime::createFromFormat('Y-m-d', '2020-01-01')->getMonthShortName());
        $this->assertSame('Feb', DateTime::createFromFormat('Y-m-d', '2020-02-01')->getMonthShortName());
        $this->assertSame('Mar', DateTime::createFromFormat('Y-m-d', '2020-03-01')->getMonthShortName());
        $this->assertSame('Apr', DateTime::createFromFormat('Y-m-d', '2020-04-01')->getMonthShortName());
        $this->assertSame('May', DateTime::createFromFormat('Y-m-d', '2020-05-01')->getMonthShortName());
        $this->assertSame('Jun', DateTime::createFromFormat('Y-m-d', '2020-06-01')->getMonthShortName());
        $this->assertSame('Jul', DateTime::createFromFormat('Y-m-d', '2020-07-01')->getMonthShortName());
        $this->assertSame('Aug', DateTime::createFromFormat('Y-m-d', '2020-08-01')->getMonthShortName());
        $this->assertSame('Sep', DateTime::createFromFormat('Y-m-d', '2020-09-01')->getMonthShortName());
        $this->assertSame('Oct', DateTime::createFromFormat('Y-m-d', '2020-10-01')->getMonthShortName());
        $this->assertSame('Nov', DateTime::createFromFormat('Y-m-d', '2020-11-01')->getMonthShortName());
        $this->assertSame('Dec', DateTime::createFromFormat('Y-m-d', '2020-12-01')->getMonthShortName());
    }

    /**
     * Test getSeconds
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::getSeconds
     */
    public function testGetSeconds()
    {
        for ($i = 0; $i < 60; $i++) {
            $datetime = DateTime::createFromFormat('Y-m-d H:i:s', sprintf('2022-01-01 00:00:%s', str_pad($i, 2, '0', STR_PAD_LEFT)));
            $this->assertSame($i, $datetime->getSeconds());
        }
    }

    /**
     * Test getting the timezone returns an instance of DateTimeZone from this library
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::getTimezone
     */
    public function testGetTimezoneReturnsTimezone()
    {
        $date = new DateTime();
        $this->assertInstanceOf(DateTimeZone::class, $date->getTimezone());
    }

    /**
     * Test getting the number of the year
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::getYear
     */
    public function testGetYear()
    {
        $this->assertSame(2000, DateTime::createFromFormat('Y-m-d', '2000-01-01')->getYear());
        $this->assertSame(3000, DateTime::createFromFormat('Y-m-d', '3000-01-01')->getYear());
    }

    /**
     * Test checking if a datetime is a weekday
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::isWeekday
     */
    public function testIsWeekday()
    {
        $this->assertTrue(DateTime::createFromFormat('Y-m-d', '2021-01-01')->isWeekday());
        $this->assertFalse(DateTime::createFromFormat('Y-m-d', '2021-01-02')->isWeekday());
        $this->assertFalse(DateTime::createFromFormat('Y-m-d', '2021-01-03')->isWeekday());
        $this->assertTrue(DateTime::createFromFormat('Y-m-d', '2021-01-04')->isWeekday());
        $this->assertTrue(DateTime::createFromFormat('Y-m-d', '2021-01-05')->isWeekday());
        $this->assertTrue(DateTime::createFromFormat('Y-m-d', '2021-01-06')->isWeekday());
        $this->assertTrue(DateTime::createFromFormat('Y-m-d', '2021-01-07')->isWeekday());
        $this->assertTrue(DateTime::createFromFormat('Y-m-d', '2021-01-08')->isWeekday());
    }

    /**
     * Test checking if a datetime is the weekend
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::isWeekend
     */
    public function testIsWeekend()
    {
        $this->assertFalse(DateTime::createFromFormat('Y-m-d', '2021-01-01')->isWeekend());
        $this->assertTrue(DateTime::createFromFormat('Y-m-d', '2021-01-02')->isWeekend());
        $this->assertTrue(DateTime::createFromFormat('Y-m-d', '2021-01-03')->isWeekend());
        $this->assertFalse(DateTime::createFromFormat('Y-m-d', '2021-01-04')->isWeekend());
        $this->assertFalse(DateTime::createFromFormat('Y-m-d', '2021-01-05')->isWeekend());
        $this->assertFalse(DateTime::createFromFormat('Y-m-d', '2021-01-06')->isWeekend());
        $this->assertFalse(DateTime::createFromFormat('Y-m-d', '2021-01-07')->isWeekend());
        $this->assertFalse(DateTime::createFromFormat('Y-m-d', '2021-01-08')->isWeekend());
    }
}
