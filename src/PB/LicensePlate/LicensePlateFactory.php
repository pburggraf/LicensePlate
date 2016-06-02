<?php

namespace PB\LicensePlate;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class LicensePlateFactory
{
    /**
     * @param string $licensePlate
     *
     * @return bool
     */
    public static function fromString($licensePlate)
    {
        $detector = new Detector\GermanyDetector();

        $result = $detector->validate($licensePlate);

        return $result;
    }
}