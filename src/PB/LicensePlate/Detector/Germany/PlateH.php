<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateH extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Hannover',
        'Region Hannover',
        'Zentrale Polizeidirektion Niedersachsen',
        'Polizeidirektion Hannover',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '^(?:(?:[AC-EH-Z][A-CE-Z]|[A-OQ-Y]D) [1-9][0-9]{2}|[BFG][A-Z] [1-9][0-9]{3})$',
        '^(?:[AC-EH-Z][A-CE-Z] (?:[1-9][0-9]|[1-9][0-9]{3})|[BFG][A-Z] [1-9][0-9]{1,2}|[ZP]D [1-9][0-9])$',
        '^PD [1-9][0-9]{2,3}$',
        '^ZD [1-9][0-9]{2,3}$'
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
    ];
}
