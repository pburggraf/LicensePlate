<?php

namespace PBurggraf\LicensePlate\Detector;

use PBurggraf\LicensePlate\Response\LicensePlateResponse;

interface DetectorInterface
{
    /**
     * @return LicensePlateResponse
     */
    public function parse();
}
