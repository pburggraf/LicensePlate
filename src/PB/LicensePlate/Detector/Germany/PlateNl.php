<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateNl extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Länderfahrzeug',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_FEDERAL,
    ];
}
