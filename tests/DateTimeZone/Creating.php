<?php

namespace Kusabi\Date\Tests\DateTimeZone;

use DateTimeZone as NativeDateTimeZone;
use Kusabi\Date\DateTimeZone;
use Kusabi\Date\Tests\TestCase;

class Creating extends TestCase
{
    /**
     * A method to provide all known timezones to the unit tests
     *
     * @return array
     */
    public function provideTimezones()
    {
        $data = [];
        $timezones = NativeDateTimeZone::listIdentifiers();
        foreach ($timezones as $timezone) {
            $converted = str_replace(['-', '_'], '', $timezone);
            $method = implode('', array_reverse(explode('/', $converted)));
            $data[] = [$timezone, $method];
        }
        return $data;
    }

    /**
     * Test basic construction using all known timezone names
     *
     * @dataProvider provideTimezones
     *
     * @param string $name
     *
     * @covers       \Kusabi\Date\DateTimeZone::__construct
     */
    public function testConstructor($name)
    {
        $timezone = new DateTimeZone($name);
        $this->assertSame($name, $timezone->getName());
    }

    /**
     * Test that the constructor will default ot UTC if no name is provided
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTimeZone::__construct
     */
    public function testConstructorDefaultsToUtc()
    {
        $timezone = new DateTimeZone();
        $this->assertInstanceOf(NativeDateTimeZone::class, $timezone);
        $this->assertSame('UTC', $timezone->getName());
    }

    /**
     * Test that we can create a new instance of Timezone from an existing Timezone instance
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTimeZone::createFromInstance
     */
    public function testCreateFromInstance()
    {
        $timezone = new DateTimeZone('UTC');
        $cloned = DateTimeZone::createFromInstance($timezone);
        $this->assertNotSame($timezone, $cloned);
        $this->assertSame($timezone->getName(), $cloned->getName());
        $this->assertSame($timezone->getLocation(), $cloned->getLocation());
    }

    /**
     * Test that we can create a new instance of Timezone from an existing native DateTimeZone instance
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTimeZone::createFromInstance
     */
    public function testCreateFromLegacyInstance()
    {
        $legacy = new NativeDateTimeZone('UTC');
        $timezone = DateTimeZone::createFromInstance($legacy);
        $this->assertSame($legacy->getName(), $timezone->getName());
        $this->assertSame($legacy->getLocation(), $timezone->getLocation());
    }

    /**
     * Test that we have a static method shortcut for every known named timezone
     *
     * @dataProvider provideTimezones
     *
     * @param string $name
     * @param string $method
     *
     * @covers       \Kusabi\Date\DateTimeZone
     */
    public function testStaticShortcuts($name, $method)
    {
        $this->assertSame($name, DateTimeZone::$method()->getName());
    }
}
