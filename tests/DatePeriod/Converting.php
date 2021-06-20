<?php

namespace Kusabi\Date\Tests\DatePeriod;

use Kusabi\Date\DateInterval;
use Kusabi\Date\DatePeriod;
use Kusabi\Date\DateTime;
use Kusabi\Date\Tests\TestCase;

class Converting extends TestCase
{
    /**
     * Test the toString method
     *
     * @return void
     *
     * @covers \Kusabi\Date\DatePeriod::__toString
     */
    public function testCastToString()
    {
        $from = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-06-18T00:00:00+00:00');
        $to = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-06-25T00:00:00+00:00');

        $period = new DatePeriod($from, DateInterval::day(), $to);
        $this->assertSame('every +1 day, from 2021-06-18T00:00:00+00:00 (included) to 2021-06-25T00:00:00+00:00', (string) $period);

        $period = new DatePeriod($from, DateInterval::week(), $to);
        $this->assertSame('every +7 days, from 2021-06-18T00:00:00+00:00 (included) to 2021-06-25T00:00:00+00:00', (string) $period);

        $period = new DatePeriod($from, DateInterval::month(), $to);
        $this->assertSame('every +1 month, from 2021-06-18T00:00:00+00:00 (included) to 2021-06-25T00:00:00+00:00', (string) $period);
    }

    /**
     * Test the toString method
     *
     * @return void
     *
     * @covers \Kusabi\Date\DatePeriod::toString
     */
    public function testToString()
    {
        $from = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-06-18T00:00:00+00:00');
        $to = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-06-25T00:00:00+00:00');

        $period = new DatePeriod($from, DateInterval::day(), $to);
        $this->assertSame('every +1 day, from 2021-06-18T00:00:00+00:00 (included) to 2021-06-25T00:00:00+00:00', $period->toString());
    }

    /**
     * Test the toString method
     *
     * @return void
     *
     * @covers \Kusabi\Date\DatePeriod::__toString
     */
    public function testToStringMagicMethod()
    {
        $from = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-06-18T00:00:00+00:00');
        $to = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-06-25T00:00:00+00:00');

        $period = new DatePeriod($from, DateInterval::day(), $to);
        $this->assertSame('every +1 day, from 2021-06-18T00:00:00+00:00 (included) to 2021-06-25T00:00:00+00:00', $period->__toString());
    }
}
