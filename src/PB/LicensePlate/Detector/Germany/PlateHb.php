<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

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
        '/^HB (?:[A-Z]{2} [1-9][0-9]{0,3}|[A-Z] [1-9][0-9]{0,2})$/',
        '/^HB [A-Z] [1-9][0-9]{3}$/',
        '/^HB (?:[0-9]{1,4} [0-9]{1,4}|[0-9]{1,6})[A-Z]?$/',
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
