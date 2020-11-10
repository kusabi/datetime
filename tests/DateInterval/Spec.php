<?php

namespace Kusabi\Date\Tests\DateInterval;

use DateInterval as NativeDateInterval;
use Exception;
use Kusabi\Date\DateInterval;
use Kusabi\Date\IntervalSpecFactory;
use PHPUnit\Framework\TestCase;

class Spec extends TestCase
{
    /**
     * Test creating a spec from an interval instance using the factory
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\IntervalSpecFactory::createFromInterval
     */
    public function testCreateSpecFromInterval()
    {
        $factory = new IntervalSpecFactory();
        $this->assertSame('PT0S', $factory->createFromInterval(new DateInterval('PT0S')));
        $this->assertSame('P1Y', $factory->createFromInterval(new DateInterval('P1Y')));
        $this->assertSame('P1M', $factory->createFromInterval(new DateInterval('P1M')));
        $this->assertSame('P7D', $factory->createFromInterval(new DateInterval('P7D')));
        $this->assertSame('PT1H', $factory->createFromInterval(new DateInterval('PT1H')));
        $this->assertSame('PT1M', $factory->createFromInterval(new DateInterval('PT1M')));
        $this->assertSame('PT1S', $factory->createFromInterval(new DateInterval('PT1S')));
        $this->assertSame('P1Y2M3D', $factory->createFromInterval(new DateInterval('P1Y2M3D')));
        $this->assertSame('PT4H5M6S', $factory->createFromInterval(new DateInterval('PT4H5M6S')));
        $this->assertSame('P1Y2M3DT4H5M6S', $factory->createFromInterval(new DateInterval('P1Y2M3DT4H5M6S')));
    }

    /**
     * Test creating a spec from a legacy interval instance using the factory
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\IntervalSpecFactory::createFromInterval
     */
    public function testCreateSpecFromLegacyInterval()
    {
        $factory = new IntervalSpecFactory();
        $this->assertSame('PT0S', $factory->createFromInterval(new NativeDateInterval('PT0S')));
        $this->assertSame('P1Y', $factory->createFromInterval(new NativeDateInterval('P1Y')));
        $this->assertSame('P1M', $factory->createFromInterval(new NativeDateInterval('P1M')));
        $this->assertSame('P7D', $factory->createFromInterval(new NativeDateInterval('P7D')));
        $this->assertSame('PT1H', $factory->createFromInterval(new NativeDateInterval('PT1H')));
        $this->assertSame('PT1M', $factory->createFromInterval(new NativeDateInterval('PT1M')));
        $this->assertSame('PT1S', $factory->createFromInterval(new NativeDateInterval('PT1S')));
        $this->assertSame('P1Y2M3D', $factory->createFromInterval(new NativeDateInterval('P1Y2M3D')));
        $this->assertSame('PT4H5M6S', $factory->createFromInterval(new NativeDateInterval('PT4H5M6S')));
        $this->assertSame('P1Y2M3DT4H5M6S', $factory->createFromInterval(new NativeDateInterval('P1Y2M3DT4H5M6S')));
    }

    /**
     * Test creating a spec from the unit values using the factory
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\IntervalSpecFactory::createFromValues
     */
    public function testCreateSpecFromValues()
    {
        $factory = new IntervalSpecFactory();
        $this->assertSame('PT0S', $factory->createFromValues());
        $this->assertSame('P1Y', $factory->createFromValues(1));
        $this->assertSame('P1M', $factory->createFromValues(null, 1));
        $this->assertSame('P7D', $factory->createFromValues(null, null, 1));
        $this->assertSame('P1D', $factory->createFromValues(null, null, null, 1));
        $this->assertSame('PT1H', $factory->createFromValues(null, null, null, null, 1));
        $this->assertSame('PT1M', $factory->createFromValues(null, null, null, null, null, 1));
        $this->assertSame('PT1S', $factory->createFromValues(null, null, null, null, null, null, 1));
    }
}
