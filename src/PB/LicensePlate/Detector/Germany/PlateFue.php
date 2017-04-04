<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateFue extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Fürth',
        'Landkreis Fürth',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^FÜ [A-Z]{2} [1-9][0-9]{2}$/',
        '/^FÜ (?:[A-Z]{2} [1-9][0-9]{0,1}|[A-Z]{2} [1-9][0-9]{3}|[A-Z] [1-9][0-9]{0,3})$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
