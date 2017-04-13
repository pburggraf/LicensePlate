<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class Plate0 extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Bundespräsident',
        'Bundeskanzler',
        'Außenminister',
        'Erster Staatssekretär im Auswärtigen Amt',
        'Diplomatenkennzeichen',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^0 1$/',
        '/^0 2$/',
        '/^0 3$/',
        '/^0 4$/',

        '/^0 [1-9]\d{1,2} \d{1,3}[A-Z]?$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_GOVERNMENT,
        GermanyDetector::PLATE_TYPE_GOVERNMENT,
        GermanyDetector::PLATE_TYPE_GOVERNMENT,
        GermanyDetector::PLATE_TYPE_GOVERNMENT,

        GermanyDetector::PLATE_TYPE_DIPLOMATIC_CORPS,
    ];
}
