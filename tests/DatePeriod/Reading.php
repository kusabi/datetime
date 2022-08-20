<?php

namespace Kusabi\Date\Tests\DatePeriod;

use DateTime as NativeDateTime;
use DateTimeInterface;
use Kusabi\Date\DateInterval;
use Kusabi\Date\DatePeriod;
use Kusabi\Date\DateTime;
use PHPUnit\Framework\TestCase;

class Reading extends TestCase
{
    public function getDaysProvider(): array
    {
        return [
            'datetime to datetime' => [DateTime::createFromFormat('Y-m-d', '2022-01-01'), DateTime::createFromFormat('Y-m-d', '2022-01-10')],
            'native to datetime' => [NativeDateTime::createFromFormat('Y-m-d', '2022-01-01'), DateTime::createFromFormat('Y-m-d', '2022-01-10')],
            'datetime to native' => [DateTime::createFromFormat('Y-m-d', '2022-01-01'), NativeDateTime::createFromFormat('Y-m-d', '2022-01-10')],
            'native to native' => [NativeDateTime::createFromFormat('Y-m-d', '2022-01-01'), NativeDateTime::createFromFormat('Y-m-d', '2022-01-10')]
        ];
    }

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
     * Test getting the dates as an array
     *
     * @return void
     *
     * @covers \Kusabi\Date\DatePeriod::getDateTimes
     *
     * @dataProvider getDaysProvider()
     */
    public function testGetDateTimes(DateTimeInterface $from, DateTimeInterface $to)
    {
        $interval = DateInterval::day();
        $period = new DatePeriod($from, $interval, $to);

        $dates = $period->getDateTimes();

        $this->assertIsArray($dates);
        $this->assertCount(9, $dates);

        foreach ($dates as $datetime) {
            $this->assertInstanceOf(DateTime::class, $datetime);
        }

        $this->assertSame('2022-01-01', $dates[0]->format('Y-m-d'));
        $this->assertSame('2022-01-02', $dates[1]->format('Y-m-d'));
        $this->assertSame('2022-01-03', $dates[2]->format('Y-m-d'));
        $this->assertSame('2022-01-04', $dates[3]->format('Y-m-d'));
        $this->assertSame('2022-01-05', $dates[4]->format('Y-m-d'));
        $this->assertSame('2022-01-06', $dates[5]->format('Y-m-d'));
        $this->assertSame('2022-01-07', $dates[6]->format('Y-m-d'));
        $this->assertSame('2022-01-08', $dates[7]->format('Y-m-d'));
        $this->assertSame('2022-01-09', $dates[8]->format('Y-m-d'));
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
