<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateN extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Nürnberg',
        'Landkreis Nürnberger Land',
        'Polizeipräsidium Mittelfranken',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^N (?:[A-OQ-Z]{2} [1-9][0-9]{0,3}|[A-Z] [1-9][0-9]{3}|PP (?:[1-9][0-9]?|[1-9][0-9]{3}))$/',
        '/^N [A-Z] [1-9][0-9]{0,2}$/',
        '/^N PP [1-9][0-9]{2}$/',
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
