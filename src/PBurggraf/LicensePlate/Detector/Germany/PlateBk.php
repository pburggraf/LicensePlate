<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateBk extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Rems-Murr-Kreis',
        'Landkreis Börde',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^BK (?:[A-Z] [1-9]\d{0,3}|[A-Z]{1,2} [1-9]\d?)$/',
        '/^BK [A-Z]{2} [1-9]\d{2,3}$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
