<?php

namespace PBurggraf\LicensePlate\Detector;

use PBurggraf\LicensePlate\Response\LicensePlateResponse;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class NetherlandsDetector extends AbstractDetector
{
    const PLATE_SIDECODE_1 = 1;
    const PLATE_SIDECODE_2 = 2;
    const PLATE_SIDECODE_3 = 3;
    const PLATE_SIDECODE_4 = 4;
    const PLATE_SIDECODE_5 = 5;
    const PLATE_SIDECODE_6 = 6;
    const PLATE_SIDECODE_7 = 7;
    const PLATE_SIDECODE_8 = 8;
    const PLATE_SIDECODE_9 = 9;
    const PLATE_SIDECODE_10 = 10;
    const PLATE_SIDECODE_11 = 11;
    const PLATE_SIDECODE_12 = 12;
    const PLATE_SIDECODE_13 = 13;
    const PLATE_SIDECODE_14 = 14;

    /**
     * @return LicensePlateResponse
     */
    public function parse()
    {
        $sidecodes = [
            self::PLATE_SIDECODE_1 => '/^[A-Z]{2} \d{2} \d{2}$/',
            self::PLATE_SIDECODE_2 => '/^\d{2} \d{2} [A-Z]{2}$/',
            self::PLATE_SIDECODE_3 => '/^\d{2} [A-Z]{2} \d{2}$/',
            self::PLATE_SIDECODE_4 => '/^[A-Z]{2} \d{2} [A-Z]{2}$/',
            self::PLATE_SIDECODE_5 => '/^[A-Z]{2} [A-Z]{2} \d{2}$/',
            self::PLATE_SIDECODE_6 => '/^\d{2} [A-Z]{2} [A-Z]{2}$/',
            self::PLATE_SIDECODE_7 => '/^\d{2} [A-Z]{3} \d$/',
            self::PLATE_SIDECODE_8 => '/^\d [A-Z]{3} \d{2}$/',
            self::PLATE_SIDECODE_9 => '/^[A-Z]{2} \d{3} [A-Z]$/',
            self::PLATE_SIDECODE_10 => '/^[A-Z] \d{3} [A-Z]{2}$/',
            self::PLATE_SIDECODE_11 => '/^[A-Z]{3} \d{2} [A-Z]$/',
            self::PLATE_SIDECODE_12 => '/^[A-Z] \d{2} [A-Z]{3}$/',
            self::PLATE_SIDECODE_13 => '/^\d [A-Z]{2} \d{3}$/',
            self::PLATE_SIDECODE_14 => '/^\d{3} [A-Z]{2} \d$/',
        ];

        foreach ($sidecodes as $sidecode => $regex) {
            $this->checkSidecode($regex, $sidecode);

            if ($this->response->isValid()) {
                return $this->response;
            }
        }

        return $this->response;
    }

    /**
     * @param $regex
     * @param $resultSidecode
     *
     * @return LicensePlateResponse
     */
    public function checkSidecode($regex, $resultSidecode)
    {
        if (preg_match($regex, $this->normalizedLicensePlate) === 1) {
            $this->response->setValid(true);
            $this->response->setType($resultSidecode);
        }

        return $this->response;
    }
}
