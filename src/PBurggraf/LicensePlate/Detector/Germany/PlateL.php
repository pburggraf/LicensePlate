<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateL extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Leipzig',
        'Landkreis Leipzig',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^L [A-T][A_Z]? [1-9]\d{0,3}[EH]?$/',
        '/^L [U-Z][A-Z]? [1-9]\d{0,3}[EH]?$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
