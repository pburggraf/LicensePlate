<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateKem extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landkreis Bayreuth',
        'Landkreis Tirschenreuth',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '^[A-Z]T [1-9][0-9]{0,1}$',
        '^(?:[A-Z]T [1-9][0-9]{2,3}|[A-Z][A-SU-Z]{0,1} [1-9][0-9]{0,3})$',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
