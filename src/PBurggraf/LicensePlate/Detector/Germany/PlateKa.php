<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateKa extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Karlsruhe',
        'Landkreis Karlsruhe',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^KA (?:[A-Z]{2} [1-9]\d{2}|[N-Z][A-Z] [1-9]\d{3})$/',
        '/^KA (?:[A-Z] [1-9]\d{0,3}|[A-Z]{2} [1-9]\d?|[A-M][A-Z] [1-9]\d{3})$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
