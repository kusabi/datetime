<?php

namespace Kusabi\Date\Tests\DateTimeZone;

use DateTimeZone as NativeDateTimeZone;
use Kusabi\Date\DateTimeZone;
use Kusabi\Date\Tests\TestCase;

class Comparisons extends TestCase
{
    /**
     * Test if two timezones are equal to each other
     *
     * @covers \Kusabi\Date\DateTimeZone::equal
     *
     * @return void
     */
    public function testEqual()
    {
        $a = new DateTimeZone('Europe/Paris');
        $b = new NativeDateTimeZone('Europe/Berlin');
        $c = new NativeDateTimeZone('Europe/Paris');
        $d = new NativeDateTimeZone('America/New_York');
        $this->assertTrue($a->equal($b));
        $this->assertTrue($a->equal($c));
        $this->assertFalse($a->equal($d));
    }

    /**
     * Test if two timezones are exactly the same
     *
     * @covers \Kusabi\Date\DateTimeZone::same
     *
     * @return void
     */
    public function testSame()
    {
        $a = new DateTimeZone('Europe/Paris');
        $b = new NativeDateTimeZone('Europe/Berlin');
        $c = new NativeDateTimeZone('Europe/Paris');
        $d = new NativeDateTimeZone('America/New_York');
        $this->assertFalse($a->same($b));
        $this->assertTrue($a->same($c));
        $this->assertFalse($a->same($d));
    }
}
