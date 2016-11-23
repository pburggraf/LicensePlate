<?php

namespace PB\LicensePlate\Detector;

use PB\LicensePlate\Response\LicensePlateResponse;

interface DetectorInterface
{
    /**
     * @return LicensePlateResponse
     */
    public function parse();
}
