<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateRol extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landkreis Kelheim',
        'Landkreis Landshut',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^ROL (?:[A-Z]{2} [1-9][0-9]{3}|[AC-EHJ-NPR-Z] [1-9][0-9]{0,3})$/',
        '/^ROL (?:[A-Z]{2} [1-9][0-9]{0,2}|[BFGIOQ] [1-9][0-9]{0,3})$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
