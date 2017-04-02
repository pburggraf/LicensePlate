<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateX extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'NATO Fahrzeug',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^X [1-9][0-9]{3}$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_MILITARY,
    ];
}
