<?php

namespace Kusabi\Date\Tests\DateInterval;

use Exception;
use Kusabi\Date\DateInterval;
use PHPUnit\Framework\TestCase;

class Reading extends TestCase
{
    /**
     * Test fetching the number of days
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::getDays
     */
    public function testGetDays()
    {
        $this->assertSame(0, DateInterval::instance()->getDays());
        $this->assertSame(0, DateInterval::instance()->invert()->getDays());
        $this->assertSame(0, DateInterval::second()->getDays());
        $this->assertSame(0, DateInterval::second()->invert()->getDays());
        $this->assertSame(0, DateInterval::seconds(30)->getDays());
        $this->assertSame(0, DateInterval::seconds(30)->invert()->getDays());
        $this->assertSame(0, DateInterval::minute()->getDays());
        $this->assertSame(0, DateInterval::minute()->invert()->getDays());
        $this->assertSame(0, DateInterval::hour()->getDays());
        $this->assertSame(0, DateInterval::hour()->invert()->getDays());
        $this->assertSame(1, DateInterval::day()->getDays());
        $this->assertSame(-1, DateInterval::day()->invert()->getDays());
        $this->assertSame(28, DateInterval::month()->getDays());
        $this->assertSame(-28, DateInterval::month()->invert()->getDays());
        $this->assertSame(336, DateInterval::year()->getDays());
        $this->assertSame(-336, DateInterval::year()->invert()->getDays());
    }

    /**
     * Test fetching the number of hours
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::getHours
     */
    public function testGetHours()
    {
        $this->assertSame(0, DateInterval::instance()->getHours());
        $this->assertSame(0, DateInterval::instance()->invert()->getHours());
        $this->assertSame(0, DateInterval::second()->getHours());
        $this->assertSame(0, DateInterval::second()->invert()->getHours());
        $this->assertSame(0, DateInterval::seconds(30)->getHours());
        $this->assertSame(0, DateInterval::seconds(30)->invert()->getHours());
        $this->assertSame(0, DateInterval::minute()->getHours());
        $this->assertSame(0, DateInterval::minute()->invert()->getHours());
        $this->assertSame(1, DateInterval::hour()->getHours());
        $this->assertSame(-1, DateInterval::hour()->invert()->getHours());
        $this->assertSame(24, DateInterval::day()->getHours());
        $this->assertSame(-24, DateInterval::day()->invert()->getHours());
        $this->assertSame(672, DateInterval::month()->getHours());
        $this->assertSame(-672, DateInterval::month()->invert()->getHours());
        $this->assertSame(8064, DateInterval::year()->getHours());
        $this->assertSame(-8064, DateInterval::year()->invert()->getHours());
    }

    /**
     * Test fetching the number of minutes
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::getMinutes
     */
    public function testGetMinutes()
    {
        $this->assertSame(0, DateInterval::instance()->getMinutes());
        $this->assertSame(0, DateInterval::instance()->invert()->getMinutes());
        $this->assertSame(0, DateInterval::second()->getMinutes());
        $this->assertSame(0, DateInterval::second()->invert()->getMinutes());
        $this->assertSame(0, DateInterval::seconds(30)->getMinutes());
        $this->assertSame(0, DateInterval::seconds(30)->invert()->getMinutes());
        $this->assertSame(1, DateInterval::minute()->getMinutes());
        $this->assertSame(-1, DateInterval::minute()->invert()->getMinutes());
        $this->assertSame(60, DateInterval::hour()->getMinutes());
        $this->assertSame(-60, DateInterval::hour()->invert()->getMinutes());
        $this->assertSame(1440, DateInterval::day()->getMinutes());
        $this->assertSame(-1440, DateInterval::day()->invert()->getMinutes());
        $this->assertSame(40320, DateInterval::month()->getMinutes());
        $this->assertSame(-40320, DateInterval::month()->invert()->getMinutes());
        $this->assertSame(483840, DateInterval::year()->getMinutes());
        $this->assertSame(-483840, DateInterval::year()->invert()->getMinutes());
    }

    /**
     * Test fetching the number of months
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::getMonths
     */
    public function testGetMonths()
    {
        $this->assertSame(0, DateInterval::instance()->getMonths());
        $this->assertSame(0, DateInterval::instance()->invert()->getMonths());
        $this->assertSame(0, DateInterval::second()->getMonths());
        $this->assertSame(0, DateInterval::second()->invert()->getMonths());
        $this->assertSame(0, DateInterval::seconds(30)->getMonths());
        $this->assertSame(0, DateInterval::seconds(30)->invert()->getMonths());
        $this->assertSame(0, DateInterval::minute()->getMonths());
        $this->assertSame(0, DateInterval::minute()->invert()->getMonths());
        $this->assertSame(0, DateInterval::hour()->getMonths());
        $this->assertSame(0, DateInterval::hour()->invert()->getMonths());
        $this->assertSame(0, DateInterval::day()->getMonths());
        $this->assertSame(0, DateInterval::day()->invert()->getMonths());
        $this->assertSame(1, DateInterval::month()->getMonths());
        $this->assertSame(-1, DateInterval::month()->invert()->getMonths());
        $this->assertSame(12, DateInterval::year()->getMonths());
        $this->assertSame(-12, DateInterval::year()->invert()->getMonths());
    }

    /**
     * Test fetching the number of days as a float
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::getRealDays
     */
    public function testGetRealDays()
    {
        $this->assertSame(0.0, DateInterval::instance()->getRealDays());
        $this->assertSame(0.0, DateInterval::instance()->invert()->getRealDays());
        $this->assertSame(0.000011574074074074073, DateInterval::second()->getRealDays());
        $this->assertSame(-0.000011574074074074073, DateInterval::second()->invert()->getRealDays());
        $this->assertSame(0.00034722222222222224, DateInterval::seconds(30)->getRealDays());
        $this->assertSame(-0.00034722222222222224, DateInterval::seconds(30)->invert()->getRealDays());
        $this->assertSame(0.00069444444444444447, DateInterval::minute()->getRealDays());
        $this->assertSame(-0.00069444444444444447, DateInterval::minute()->invert()->getRealDays());
        $this->assertSame(0.041666666666666664, DateInterval::hour()->getRealDays());
        $this->assertSame(-0.041666666666666664, DateInterval::hour()->invert()->getRealDays());
        $this->assertSame(1.0, DateInterval::day()->getRealDays());
        $this->assertSame(-1.0, DateInterval::day()->invert()->getRealDays());
        $this->assertSame(28.0, DateInterval::month()->getRealDays());
        $this->assertSame(-28.0, DateInterval::month()->invert()->getRealDays());
        $this->assertSame(336.0, DateInterval::year()->getRealDays());
        $this->assertSame(-336.0, DateInterval::year()->invert()->getRealDays());
    }

    /**
     * Test fetching the number of hours as a float
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::getRealHours
     */
    public function testGetRealHours()
    {
        $this->assertSame(0.0, DateInterval::instance()->getRealHours());
        $this->assertSame(0.0, DateInterval::instance()->invert()->getRealHours());
        $this->assertSame(0.00027777777777777778, DateInterval::second()->getRealHours());
        $this->assertSame(-0.00027777777777777778, DateInterval::second()->invert()->getRealHours());
        $this->assertSame(0.0083333333333333332, DateInterval::seconds(30)->getRealHours());
        $this->assertSame(-0.0083333333333333332, DateInterval::seconds(30)->invert()->getRealHours());
        $this->assertSame(0.016666666666666666, DateInterval::minute()->getRealHours());
        $this->assertSame(-0.016666666666666666, DateInterval::minute()->invert()->getRealHours());
        $this->assertSame(1.0, DateInterval::hour()->getRealHours());
        $this->assertSame(-1.0, DateInterval::hour()->invert()->getRealHours());
        $this->assertSame(24.0, DateInterval::day()->getRealHours());
        $this->assertSame(-24.0, DateInterval::day()->invert()->getRealHours());
        $this->assertSame(672.0, DateInterval::month()->getRealHours());
        $this->assertSame(-672.0, DateInterval::month()->invert()->getRealHours());
        $this->assertSame(8064.0, DateInterval::year()->getRealHours());
        $this->assertSame(-8064.0, DateInterval::year()->invert()->getRealHours());
    }

    /**
     * Test fetching the number of minutes as a float
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::getRealMinutes
     */
    public function testGetRealMinutes()
    {
        $this->assertSame(0.0, DateInterval::instance()->getRealMinutes());
        $this->assertSame(0.0, DateInterval::instance()->invert()->getRealMinutes());
        $this->assertSame(0.016666666666666666, DateInterval::second()->getRealMinutes());
        $this->assertSame(-0.016666666666666666, DateInterval::second()->invert()->getRealMinutes());
        $this->assertSame(0.5, DateInterval::seconds(30)->getRealMinutes());
        $this->assertSame(-0.5, DateInterval::seconds(30)->invert()->getRealMinutes());
        $this->assertSame(1.0, DateInterval::minute()->getRealMinutes());
        $this->assertSame(-1.0, DateInterval::minute()->invert()->getRealMinutes());
        $this->assertSame(60.0, DateInterval::hour()->getRealMinutes());
        $this->assertSame(-60.0, DateInterval::hour()->invert()->getRealMinutes());
        $this->assertSame(1440.0, DateInterval::day()->getRealMinutes());
        $this->assertSame(-1440.0, DateInterval::day()->invert()->getRealMinutes());
        $this->assertSame(40320.0, DateInterval::month()->getRealMinutes());
        $this->assertSame(-40320.0, DateInterval::month()->invert()->getRealMinutes());
        $this->assertSame(483840.0, DateInterval::year()->getRealMinutes());
        $this->assertSame(-483840.0, DateInterval::year()->invert()->getRealMinutes());
    }

    /**
     * Test fetching the number of months as a float
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::getRealMonths
     */
    public function testGetRealMonths()
    {
        $this->assertSame(0.0, DateInterval::instance()->getRealMonths());
        $this->assertSame(0.0, DateInterval::instance()->invert()->getRealMonths());
        $this->assertSame(0.00000041335978835978832, DateInterval::second()->getRealMonths());
        $this->assertSame(-0.00000041335978835978832, DateInterval::second()->invert()->getRealMonths());
        $this->assertSame(0.000012400793650793651, DateInterval::seconds(30)->getRealMonths());
        $this->assertSame(-0.000012400793650793651, DateInterval::seconds(30)->invert()->getRealMonths());
        $this->assertSame(0.000024801587301587302, DateInterval::minute()->getRealMonths());
        $this->assertSame(-0.000024801587301587302, DateInterval::minute()->invert()->getRealMonths());
        $this->assertSame(0.001488095238095238, DateInterval::hour()->getRealMonths());
        $this->assertSame(-0.001488095238095238, DateInterval::hour()->invert()->getRealMonths());
        $this->assertSame(0.035714285714285712, DateInterval::day()->getRealMonths());
        $this->assertSame(-0.035714285714285712, DateInterval::day()->invert()->getRealMonths());
        $this->assertSame(1.0, DateInterval::month()->getRealMonths());
        $this->assertSame(-1.0, DateInterval::month()->invert()->getRealMonths());
        $this->assertSame(12.0, DateInterval::year()->getRealMonths());
        $this->assertSame(-12.0, DateInterval::year()->invert()->getRealMonths());
    }

    /**
     * Test fetching the number of years as a float
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::getRealYears
     */
    public function testGetRealYears()
    {
        $this->assertSame(0.0, DateInterval::instance()->getRealYears());
        $this->assertSame(0.0, DateInterval::instance()->invert()->getRealYears());
        $this->assertSame(0.00000003444664902998236, DateInterval::second()->getRealYears());
        $this->assertSame(-0.00000003444664902998236, DateInterval::second()->invert()->getRealYears());
        $this->assertSame(0.000001033399470899471, DateInterval::seconds(30)->getRealYears());
        $this->assertSame(-0.000001033399470899471, DateInterval::seconds(30)->invert()->getRealYears());
        $this->assertSame(0.0000020667989417989419, DateInterval::minute()->getRealYears());
        $this->assertSame(-0.0000020667989417989419, DateInterval::minute()->invert()->getRealYears());
        $this->assertSame(0.0001240079365079365, DateInterval::hour()->getRealYears());
        $this->assertSame(-0.0001240079365079365, DateInterval::hour()->invert()->getRealYears());
        $this->assertSame(0.002976190476190476, DateInterval::day()->getRealYears());
        $this->assertSame(-0.002976190476190476, DateInterval::day()->invert()->getRealYears());
        $this->assertSame(0.083333333333333329, DateInterval::month()->getRealYears());
        $this->assertSame(-0.083333333333333329, DateInterval::month()->invert()->getRealYears());
        $this->assertSame(1.0, DateInterval::year()->getRealYears());
        $this->assertSame(-1.0, DateInterval::year()->invert()->getRealYears());
    }

    /**
     * Test fetching the number of seconds
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::getSeconds
     */
    public function testGetSeconds()
    {
        $this->assertSame(0, DateInterval::instance()->getSeconds());
        $this->assertSame(0, DateInterval::instance()->invert()->getSeconds());
        $this->assertSame(1, DateInterval::second()->getSeconds());
        $this->assertSame(-1, DateInterval::second()->invert()->getSeconds());
        $this->assertSame(30, DateInterval::seconds(30)->getSeconds());
        $this->assertSame(-30, DateInterval::seconds(30)->invert()->getSeconds());
        $this->assertSame(60, DateInterval::minute()->getSeconds());
        $this->assertSame(-60, DateInterval::minute()->invert()->getSeconds());
        $this->assertSame(3600, DateInterval::hour()->getSeconds());
        $this->assertSame(-3600, DateInterval::hour()->invert()->getSeconds());
        $this->assertSame(86400, DateInterval::day()->getSeconds());
        $this->assertSame(-86400, DateInterval::day()->invert()->getSeconds());
        $this->assertSame(2419200, DateInterval::month()->getSeconds());
        $this->assertSame(-2419200, DateInterval::month()->invert()->getSeconds());
        $this->assertSame(29030400, DateInterval::year()->getSeconds());
        $this->assertSame(-29030400, DateInterval::year()->invert()->getSeconds());
    }

    /**
     * Test fetching the number of years
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::getYears
     */
    public function testGetYears()
    {
        $this->assertSame(0, DateInterval::instance()->getYears());
        $this->assertSame(0, DateInterval::instance()->invert()->getYears());
        $this->assertSame(0, DateInterval::second()->getYears());
        $this->assertSame(0, DateInterval::second()->invert()->getYears());
        $this->assertSame(0, DateInterval::seconds(30)->getYears());
        $this->assertSame(0, DateInterval::seconds(30)->invert()->getYears());
        $this->assertSame(0, DateInterval::minute()->getYears());
        $this->assertSame(0, DateInterval::minute()->invert()->getYears());
        $this->assertSame(0, DateInterval::hour()->getYears());
        $this->assertSame(0, DateInterval::hour()->invert()->getYears());
        $this->assertSame(0, DateInterval::day()->getYears());
        $this->assertSame(0, DateInterval::day()->invert()->getYears());
        $this->assertSame(0, DateInterval::month()->getYears());
        $this->assertSame(0, DateInterval::month()->invert()->getYears());
        $this->assertSame(1, DateInterval::year()->getYears());
        $this->assertSame(-1, DateInterval::year()->invert()->getYears());
    }

    /**
     * Test that we can read the spec string
     *
     * @throws Exception
     *
     * @return void
     *
     * @covers \Kusabi\Date\DateInterval::getSpec
     */
    public function testGetSpec()
    {
        $interval = new DateInterval('P1Y2M3DT4H5M6S');
        $this->assertSame('P1Y2M3DT4H5M6S', $interval->getSpec());

        $interval->subYear()->subMonths(2)->subDays(3);
        $this->assertSame('PT4H5M6S', $interval->getSpec());
    }
}
