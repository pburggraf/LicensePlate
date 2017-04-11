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
        if (preg_match('/^[A-Z]{2} \d{2} \d{2}$/', $this->normalizedLicensePlate) === 1) {
            $this->response->setValid(true);
            $this->response->setType(self::PLATE_SIDECODE_1);
        }

        if (preg_match('/^\d{2} \d{2} [A-Z]{2}$/', $this->normalizedLicensePlate) === 1) {
            $this->response->setValid(true);
            $this->response->setType(self::PLATE_SIDECODE_2);
        }

        if (preg_match('/^\d{2} [A-Z]{2} \d{2}$/', $this->normalizedLicensePlate) === 1) {
            $this->response->setValid(true);
            $this->response->setType(self::PLATE_SIDECODE_3);
        }

        if (preg_match('/^[A-Z]{2} \d{2} [A-Z]{2}$/', $this->normalizedLicensePlate) === 1) {
            $this->response->setValid(true);
            $this->response->setType(self::PLATE_SIDECODE_4);
        }

        if (preg_match('/^[A-Z]{2} [A-Z]{2} \d{2}$/', $this->normalizedLicensePlate) === 1) {
            $this->response->setValid(true);
            $this->response->setType(self::PLATE_SIDECODE_5);
        }

        if (preg_match('/^\d{2} [A-Z]{2} [A-Z]{2}$/', $this->normalizedLicensePlate) === 1) {
            $this->response->setValid(true);
            $this->response->setType(self::PLATE_SIDECODE_6);
        }

        if (preg_match('/^\d{2} [A-Z]{3} \d$/', $this->normalizedLicensePlate) === 1) {
            $this->response->setValid(true);
            $this->response->setType(self::PLATE_SIDECODE_7);
        }

        if (preg_match('/^\d [A-Z]{3} \d{2}$/', $this->normalizedLicensePlate) === 1) {
            $this->response->setValid(true);
            $this->response->setType(self::PLATE_SIDECODE_8);
        }

        if (preg_match('/^[A-Z]{2} \d{3} [A-Z]$/', $this->normalizedLicensePlate) === 1) {
            $this->response->setValid(true);
            $this->response->setType(self::PLATE_SIDECODE_9);
        }

        if (preg_match('/^[A-Z] \d{3} [A-Z]{2}$/', $this->normalizedLicensePlate) === 1) {
            $this->response->setValid(true);
            $this->response->setType(self::PLATE_SIDECODE_10);
        }

        if (preg_match('/^[A-Z]{3} \d{2} [A-Z]$/', $this->normalizedLicensePlate) === 1) {
            $this->response->setValid(true);
            $this->response->setType(self::PLATE_SIDECODE_11);
        }

        if (preg_match('/^[A-Z] \d{2} [A-Z]{3}$/', $this->normalizedLicensePlate) === 1) {
            $this->response->setValid(true);
            $this->response->setType(self::PLATE_SIDECODE_12);
        }

        if (preg_match('/^\d [A-Z]{2} \d{3}$/', $this->normalizedLicensePlate) === 1) {
            $this->response->setValid(true);
            $this->response->setType(self::PLATE_SIDECODE_13);
        }

        if (preg_match('/^\d{3} [A-Z]{2} \d$/', $this->normalizedLicensePlate) === 1) {
            $this->response->setValid(true);
            $this->response->setType(self::PLATE_SIDECODE_14);
        }

        return $this->response;
    }
}
