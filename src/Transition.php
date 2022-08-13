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
     * The daylight savings flag
     *
     * @var bool
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
    public function __construct(int $timestamp, int $offset, bool $dls, string $abbreviation)
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
    public static function createFromArray(array $array): self
    {
        return new static($array['ts'], $array['offset'], $array['isdst'], $array['abbr']);
    }

    /**
     * Get Abbreviation
     *
     * @return string
     */
    public function getAbbreviation(): string
    {
        return $this->abbreviation;
    }

    /**
     * Get the date object
     *
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return DateTime::createFromTimestamp($this->timestamp);
    }

    /**
     * Get the offset
     *
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * Get the timestamp
     *
     * @return int
     */
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    /**
     * Is this transition in daylight savings time
     *
     * @return bool
     */
    public function isDaylightSavingsTime(): bool
    {
        return $this->dls;
    }
}
