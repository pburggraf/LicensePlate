<?php

namespace PB\LicensePlate;

use PB\LicensePlate\Detector\AbstractDetector;
use PB\LicensePlate\Response\LicensePlateResponse;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class LicensePlateFactory
{
    /**
     * @var string
     */
    protected $licensePlate;

    /**
     * @param string $licensePlate
     */
    public function __construct($licensePlate)
    {
        $this->licensePlate = $licensePlate;
    }

    /**
     * @param string $licensePlate
     * @param string $detectorType
     *
     * @return LicensePlateResponse
     */
    public static function fromString($licensePlate, $detectorType)
    {
        if (!class_exists($detectorType)) {
            throw new \RuntimeException('Detector not found');
        }

        /** @var AbstractDetector $detector */
        $detector = new $detectorType($licensePlate);

        return $detector->getResponse();
    }
}