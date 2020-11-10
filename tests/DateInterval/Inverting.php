<?php

namespace Kusabi\Date\Tests\DateInterval;

use Exception;
use Kusabi\Date\DateInterval;
use PHPUnit\Framework\TestCase;

class Inverting extends TestCase
{
    /**
     * Test inverting the interval
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::invert
     * @covers \Kusabi\Date\DateInterval::isInverted
     * @covers \Kusabi\Date\DateInterval::setInverted
     */
    public function testInverting()
    {
        $interval = new DateInterval('PT1S');
        $this->assertSame(0, $interval->invert);
        $this->assertSame(false, $interval->isInverted());

        $interval->invert();
        $this->assertSame(1, $interval->invert);
        $this->assertSame(true, $interval->isInverted());

        $interval->invert();
        $this->assertSame(0, $interval->invert);
        $this->assertSame(false, $interval->isInverted());

        $interval->setInverted(true);
        $this->assertSame(1, $interval->invert);
        $this->assertSame(true, $interval->isInverted());

        $interval->setInverted(false);
        $this->assertSame(0, $interval->invert);
        $this->assertSame(false, $interval->isInverted());

        $interval->setInverted(false);
        $this->assertSame(0, $interval->invert);
        $this->assertSame(false, $interval->isInverted());

        $interval->setInverted(false);
        $this->assertSame(0, $interval->invert);
        $this->assertSame(false, $interval->isInverted());

        $interval->setInverted();
        $this->assertSame(1, $interval->invert);
        $this->assertSame(true, $interval->isInverted());
    }
}
