<?php

namespace Kusabi\Date\Tests\DateTimeZone;

use Kusabi\Date\DateTimeZone;
use Kusabi\Date\Tests\TestCase;

class Copying extends TestCase
{
    /**
     * Test that we can clone with the clone operator
     *
     * @covers \Kusabi\Date\DateTimeZone::__clone
     *
     * @return void
     */
    public function testClone()
    {
        $timezone = new DateTimeZone('UTC');
        $cloned = clone $timezone;
        $this->assertSame($timezone->getName(), $cloned->getName());
        $this->assertSame($timezone->getLocation(), $cloned->getLocation());
        $this->assertNotSame($timezone, $cloned);
    }

    /**
     * Test that we can clone with the cloned method
     *
     * @covers \Kusabi\Date\DateTimeZone::cloned
     *
     * @return void
     */
    public function testCloned()
    {
        $timezone = new DateTimeZone('UTC');
        $cloned = $timezone->cloned();
        $this->assertSame($timezone->getName(), $cloned->getName());
        $this->assertSame($timezone->getLocation(), $cloned->getLocation());
        $this->assertNotSame($timezone, $cloned);
    }
}
