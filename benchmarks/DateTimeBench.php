<?php

namespace Kusabi\Date\Benchmarks;

use Carbon\Carbon;
use Kusabi\Date\DateTime;
use Kusabi\Date\DateTimeZone;

/**
 * @Revs(1000)
 * @Iterations(10)
 * @BeforeMethods("_setUp")
 */
class DateTimeBench
{
    /** @var Carbon */
    protected $carbonDateTime;

    /** @var \DateTime */
    protected $nativeDateTime;

    /** @var DateTime */
    protected $ourDateTime;

    public function _setUp()
    {
        $this->ourDateTime = new DateTime();
        $this->carbonDateTime = new Carbon();
        $this->nativeDateTime = new \DateTime();
    }

    public function benchCopyCarbon()
    {
        $this->ourDateTime->copy($this->carbonDateTime);
    }

    public function benchCopyNative()
    {
        $this->ourDateTime->copy($this->nativeDateTime);
    }

    public function benchCopyOurs()
    {
        $this->ourDateTime->copy($this->ourDateTime);
    }

    public function benchCreateFromDate()
    {
        DateTime::createFromDate(2022, 10, 31);
    }

    public function benchCreateFromDateAndTime()
    {
        DateTime::createFromDateAndTime(2022, 10, 31, 12, 30, 12);
    }

    public function benchCreateFromFormat()
    {
        DateTime::createFromFormat('Y-m-d H:i:s.u', '2022-01-01 12:30:02.555666');
    }

    public function benchCreateFromInstanceCarbon()
    {
        DateTime::createFromInstance($this->carbonDateTime);
    }

    public function benchCreateFromInstanceNative()
    {
        DateTime::createFromInstance($this->nativeDateTime);
    }

    public function benchCreateFromInstanceOurs()
    {
        DateTime::createFromInstance($this->ourDateTime);
    }

    public function benchCreateFromTimestamp()
    {
        DateTime::createFromTimestamp(1660983300);
    }

    public function benchCreateFromTimestampMicroTimeFloat()
    {
        DateTime::createFromTimestamp(1660983300.5556666);
    }

    public function benchCreateFromTimestampMicroTimeString()
    {
        DateTime::createFromTimestamp('0.5556666 1660983300');
    }

    public function benchGetTimezone()
    {
        $this->ourDateTime->getTimezone();
    }

    public function benchGetTimezoneNative()
    {
        $this->nativeDateTime->getTimezone();
    }

    public function benchInstance()
    {
        DateTime::instance();
    }

    public function benchNow()
    {
        DateTime::now();
    }

    public function benchNowWithStringTimezone()
    {
        DateTime::now('Asia/Tokyo');
    }

    public function benchNowWithTimezone()
    {
        DateTime::now(DateTimeZone::TokyoAsia());
    }

    public function benchSetTimestampMicroTimeFloat()
    {
        $this->ourDateTime->setTimestamp(1660983300.5556666);
    }

    public function benchSetTimestampMicroTimeString()
    {
        $this->ourDateTime->setTimestamp('0.5556666 1660983300');
    }

    public function benchSetTimestampTimestamp()
    {
        $this->ourDateTime->setTimestamp(1640995200);
    }

}