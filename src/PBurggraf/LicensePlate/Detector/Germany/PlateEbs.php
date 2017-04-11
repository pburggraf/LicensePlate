<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateEbs extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landkreis Kulmbach',
        'Landkreis Bayreuth',
        'Landkreis Forchheim',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^EBS [A-M] [1-9][0-9]{0,2}$/',
        '/^EBS [N-Z] [1-9][0-9]{0,2}$/',
        '/^EBS (?:[A-Z] [1-9][0-9]{3}|[A-Z]{2} [1-9][0-9]{0,3})$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
