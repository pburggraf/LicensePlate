<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class Plate1 extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Bundestagspräsident',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^1 1$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_GOVERNMENT,
    ];
}