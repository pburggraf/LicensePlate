<?php

namespace PB\LicensePlate;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class LicensePlateFactory
{
    /**
     * @param $licensePlate
     * @return Response\LicensePlateResponse
     */
    public static function fromString($licensePlate)
    {
        $detector = new Detector\GermanyDetector($licensePlate);

        return $detector->getResponse();
    }
}