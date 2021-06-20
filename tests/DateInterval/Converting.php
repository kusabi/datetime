<?php

namespace Kusabi\Date\Tests\DateInterval;

use Kusabi\Date\DateInterval;
use Kusabi\Date\Tests\TestCase;

class Converting extends TestCase
{
    public function inputConversionProvider()
    {
        return [
            ['P1Y2M3DT4H5M6S', '+1 year, 2 months, 3 days, 4 hours, 5 minutes and 6 seconds'],
            ['P1Y', '+1 year'],
            ['PT1M', '+1 minute'],
            ['PT10M30S', '+10 minutes and 30 seconds'],
            ['', '+0 seconds'],
        ];
    }

    /**
     * Test the toString method
     *
     * @return void
     *
     * @covers       \Kusabi\Date\DateInterval::__toString
     *
     * @dataProvider inputConversionProvider
     */
    public function testCastToString($input, $output)
    {
        $interval = new DateInterval($input);
        $this->assertSame($output, (string) $interval);
    }

    /**
     * Test the toString method
     *
     * @return void
     *
     * @covers       \Kusabi\Date\DateInterval::toString
     *
     * @dataProvider inputConversionProvider
     */
    public function testToString($input, $output)
    {
        $interval = new DateInterval($input);
        $this->assertSame($output, $interval->toString());
    }

    /**
     * Test the toString method
     *
     * @return void
     *
     * @covers       \Kusabi\Date\DateTime::__toString
     *
     * @dataProvider inputConversionProvider
     */
    public function testToStringMagicMethod($input, $output)
    {
        $interval = new DateInterval($input);
        $this->assertSame($output, $interval->__toString());
    }
}
