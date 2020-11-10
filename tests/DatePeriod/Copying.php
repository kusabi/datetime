<?php

namespace Kusabi\Date\Tests\DatePeriod;

use Kusabi\Date\DateInterval;
use Kusabi\Date\DatePeriod;
use Kusabi\Date\DateTime;
use Kusabi\Date\Tests\TestCase;

class Copying extends TestCase
{
    /**
     * Test we can copy values from another period instance
     *
     * @covers \Kusabi\Date\DatePeriod::cloned
     */
    public function testCloned()
    {
        $period = new DatePeriod(DateTime::today(), DateInterval::day(), DateTime::today()->addDays(7));
        $cloned = $period->cloned();

        $this->assertSame($period->start->format('Y-m-d'), $cloned->start->format('Y-m-d'));
        $this->assertSame($period->end->format('Y-m-d'), $cloned->end->format('Y-m-d'));
        $this->assertSame(count(iterator_to_array($period)), count(iterator_to_array($cloned)));
        $this->assertNotSame($period, $cloned);
    }
}
