<?php

namespace PB\LicensePlate;

use PB\LicensePlate\Detector\DetectorInterface;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class LicensePlateFactory
{
    /**
     * @param string $licensePlate
     * @param DetectorInterface $detector
     *
     * @return array
     */
    public static function fromString($licensePlate, DetectorInterface $detector)
    {
        $result = $detector->validate($licensePlate);

        return $result;
    }
}