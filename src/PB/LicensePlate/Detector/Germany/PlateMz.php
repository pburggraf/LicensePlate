<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateMz extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Mainz',
        'Landkreis Mainz-Bingen',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^MZ (?:[A-Z]{2} [1-9][0-9]{2}|(?:[A-J][A-Z]|K[A-Y]) [1-9][0-9]{3})$/',
        '/^MZ (?:[A-Z]{2} [1-9][0-9]?|[A-Z] [1-9][0-9]{0,3}|(?:[L-Z][A-Z]|KZ) [1-9][0-9]{3})$/',
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
