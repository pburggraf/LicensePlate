<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateB extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Berlin',
        'Landesfahrzeug',
        'Diplomatischer Corps',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^B [A-Z]{1,2} [1-9][0-9]{0,3}[EH]?$/',
        '/^B [0-9]{1,6}$/',
        '/^B [0-9]{1,4} [0-9]{1,4}[A-Z]?$/',
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
