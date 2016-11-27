<?php

namespace PB\LicensePlate\Test\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;
use PB\LicensePlate\LicensePlateFactory;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
abstract class AbstractGermanyPlate extends \PHPUnit_Framework_TestCase
{
    /**
     * @var array
     */
    protected static $plateTests = [];

    /**
     * @return array
     */
    public function getDataProvider()
    {
        return static::$plateTests;
    }
}