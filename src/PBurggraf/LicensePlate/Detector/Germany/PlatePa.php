<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlatePa extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Passau',
        'Landkreis Passau',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^PA [A-Z] [1-9]\d{0,3}$/',
        '/^PA [A-Z]{2} [1-9]\d{0,3}$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
