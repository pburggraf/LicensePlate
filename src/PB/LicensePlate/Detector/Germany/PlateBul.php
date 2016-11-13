<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateBul extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landkreis Schwandorf',
        'Landkreis Amberg-Sulzbach',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '^[A-Z]{2} [1-9][0-9]{0,3}$|^[A|C-E|H-Z] [1-9][0-9]{0,3}$',
        '^[BFG]{1} [1-9][0-9]{0,2}$',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
