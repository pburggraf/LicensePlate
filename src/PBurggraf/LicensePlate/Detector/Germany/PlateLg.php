<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateLg extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landkreis Lüneburg',
        'Polizeidirektion Lüneburg',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^LG (?:(?:[A-OQ-Z]{2}|[A-Z]) [1-9]\d{0,3}|PD [1-9]\d?)[EH]?$/',
        '/^LG PD [1-9]\d{2,3}$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
    ];
}
