<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateSal extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Saarland, Landesregierung, Landtag und Polizei',
    ];

    protected static $type = [
        GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
    ];
}