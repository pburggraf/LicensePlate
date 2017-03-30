<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateSan extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landkreis Hof',
        'Landkreis Kronach',
        'Landkreis Kulmbach',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^SAN [W-Z] [1-9][0-9]{0,2}$/',
        '/^SSAN (?:[S-V] [1-9][0-9]{0,3}|[A-I][A-Z] [1-9][0-9]{0,2})$/',
        '/^SAN (?:[A-R] [1-9][0-9]{0,3}|[J-Z][A-Z] [1-9][0-9]{0,2})$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}