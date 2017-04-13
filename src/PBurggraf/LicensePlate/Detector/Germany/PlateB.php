<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

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
        '/^B [A-Z]{1,2} [1-9]\d{0,3}[EH]?$/',
        '/^B \d{1,6}$/',
        '/^B \d{1,4} \d{1,4}[A-Z]?$/',
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
