<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateSr extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landkreis Straubing-Bogen',
        'Stadt Straubing',
        'Polizeipräsidium Niederbayern',
        '',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^SR (?:[A-Z]{2} [1-9]\d{0,2})$/',
        '/^SR (?:[A-Z] [1-9]\d{0,2}|[A-OQ-Z] [1-9]\d{3}|P [2-9]\d{3})$/',
        '/^SR P 1\d{3}$/',
        '/^SR [A-Z]{2} [1-9]\d{3}$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        GermanyDetector::PLATE_TYPE_INVALID,
    ];
}
