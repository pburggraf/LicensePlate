<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

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
        '/^VIB (?:[A-Z]{2} [1-9]\d{0,3}|[AC-HJ-NPR-Z] [1-9]\d{0,3}|[BIOQ] [1-9](?:\d?|\d{3}))$/',
        '/^VIB [BIOQ] [1-9]\d{2}$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
