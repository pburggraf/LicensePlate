<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

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
        '/^BT (?:[A-Z]{2} [1-9][0-9]{0,3}|[A-O] [1-9][0-9]{0,3}|[Q-Z] [1-9][0-9]{0,3}|P [1-9][0-9]{0,2}|P [1-7][0-9]{3})$/',
        '/^BT P [8-9][0-9]{3}$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
    ];
}
