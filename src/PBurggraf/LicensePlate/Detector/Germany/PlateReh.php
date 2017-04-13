<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateReh extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landkreis Wunsiedel im Fichtelgebirge',
        'Landkreis Hof',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^REH (?:[AEFHJMNPRSVX] [1-9]\d{0,2}|(?:AA|FF|GG|OO|ZZ) [1-9]\d{2}|AU 9\d{2})$/',
        '/^REH (?:[BCDGIKLOQTUWYZ] [1-9]\d{0,2}|(?:AA|FF|GG|OO|ZZ) [1-9](?:\d?|\d{3})|(?:[B-EH-NP-Y][A-Z]|[A-Z][B-EH-NP-Y]) [1-9]\d{0,3}|AU [1-8]\d{2}|[A-Z] [1-9]\d{3})$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
