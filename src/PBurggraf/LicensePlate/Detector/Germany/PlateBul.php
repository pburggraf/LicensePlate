<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateBul extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landkreis Schwandorf',
        'Landkreis Amberg-Sulzbach',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^BUL (?:[A-Z]{2} [1-9][0-9]{0,3}|[AC-EH-Z] [1-9][0-9]{0,3}|[BFG] [1-9][0-9]{3})$/',
        '/^BUL [BFG] [1-9][0-9]{0,2}$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
