<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateWue extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Würzburg',
        'Landkreis Würzburg',
        'Polizeipräsidium Unterfranken',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^WÜ (?:[A-OQ-Z]{2} [1-9][0-9]{2}|[A-N][A-Z] [1-9][0-9]{3})$/',
        '/^WÜ (?:[A-Z] [1-9][0-9]{2}|[A-Z]{1,2} [1-9][0-9]{0,1}|[A-OQ-Z]{1,2} [1-9][0-9]{3}|[OQ-Z][A-Z] [1-9][0-9]{3}|PP [1-9][0-9]{2})$/',
        '/^WÜ PP [1-9][0-9]{3}$/',
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
