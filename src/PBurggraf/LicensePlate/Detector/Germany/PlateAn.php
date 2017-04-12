<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateAn extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landkreis Ansbach',
        'Stadt Ansbach',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^AN [A-Z]{2} [1-9][0-9]{2}$/',
        '/^AN (?:[A-Z]{2} [1-9][0-9]?|[A-Z]{2} [1-9][0-9]{3}|[A-Z] [1-9][0-9]{0,3})$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
