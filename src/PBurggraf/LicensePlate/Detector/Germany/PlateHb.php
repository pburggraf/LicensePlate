<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateHb extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Bremen, Senat und Bürgerschaft',
        'Stadt Bremerhaven',
        'Länderfahrzeug',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^HB (?:[A-Z]{2} [1-9]\d{0,3}|[A-Z] [1-9]\d{0,2})$/',
        '/^HB [A-Z] [1-9]\d{3}$/',
        '/^HB (?:\d{1,4} \d{1,4}|\d{1,6})[A-Z]?$/',
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
