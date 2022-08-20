<?php

namespace Kusabi\Date\Benchmarks;

use Carbon\CarbonTimeZone;
use Kusabi\Date\DateTimeZone;

/**
 * @Revs(1000)
 * @Iterations(10)
 * @BeforeMethods("_setUp")
 */
class DateTimeZoneBench
{
    protected $carbonDateTimeZone;
    protected $nativeDateTimeZone;
    protected $ourDateTimeZone;

    public function _setUp()
    {
        $this->ourDateTimeZone = new DateTimeZone('UTC');
        $this->carbonDateTimeZone = new CarbonTimeZone('UTC');
        $this->nativeDateTimeZone = new \DateTimeZone('UTC');
    }

    public function benchCreateFromAnythingInstance()
    {
        DateTimeZone::createFromAnything($this->ourDateTimeZone);
    }

    public function benchCreateFromAnythingNull()
    {
        DateTimeZone::createFromAnything(null);
    }

    public function benchCreateFromAnythingString()
    {
        DateTimeZone::createFromAnything('Asia/Tokyo');
    }

    public function benchCreateFromInstanceCarbon()
    {
        DateTimeZone::createFromInstance($this->carbonDateTimeZone);
    }

    public function benchCreateFromInstanceNative()
    {
        DateTimeZone::createFromInstance($this->nativeDateTimeZone);
    }

    public function benchCreateFromInstanceOurs()
    {
        DateTimeZone::createFromInstance($this->ourDateTimeZone);
    }

    public function benchGetDefault()
    {
        DateTimeZone::getDefault();
    }

    public function benchIsValidTimeZoneFalse()
    {
        $a = DateTimeZone::isValidTimezoneName('not-real');
    }

    public function benchIsValidTimeZoneTrue()
    {
        $a = DateTimeZone::isValidTimezoneName('Asia/Tokyo');
    }

    public function benchTokyoAsia()
    {
        DateTimeZone::TokyoAsia();
    }
}