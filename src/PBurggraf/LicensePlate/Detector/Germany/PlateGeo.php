<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateGeo extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landkreis Haßberge',
        'Landkreis Schweinfurt',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^GEO [A|B] [1-9][0-9]{3}$/',
        '/^GEO (?:[A|B] [1-9][0-9]{0,2}|(?:[C-Z]{1,2}|[A|B][A-Z]) [1-9][0-9]{0,3})$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
