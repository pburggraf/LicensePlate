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
     * @var AbstractDetector[]
     */
    protected $detectorTypes = [];

    /**
     * @param string $licensePlate
     */
    public function __construct($licensePlate)
    {
        $this->licensePlate = $licensePlate;
    }

    /**
     * @param $detectorType
     *
     * @throws \RuntimeException
     */
    public function addDetectorType($detectorType)
    {
        if (!class_exists($detectorType)) {
            throw new \RuntimeException('Detector not found');
        }

        $this->detectorTypes[] = $detectorType;
    }

    /**
     * @return LicensePlateResponse[]
     */
    public function getResults()
    {
        $results = [];

        foreach ($this->detectorTypes as $detectorType) {
            /** @var AbstractDetector $detector */
            $detector = new $detectorType($this->licensePlate);

            $response = $detector->getResponse();

            if ($response->isValid()) {
                $results[] = $response;
            }
        }

        return $results;
    }

    /**
     * @param string $licensePlate
     * @param array  $detectorTypes
     *
     * @throws \RuntimeException
     *
     * @return LicensePlateResponse[]
     */
    public static function fromString($licensePlate, $detectorTypes)
    {
        $results = [];

        foreach ($detectorTypes as $detectorType) {
            if (!class_exists($detectorType)) {
                throw new \RuntimeException('Detector not found');
            }

            /** @var AbstractDetector $detector */
            $detector = new $detectorType($licensePlate);

            $response = $detector->getResponse();

            if ($response->isValid()) {
                $results[] = $response;
            }
        }

        return $results;
    }
}
