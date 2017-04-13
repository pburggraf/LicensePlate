<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateOs extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Osnabrück',
        'Landkreis Osnabrück',
        'Polizeidirektion Osnabrück',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^OS [A-Z] [1-9]\d{0,3}$/',
        '/^OS (?:[A-OQ-Z][A-CE-Z] [1-9]\d{0,3}|PD [1-9](?:\d?|\d{3}))$/',
        '/^OS PD [1-9]\d{2}$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
    ];
}
