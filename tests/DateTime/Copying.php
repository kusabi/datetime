<?php

namespace Kusabi\Date\Tests\DateTime;

use DateTime as NativeDateTime;
use DateTimeInterface;
use DateTimeZone as NativeDateTimeZone;
use Kusabi\Date\DateTime;
use Kusabi\Date\DateTimeZone;
use PHPUnit\Framework\TestCase;

class Copying extends TestCase
{
    /**
     * Test that without cloning a user can accidentally affect the wrong datetime instance
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::addDays
     */
    public function testCloneIsNeeded()
    {
        $a = DateTime::createFromFormat('Y-m-d H:i:s', '2022-01-01 00:00:00');
        $b = $a->addDays(10);
        $this->assertSame($a, $b);
        $this->assertSame('2022-01-11 00:00:00', $a->format('Y-m-d H:i:s'));
        $this->assertSame('2022-01-11 00:00:00', $b->format('Y-m-d H:i:s'));
    }

    /**
     * Prove the native clone statement is enough to overcome
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::addDays
     */
    public function testCloneMagicMethod()
    {
        $a = DateTime::createFromFormat('Y-m-d H:i:s', '2022-01-01 00:00:00');
        $b = clone $a;
        $b->addDays(10);
        $this->assertNotSame($a, $b);
        $this->assertSame('2022-01-01 00:00:00', $a->format('Y-m-d H:i:s'));
        $this->assertSame('2022-01-11 00:00:00', $b->format('Y-m-d H:i:s'));
    }

    /**
     * Test the toString method
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::cloned
     */
    public function testCloned()
    {
        $a = DateTime::createFromFormat('Y-m-d H:i:s', '2022-01-01 00:00:00');
        $b = $a->cloned()->addDays(10);
        $this->assertNotSame($a, $b);
        $this->assertSame('2022-01-01 00:00:00', $a->format('Y-m-d H:i:s'));
        $this->assertSame('2022-01-11 00:00:00', $b->format('Y-m-d H:i:s'));
    }

    /**
     * Test the copy method
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::copy
     */
    public function testCopy()
    {
        $a = DateTime::createFromFormat('Y-m-d H:i:s', '2022-01-01 00:00:00')->setTimezone(DateTimeZone::NewYorkAmerica());
        $b = DateTime::createFromFormat('Y-m-d H:i:s', '2021-11-12 01:02:03')->setTimezone(DateTimeZone::TokyoAsia());
        $this->assertSame('2021-12-31T19:00:00-05:00', $a->toString());
        $this->assertSame('2021-11-12T10:02:03+09:00', $b->toString());
        $b->copy($a);
        $this->assertNotSame($a, $b);
        $this->assertSame($a->toString(), $b->toString());
        $this->assertSame($a->getTimezone()->getName(), $b->getTimezone()->getName());
    }

    /**
     * Testing copy respects the milliseconds
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::copy
     */
    public function testCopyMilliseconds()
    {
        $a = DateTime::createFromTimestamp('0.460602 1594283757');
        $b = DateTime::now()->copy($a);
        $this->assertSame('2020-07-09 08:35:57 1594283757.460602', $a->format('Y-m-d H:i:s U.u'));
        $this->assertSame('2020-07-09 08:35:57 1594283757.460602', $b->format('Y-m-d H:i:s U.u'));
    }

    /**
     * Test the copy method
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTime::copy
     */
    public function testCopyNative()
    {
        $a = NativeDateTime::createFromFormat('Y-m-d H:i:s', '2022-01-01 00:00:00')->setTimezone(new NativeDateTimeZone('America/New_York'));
        $b = DateTime::createFromFormat('Y-m-d H:i:s', '2021-11-12 01:02:03')->setTimezone(DateTimeZone::TokyoAsia());
        $this->assertSame('2021-12-31T19:00:00-05:00', $a->format(DateTimeInterface::ATOM));
        $this->assertSame('2021-11-12T10:02:03+09:00', $b->toString());
        $b->copy($a);
        $this->assertNotSame($a, $b);
        $this->assertSame($a->format(DateTimeInterface::ATOM), $b->toString());
        $this->assertSame($a->getTimezone()->getName(), $b->getTimezone()->getName());
    }
}
