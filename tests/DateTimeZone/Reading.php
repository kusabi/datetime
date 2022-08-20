<?php

namespace Kusabi\Date\Tests\DateTimeZone;

use DateTime;
use DateTimeZone as NativeDateTimeZone;
use Exception;
use Kusabi\Date\DateTimeZone;
use Kusabi\Date\Tests\TestCase;
use Kusabi\Date\Transition;

class Reading extends TestCase
{
    /**
     * A method to provide all known timezones with their location data
     *
     * @return array
     */
    public function provideTimezoneLocations()
    {
        $data = [];
        $timezones = NativeDateTimeZone::listIdentifiers();
        if (!$this->fullTest()) {
            $timezones = $this->randomSample($timezones, 10);
        }
        foreach ($timezones as $timezone) {
            $data[] = [$timezone, timezone_location_get(new NativeDateTimeZone($timezone))];
        }
        return $data;
    }

    /**
     * A method to provide all known timezones with their location data
     *
     * @return array
     */
    public function provideTimezoneTransitions()
    {
        $data = [];
        $timezones = NativeDateTimeZone::listIdentifiers();
        if (!$this->fullTest()) {
            $timezones = $this->randomSample($timezones, 10);
        }
        foreach ($timezones as $timezone) {
            $data[] = [$timezone, timezone_transitions_get(new NativeDateTimeZone($timezone))];
        }
        return $data;
    }

    /**
     * Test that we can get the country code
     *
     * @dataProvider provideTimezoneLocations
     *
     * @param string $name
     * @param array $locationData
     *
     * @return void
     *
     * @covers       \Kusabi\Date\DateTimeZone::getCountryCode
     */
    public function testGetCountryCode($name, $locationData)
    {
        $this->assertSame($locationData['country_code'], DateTimeZone::instance($name)->getCountryCode());
    }

    /**
     * Test getting the default timezone
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTimeZone::getDefault
     */
    public function testGetDefault()
    {
        $og = date_default_timezone_get();
        date_default_timezone_set('America/Los_Angeles');
        $this->assertTrue(DateTimeZone::getDefault()->equal(DateTimeZone::LosAngelesAmerica()));
        date_default_timezone_set($og);
    }

    /**
     * Test that we can get the latitude
     *
     * @dataProvider provideTimezoneLocations
     *
     * @param string $name
     * @param array $locationData
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTimeZone::getLatitude
     */
    public function testGetLatitude($name, $locationData)
    {
        $this->assertSame($locationData['latitude'], DateTimeZone::instance($name)->getLatitude());
    }

    /**
     * Test that we can get the longitude
     *
     * @dataProvider provideTimezoneLocations
     *
     * @param string $name
     * @param array $locationData
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTimeZone::getLongitude
     */
    public function testGetLongitude($name, $locationData)
    {
        $this->assertSame($locationData['longitude'], DateTimeZone::instance($name)->getLongitude());
    }

    /**
     * Test that we can get the transitions while passing date time objects in lue of timestamps
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTimeZone::getTransitions
     * @covers \Kusabi\Date\Transition
     */
    public function testGetTransitionsAcceptsDateTimes()
    {
        $timezone = DateTimeZone::LondonEurope();
        $datetimeA = new DateTime();
        $datetimeA->setTimestamp(1648342800);
        $datetimeB = new DateTime();
        $datetimeB->setTimestamp(1711846800);
        $transitionsArray = timezone_transitions_get($timezone, 1648342800, 1711846800);
        $transitions = $timezone->getTransitions($datetimeA, $datetimeB);
        $this->assertSame(count($transitionsArray), count($transitions));
        foreach ($transitions as $key => $transition) {
            $this->assertInstanceOf(Transition::class, $transition);
            $this->assertSame($transitionsArray[$key]['ts'], $transition->getTimestamp());
            $this->assertSame($transitionsArray[$key]['abbr'], $transition->getAbbreviation());
            $this->assertSame($transitionsArray[$key]['isdst'], $transition->isDaylightSavingsTime());
            $this->assertSame($transitionsArray[$key]['offset'], $transition->getOffset());
            $this->assertSame($transitionsArray[$key]['time'], $transition->getDate()->format('Y-m-d\TH:i:sO'));
        }
    }

    /**
     * Test that we can get the transitions while passing timestamps
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateTimeZone::getTransitions
     * @covers \Kusabi\Date\Transition
     */
    public function testGetTransitionsAcceptsTimeStamps()
    {
        $timezone = DateTimeZone::LondonEurope();
        $transitionsArray = timezone_transitions_get($timezone, 1648342800, 1711846800);
        $transitions = $timezone->getTransitions(1648342800, 1711846800);
        $this->assertSame(count($transitionsArray), count($transitions));
        foreach ($transitions as $key => $transition) {
            $this->assertInstanceOf(Transition::class, $transition);
            $this->assertSame($transitionsArray[$key]['ts'], $transition->getTimestamp());
            $this->assertSame($transitionsArray[$key]['abbr'], $transition->getAbbreviation());
            $this->assertSame($transitionsArray[$key]['isdst'], $transition->isDaylightSavingsTime());
            $this->assertSame($transitionsArray[$key]['offset'], $transition->getOffset());
            $this->assertSame($transitionsArray[$key]['time'], $transition->getDate()->format('Y-m-d\TH:i:sO'));
        }
    }

    /**
     * Test that transitions are returned as an object
     *
     * @dataProvider provideTimezoneTransitions
     *
     * @param string $name
     * @param array $transitionsArray
     *
     * @return void
     *
     * @covers       \Kusabi\Date\DateTimeZone::getTransitions
     * @covers       \Kusabi\Date\Transition
     */
    public function testGetTransitionsReturnsTransitionClass($name, $transitionsArray)
    {
        $timezone = new DateTimeZone($name);
        $transitions = $timezone->getTransitions();
        $this->assertSame(count($transitionsArray), count($transitions));
        foreach ($transitions as $key => $transition) {
            $this->assertInstanceOf(Transition::class, $transition);
            $this->assertSame($transitionsArray[$key]['ts'], $transition->getTimestamp());
            $this->assertSame($transitionsArray[$key]['abbr'], $transition->getAbbreviation());
            $this->assertSame($transitionsArray[$key]['isdst'], $transition->isDaylightSavingsTime());
            $this->assertSame($transitionsArray[$key]['offset'], $transition->getOffset());
            $this->assertSame($transitionsArray[$key]['time'], $transition->getDate()->format('Y-m-d\TH:i:sO'));
        }
    }
}
