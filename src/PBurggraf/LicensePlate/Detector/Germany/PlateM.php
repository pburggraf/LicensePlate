<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateM extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt München',
        'Landkreis München',
        'Polizeipräsidium München',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^M (?:[A-OQ-Z]{2} [1-9][0-9]{2,3}|PM [1-9][0-9]{2})$/',
        '/^M (?:[A-Z]{2} [1-9][0-9]?|[A-Z] [1-9][0-9]{0,3})$/',
        '/^M PM [1-9][0-9]{3}$/',
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
