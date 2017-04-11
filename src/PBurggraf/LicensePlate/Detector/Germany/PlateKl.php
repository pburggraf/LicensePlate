<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateKl extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Kaiserslautern',
        'Landkreis Kaiserslautern',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^KL (?:[A-Z]{2} [1-9][0-9]{0,1}|[A-Z]{2} [1-9][0-9]{3}|[A-Z] [1-9][0-9]{0,3})$/',
        '/^KL [A-Z]{2} [1-9][0-9]{0,2}$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
