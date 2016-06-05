<?php

namespace PB\LicensePlate;

use PB\LicensePlate\Detector\AbstractDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class LicensePlateFactory
{
    /**
     * @param string $licensePlate
     * @param string $detectorType
     * @return
     */
    public static function fromString($licensePlate, $detectorType)
    {
        /** @var AbstractDetector $detector */
        $detector = new $detectorType($licensePlate);

        return $detector->getResponse();
    }
}