<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateMueb extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landkreis Bayreuth',
        'Landkreis Hof',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^MÜB (?:[A-M] [1-9]\d{2}|[N-Z] [1-9]\d?)$/',
        '/^MÜB (?:[N-Z] [1-9]\d{2,3}|[A-N] (?:[1-9]\d{3}|[1-9]\d?)|[A-Z]{2} [1-9]\d{0,3})$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
