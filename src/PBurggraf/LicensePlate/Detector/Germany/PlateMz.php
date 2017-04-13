<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

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
        '/^MZ (?:[A-Z]{2} [1-9]\d{2}|(?:[A-J][A-Z]|K[A-Y]) [1-9]\d{3})$/',
        '/^MZ (?:[A-Z]{2} [1-9]\d?|[A-Z] [1-9]\d{0,3}|(?:[L-Z][A-Z]|KZ) [1-9]\d{3})$/',
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
