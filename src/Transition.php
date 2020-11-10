<?php

namespace Kusabi\Date;

class Transition
{
    /**
     * The abbreviated name
     *
     * @var string
     */
    protected $abbreviation;

    /**
     * The day light savings flag
     *
     * @var int
     */
    protected $dls;

    /**
     * The offset
     *
     * @var int
     */
    protected $offset;

    /**
     * The timestamp
     *
     * @var int
     */
    protected $timestamp;

    /**
     * Transition constructor.
     *
     * @param int $timestamp
     * @param int $offset
     * @param bool $dls
     * @param string $abbreviation
     */
    public function __construct($timestamp, $offset, $dls, $abbreviation)
    {
        $this->timestamp = $timestamp;
        $this->offset = $offset;
        $this->dls = $dls;
        $this->abbreviation = $abbreviation;
    }

    /**
     * Create a new instance from the array returned by {@link timezone_transitions_get() timezone_transitions_get}
     *
     * @param array $array
     *
     * @return static
     */
    public static function createFromArray(array $array)
    {
        return new static($array['ts'], $array['offset'], $array['isdst'], $array['abbr']);
    }

    /**
     * Get Abbreviation
     *
     * @return string
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }

    /**
     * Get the date object
     *
     * @return DateTime
     */
    public function getDate()
    {
        return DateTime::createFromTimestamp($this->timestamp);
    }

    /**
     * Get the offset
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Get the timestamp
     *
     * @return int
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Is this transition in daylight savings time
     *
     * @return int
     */
    public function isDaylightSavingsTime()
    {
        return $this->dls;
    }
}
