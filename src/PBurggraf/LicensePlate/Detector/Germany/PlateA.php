<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateA extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Augsburg',
        'Landkreis Augsburg',
        'Polizeipräsidium Schwaben Nord',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^A (?:[A-Z]{2} \d{1,2}$|[A-O]{2} \d{3}$|[Q-Z]{2} \d{3}$|[A-Z]{2} [1-4]\d{3})$/',
        '/^A (?:[A-Z] [1-9]\d{0,3}$|[A-Z]{2} [5-9]\d{3})$/',
        '/^A PS [1-9]\d{2}$/',
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
