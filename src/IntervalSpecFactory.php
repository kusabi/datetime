<?php

namespace Kusabi\Date;

use DateInterval as NativeDateInterval;

class IntervalSpecFactory
{
    /**
     * Create an interval spec string from an instance of DateInterval
     *
     * @param NativeDateInterval $interval
     *
     * @return string
     */
    public function createFromInterval(NativeDateInterval $interval): string
    {
        // Start the spec
        $spec = 'P';

        // Add the dates (if any)
        $dates = array_filter([
            'Y' => abs($interval->y),
            'M' => abs($interval->m),
            'D' => abs($interval->d),
        ]);
        foreach ($dates as $key => $value) {
            $spec .= $value.$key;
        }

        // Add the times (if any)
        $times = array_filter([
            'H' => abs($interval->h),
            'M' => abs($interval->i),
            'S' => abs($interval->s),
        ]);
        if (!empty($times)) {
            $spec .= 'T';
            foreach ($times as $key => $value) {
                $spec .= $value.$key;
            }
        }

        // If no dates or times, return a 0-second spec
        return $spec === 'P' ? DateInterval::SPEC_EMPTY : $spec;
    }

    /**
     * Create an interval spec string form the individual values
     *
     * @param int|null $years
     * @param int|null $months
     * @param int|null $weeks
     * @param int|null $days
     * @param int|null $hours
     * @param int|null $minutes
     * @param int|null $seconds
     *
     * @return string
     */
    public function createFromValues(int $years = null, int $months = null, int $weeks = null, int $days = null, int $hours = null, int $minutes = null, int $seconds = null): string
    {
        $spec = 'P';

        if ($years > 0) {
            $spec .= $years.'Y';
        }

        if ($months > 0) {
            $spec .= $months.'M';
        }

        $daysTotal = 0;
        if ($weeks > 0) {
            $daysTotal += $weeks * 7;
        }
        if ($days > 0) {
            $daysTotal += $days;
        }
        if ($daysTotal > 0) {
            $spec .= $daysTotal.'D';
        }

        if ($hours > 0 || $minutes > 0 || $seconds > 0) {
            $spec .= 'T';

            if ($hours > 0) {
                $spec .= $hours.'H';
            }

            if ($minutes > 0) {
                $spec .= $minutes.'M';
            }

            if ($seconds > 0) {
                $spec .= $seconds.'S';
            }
        }

        return $spec == 'P' ? DateInterval::SPEC_EMPTY : $spec;
    }
}
