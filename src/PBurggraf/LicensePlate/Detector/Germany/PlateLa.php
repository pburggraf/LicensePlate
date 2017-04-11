<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateLa extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Landshut',
        'Landkreis Landshut',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^LA (?:[A-Z]{1,2} (?:[1-9][0-9]{0,1}|[1-4][0-9]{3})|[A-Z] [1-9][0-9]{2}|[A-Z]{2} (?:[1-9][0-9]{0,1}|[1-4][0-9]{3}))[EH]?$/',
        '/^LA [A-Z]{2} (?:[1-9][0-9]{2}|[5-9][0-9]{3})[EH]?$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
