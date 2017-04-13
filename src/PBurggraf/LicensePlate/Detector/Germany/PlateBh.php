<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateBh extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Ortenaukreis',
        'Landkreis Rastatt',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^BH (?:F 7\d{3}|N 8\d{3}|O 2\d{3}|OF (?:[1-6]\d{0,3}|\d{1,3})|OG 9\d{3}|OP (?:[1-4]\d{0,3}|\d{1,3})|OK 3\d{3})$/',
        '/^BH [A-Z]{1,2} [1-9]\d{0,3}$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
