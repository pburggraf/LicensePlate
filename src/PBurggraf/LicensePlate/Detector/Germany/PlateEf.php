<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateEf extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Erfurt',
        'Thüringer Polizei',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^EF (?:[A-KM-OQ-Z]{1,2} [1-9]\d{0,3}|[LP]{1,2} [1-9]\d{0,2})$/',
        '/^EF LP [1-9]\d{3}$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
    ];
}
