<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateEsb extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landkreis Neustadt an der Waldnaab',
        'Landkreis Amberg-Sulzbach',
        'Landkreis Bayreuth',
        'Landkreis Nürnberger Land',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^ESB (?:[BFGIOQ] [1-9]\d{3}|[A-Z][A-SU-Z] [1-9]\d{0,3}|[A-Z]T [1-9]\d{2,3}|[AC-EHJ-MPR-Z] [1-9]\d{0,3}|N [1-9]\d{3})$/',
        '/^ESB [BFGIOQ] [1-9]\d{0,2}$/',
        '/^ESB [A-Z]T [1-9]\d?$/',
        '/^ESB N [1-9]\d{0,2}$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
