<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateBs extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Braunschweig',
        'Polizeidirektion Braunschweig',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^BS (?:[A-Z] [1-9]\d{0,3}|[A-Z]{2} [1-9]\d?|[A-O]{2} [1-9]\d{2,3}|[Q-Z]{2} [1-9]\d{2,3})$/',
        '/^BS PD [1-9]\d{2,3}$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
    ];
}
