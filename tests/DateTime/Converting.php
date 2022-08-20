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

    public function testSerialize()
    {
        $datetime = DateTime::createFromFormat('Y-m-d H:i:s.u', '2022-02-03 23:59:59.555666', DateTimeZone::TokyoAsia());
        $restored = unserialize(serialize($datetime));
        $this->assertSame($datetime->format('Y-m-d\TH:i:s.uP T'), $restored->format('Y-m-d\TH:i:s.uP T'));
    }

    /**
     * Test converting to array
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::toArray
     */
    public function testToArray()
    {
        $datetime = DateTime::createFromFormat('Y-m-d H:i:s.u', '2022-02-03 23:59:59.555666', DateTimeZone::TokyoAsia());
        $this->assertSame([
            'year' => 2022,
            'month' => 2,
            'day' => 3,
            'hour' => 23,
            'minute' => 59,
            'second' => 59,
            'microsecond' => 555666,
            'timestamp' => 1643900399,
            'timezone' => 'Asia/Tokyo',
        ], $datetime->toArray());
    }

    /**
     * Test getting the native datetime instance from our instance
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::toNative
     */
    public function testToNative()
    {
        $ours = DateTime::createFromFormat('Y-m-d H:i:s.u', '2022-02-03 23:59:59.555666', DateTimeZone::TokyoAsia());
        $native = $ours->toNative();
        $this->assertSame('2022-02-03 23:59:59.555666', $native->format('Y-m-d H:i:s.u'));
        $this->assertSame('Asia/Tokyo', $native->getTimezone()->getName());
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
