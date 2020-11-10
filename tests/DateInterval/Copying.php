<?php

namespace Kusabi\Date\Tests\DateInterval;

use DateInterval as NativeDateInterval;
use Exception;
use Kusabi\Date\DateInterval;
use Kusabi\Date\Tests\TestCase;

class Copying extends TestCase
{
    /**
     * Test that we can clone with the cloned method
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::cloned
     */
    public function testCloned()
    {
        $interval = new DateInterval('P1Y2M3DT4H5M6S');
        $cloned = $interval->cloned();
        $this->assertSame($interval->getSpec(), $cloned->getSpec());
        $this->assertNotSame($interval, $cloned);
    }

    /**
     * Test that we can copy the values from another instance
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::copy
     */
    public function testCopy()
    {
        $a = new DateInterval('P1Y2M3DT4H5M6S');
        $b = new DateInterval('P5Y5M4DT3H2M1S');
        $this->assertSame('P5Y5M4DT3H2M1S', $b->getSpec());
        $this->assertSame('P1Y2M3DT4H5M6S', $b->copy($a)->getSpec());
    }

    /**
     * Test that we can copy the values from another legacy instance
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::copy
     */
    public function testCopyLegacy()
    {
        $a = new NativeDateInterval('P1Y2M3DT4H5M6S');
        $b = new DateInterval('P5Y5M4DT3H2M1S');
        $this->assertSame('P5Y5M4DT3H2M1S', $b->getSpec());
        $this->assertSame('P1Y2M3DT4H5M6S', $b->copy($a)->getSpec());
    }
}
