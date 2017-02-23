<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateR extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Regensburg',
        'Landkreis Regensburg',
        'Landkreis Regensburg',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^R (?:[A-OQ-Z][A-OQS-Z] [1-9][0-9]{0,2}|[M-OQ-Z][NOQS-Z] [1-9][0-9]{3})$/',
        '/^R [A-Z] [1-9][0-9]{3}$/',
        '/^R (?:PP|PR) [1-9][0-9]{2}$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
    ];
}
