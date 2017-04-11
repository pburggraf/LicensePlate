<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlatePar extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landkreis Kelheim',
        'Landkreis Neumarkt in der Oberpfalz',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^PAR (?:[QY]|BB|CC) [1-9][0-9]{0,2}$/',
        '/^PAR (?:(?:[A-PR-XZ]|[AD-Z]{2}) [1-9][0-9]{0,3}|(?:[QY]|BB|CC) [1-9][0-9]{3})$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
