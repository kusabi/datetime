<?php

namespace Kusabi\Date\Tests\DateTime;

use Kusabi\Date\DateTime;
use Kusabi\Date\DateTimeZone;
use PHPUnit\Framework\TestCase;

class Converting extends TestCase
{
    /**
     * Test the toString method
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::__toString
     */
    public function testCastToString()
    {
        $datetime = DateTime::createFromFormat('Y-m-d H:i:s', '2020-06-18 14:11:22', DateTimeZone::BrokenHillAustralia());
        $this->assertSame('2020-06-18T14:11:22+09:30', (string) $datetime);
    }

    /**
     * Test the toString method
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::toString
     */
    public function testToString()
    {
        $datetime = DateTime::createFromFormat('Y-m-d H:i:s', '2020-06-18 14:11:22', DateTimeZone::BrokenHillAustralia());
        $this->assertSame('2020-06-18T14:11:22+09:30', $datetime->toString());
    }

    /**
     * Test the toString method
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::__toString
     */
    public function testToStringMagicMethod()
    {
        $datetime = DateTime::createFromFormat('Y-m-d H:i:s', '2020-06-18 14:11:22', DateTimeZone::BrokenHillAustralia());
        $this->assertSame('2020-06-18T14:11:22+09:30', $datetime->__toString());
    }
}
