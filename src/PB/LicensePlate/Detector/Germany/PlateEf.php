<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

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
        '(?:^[A-KM-OQ-Z]{1,2} [1-9][0-9]{0,3}$|^[LP]{1,2} [1-9][0-9]{0,2}$)',
        '^LP [1-9][0-9]{3}$',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
    ];
}
