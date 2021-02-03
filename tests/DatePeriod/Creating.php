<?php

namespace Kusabi\Date\Tests\DatePeriod;

use Kusabi\Date\DateInterval;
use Kusabi\Date\DatePeriod;
use Kusabi\Date\DateTime;
use Kusabi\Date\Tests\TestCase;

class Creating extends TestCase
{
    /**
     * Test we can create from an existing period instance
     *
     * @covers \Kusabi\Date\DatePeriod::createFromInstance
     */
    public function testCreateFromInstance()
    {
        $period = new DatePeriod(DateTime::today(), DateInterval::day(), DateTime::today()->addDays(7));
        $instance = DatePeriod::createFromInstance($period);

        $this->assertSame($period->start->format('Y-m-d'), $instance->start->format('Y-m-d'));
        $this->assertSame($period->end->format('Y-m-d'), $instance->end->format('Y-m-d'));
        $this->assertSame(count(iterator_to_array($period)), count(iterator_to_array($instance)));
        $this->assertNotSame($period, $instance);
    }

    /**
     * Test we can create from an existing period instance
     *
     * @covers \Kusabi\Date\DatePeriod::createFromInstance
     */
    public function testCreateFromLegacyInstance()
    {
        $period = new \DatePeriod(DateTime::today(), DateInterval::day(), DateTime::today()->addDays(7));
        $instance = DatePeriod::createFromInstance($period);

        $this->assertSame($period->start->format('Y-m-d'), $instance->start->format('Y-m-d'));
        $this->assertSame($period->end->format('Y-m-d'), $instance->end->format('Y-m-d'));
        $this->assertSame(count(iterator_to_array($period)), count(iterator_to_array($instance)));
        $this->assertNotSame($period, $instance);
    }

    /**
     * Test the instance chain-able constructor with parameters from this library
     *
     * @return void
     *
     * @covers \Kusabi\Date\DatePeriod::instance
     */
    public function testInstance()
    {
        $period = DatePeriod::instance(
            DateTime::createFromFormat('Y-m-d', '2020-01-01')->startOfDay(),
            DateInterval::day(),
            DateTime::createFromFormat('Y-m-d', '2020-01-01')->startOfDay()->addDays(7)
        );
        $dates = iterator_to_array($period);
        foreach ($dates as $index => $date) {
            $day = $index + 1;
            $this->assertInstanceOf(DateTime::class, $date);
            $this->assertSame("2020-01-0{$day}", $date->format('Y-m-d'));
        }
    }
}
