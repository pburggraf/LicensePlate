<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateWi extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Wiesbaden',
        'Länderfahrzeug',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^WI (?:(?:[A-GI-Z][A-OQ-Z]|H[A-OQ-Z]|[A-GI-Z]P) [1-9][0-9]{0,3}|[A-Z] [1-9][0-9]{0,3}|HP [1-9][0-9]?)$/',
        '/^WI HP [1-9][0-9]{2,3}$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
    GermanyDetector::PLATE_TYPE_DEFAULT,
    GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
];
}
