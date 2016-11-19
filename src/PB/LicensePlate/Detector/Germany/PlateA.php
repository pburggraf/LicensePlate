<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

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
        '/^A (?:[A-Z]{2} [0-9]{1,2}$|[A-O]{2} [0-9]{3}$|[Q-Z]{2} [0-9]{3}$|[A-Z]{2} [1-4][0-9]{3})$/',
        '/^A (?:[A-Z] [1-9][0-9]{0,3}$|[A-Z]{2} [5-9][0-9]{3})$/',
        '/^A PS [1-9][0-9]{2}$/',
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