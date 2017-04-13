<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateMai extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landkreis Landshut',
        'Landkreis Kelheim',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^MAI [BFGIOQ] [1-9]\d{0,3}$/',
        '/^MAI [AC-EHJ-NPR-Z][A-Z]? [1-9]\d{0,3}$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
