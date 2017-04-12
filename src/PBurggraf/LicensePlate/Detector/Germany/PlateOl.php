<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateOl extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Oldenburg',
        'Landkreis Oldenburg',
        'Polizeidirektion Oldenburg',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^OL (?:[A-OQ-Z][A-CE-Z] [1-9][0-9]{0,3}|PD [1-9](?:[0-9]?|[0-9]{3}))$/',
        '/^OL [A-Z] [1-9][0-9]{0,3}$/',
        '/^OL PD [1-9][0-9]{2}$/',
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
