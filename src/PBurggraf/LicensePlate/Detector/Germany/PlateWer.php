<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateWer extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landkreis Augsburg',
        'Landkreis Dillingen an der Donau',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^WER (?:Y[A-Z] [1-9]\d{0,2}|[A-Z] [7-9]\d{3})$/',
        '/^WER (?:[A-XZ][A-Z] [1-9]\d{0,3}|Y[A-Z] [1-9]\d{3}|[A-Z] (?:[1-6]\d{3}|[1-9]\d{0,2}))$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
