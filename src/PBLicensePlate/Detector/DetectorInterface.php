<?php

namespace PB\LicensePlate\Detector;

use PB\LicensePlate\Response\LicensePlateResponse;

interface DetectorInterface
{
    /**
     * @param string $licensePlate
     * @return LicensePlateResponse
     */
    public function validate($licensePlate);

    /**
     * @param string $licensePlate
     * @return array
     */
    public function details($licensePlate);
}