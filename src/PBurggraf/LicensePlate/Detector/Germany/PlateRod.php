<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateRod extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landkreis Cham',
        'Landkreis Schwandorf',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^ROD (?:[A-Z]{2} [1-9][0-9]{0,3}|[AC-EHJ-Z] [1-9][0-9]{0,3}|B (?:50[1-9]|5[1-9][0-9]|[6-9][0-9]{0,3}|[1-9][0-9]{3})|F (?:70[1-9]|7[1-9][0-9]|[8-9][0-9]{0,2}|[1-9][0-9]{3})|G (?:[1-9]|[1-4][0-9]|40[1-9]|4[1-9][0-9]|[5-9][0-9]{2}|[1-9][0-9]{3})|I (?:[1-9][0-9]?|100[1-9]|10[1-9][0-9]|1[1-9][0-9]{2}|[2-9][0-9]{3}))$/',
        '/^ROD (?:B (?:[1-4][0-9]{0,2}|500)|F (?:[1-6][0-9]{0,2}|700)|G (?:[5-9][0-9]|[1-3][0-9]{1,2}|400)|I (?:[1-9][0-9]{2}|1000))$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
