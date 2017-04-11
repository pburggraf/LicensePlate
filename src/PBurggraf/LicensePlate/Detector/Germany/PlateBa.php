<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateBa extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Bamberg / Landkreis Bamberg',
        'Bayerisches Bereitschaftspolizeipräsidium',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^BA (?:P [1-9][0-9]{0,2}|[A-O] [1-9][0-9]{0,3}|[Q-Z] [1-9][0-9]{0,3}|[A-Z]{2} [1-9][0-9]{0,3})$/',
        '/^BA P [1-9][0-9]{2,4}$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
    ];
}
