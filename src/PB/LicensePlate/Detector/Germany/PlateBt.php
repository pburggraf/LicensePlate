<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateBt extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Bayreuth / Landkreis Bayreuth',
        'Polizeipräsidium Oberfranken',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '^[A-Z]{2} [1-9][0-9]{0,3}$|^[A-O] [1-9][0-9]{0,3}$|^[Q-Z] [1-9][0-9]{0,3}$|^P [1-9][0-9]{0,2}$|^P 7[0-9]{3}$',
        '^P [8-9][0-9]{3}$',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
