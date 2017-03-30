<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateVib extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landkreis Landshut',
        'Landkreis Rottal-Inn',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^VIB (?:[A-Z]{2} [1-9][0-9]{0,3}|[AC-HJ-NOP-R-Z] [1-9][0-9]{0,3}|[BIOQ] [1-9](?:[0-9]{0,1}|[0-9]{3}))$/',
        '/^VIB [BIOQ] [1-9][0-9]{2}$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
