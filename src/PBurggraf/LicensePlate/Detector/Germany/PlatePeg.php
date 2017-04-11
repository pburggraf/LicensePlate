<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlatePeg extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landkreis Bayreuth',
        'Landkreis Forchheim',
        'Landkreis Nürnberger Land',
        '',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^PEG [B-Z] [1-9][0-9]{0,2}$/',
        '/^PEG [A-Z] [1-9][0-9]{3}$/',
        '/^PEG A [1-9][0-9]{0,2}$/',
        '/^PEG [A-Z]{2} [1-9][0-9]{0,3}$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_INVALID,
    ];
}
