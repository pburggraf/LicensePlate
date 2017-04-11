<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateBn extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Bonn',
        'Länderfahrzeug',
        'Diplomatischer Corps',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^BN [A-Z]{1,2} [1-9][0-9]{0,3}[EH]?$/',
        '/^BN [0-9]{1,6}[A-Z]?$/',
        '/^BN [0-9]{1,4} [0-9]{1,4}[A-Z]?$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        GermanyDetector::PLATE_TYPE_DIPLOMATIC_CORPS,
    ];
}
