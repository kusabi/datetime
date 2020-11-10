<?php

namespace Kusabi\Date\Tests;

class TestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * Are we performing a fast test.
     *
     * This will take random samples from larger test while still affirming the accuracy of the tests.
     *
     * Set this environment variable to false for CI unit tests
     *
     * @return bool
     */
    protected function fullTest()
    {
        return isset($_ENV['FULL_TEST']) ? (bool) $_ENV['FULL_TEST'] : false;
    }

    /**
     * Take a random sample from an array
     *
     * @param array $array
     * @param int $size
     *
     * @return array
     */
    protected function randomSample(array $array, $size)
    {
        shuffle($array);
        return array_slice($array, 0, $size);
    }
}
