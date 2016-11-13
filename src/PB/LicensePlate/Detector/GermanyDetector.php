<?php

namespace PB\LicensePlate\Detector;

use PB\LicensePlate\Detector\Germany\AbstractGermanyPlate;
use PB\LicensePlate\Response\LicensePlateResponse;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class GermanyDetector extends AbstractDetector
{
    const PLATE_TYPE_DEFAULT = 1;
    const PLATE_TYPE_GOVERNMENT = 2;
    const PLATE_TYPE_DIPLOMATIC_CORPS = 3;
    const PLATE_TYPE_FEDERAL = 4;
    const PLATE_TYPE_LOCAL_POLICE = 5;
    const PLATE_TYPE_MILITARY = 6;

    /**
     * @return LicensePlateResponse
     */
    public function parse()
    {
        // match default plate layout (inclusive historic)
        if (preg_match('/^[A-ZÄÖÜ]{1,3} [A-Z]{1,2} \d{1,4}[H]?$/u', $this->normalizedLicensePlate) === 1) {
            $plateParts = $this->seperatedLicensePlate;

            $plateClassname = __NAMESPACE__ . '\\Germany\\' . 'Plate' . $this->mb_ucfirst(mb_strtolower($plateParts[0]));

            if (class_exists($plateClassname)) {
                /** @var AbstractGermanyPlate $plate */
                $plate = new $plateClassname($plateParts[1] . ' ' . $plateParts[2]);

                $this->response->setValid($plate->isValid());
                $this->response->setType($plate->getType());
                $this->response->addDetail($plate->getDescription());
            }
        }
        /*

            // check if the frist block is a valid german district
            if (array_key_exists($plateParts[0], self::$validDistricts)) {
                $this->response->setValid(true);
                $this->response->setType(self::PLATE_TYPE_DEFAULT);

                $this->response->addDetail($this->getDistrictInformation());

                // it is not possible to have 3 characters in the first block combined with 2 characters and 4 numbers
                if (strlen($plateParts[0]) === 3 && strlen($plateParts[1]) === 2 && strlen($plateParts[2]) > 3) {
                    $this->response->setValid(false);
                    $this->response->setType(self::PLATE_TYPE_UNKNOWN);
                }
            }
        }

        // match gov. plate layout
        if (preg_match('/^\d{1,2} \d{1,2}$/', $this->normalizedLicensePlate) === 1) {
            $this->response->setValid(true);
            $this->response->setType(self::PLATE_TYPE_GOVERNMENT);
        }

        // match plates of the diplomatic corps
        if (preg_match('/^(?:(?:0|B|BN) \d{2,3} \d{1,3}[A-Z]?|[A-Z]{1,3} 9\d{2,4}[A-Z]?)$/', $this->normalizedLicensePlate) === 1) {
            $this->response->setValid(true);
            $this->response->setType(self::PLATE_TYPE_DIPLOMATIC_CORPS);
        }

        // match fed. plate layout
        if (preg_match('/^B[P|D|W] \d{1,2} \d{1,4}$/', $this->normalizedLicensePlate) === 1) {
            $this->response->setValid(true);
            $this->response->setType(self::PLATE_TYPE_FEDERAL);
        }

        // match local police cars
        if (preg_match('/^(?:(?:NRW|BWL|BBL|RPL|SAL) (?:[4-6]{1}? )\d{1,4}|(?:B|LSA|SH) \d{1,5}|(?:HB|HH) \d{1,4}|MVL 3\d{1,4}|(?:WI HP|DD Q|EF LP) \d{1,4})$/', $this->normalizedLicensePlate) === 1) {
            $this->response->setValid(true);
            $this->response->setType(self::PLATE_TYPE_LOCAL_POLICE);
        }

        // match military plate layout
        if (preg_match('/^Y (?:\d{1,4} \d{1,4}|\d{1,6})$/', $this->normalizedLicensePlate) === 1) {
            $this->response->setValid(true);
            $this->response->setType(self::PLATE_TYPE_MILITARY);
        }
        */

        return $this->response;
    }

    /**
     * @return string
     */
    protected function getDistrictInformation()
    {
        $districInformation = static::$validDistricts[$this->seperatedLicensePlate[0]];

        foreach ($districInformation as $districtName => $districtRegex) {
            if (preg_match('/' . $districtRegex . '/', $this->seperatedLicensePlate[1] . ' ' . $this->seperatedLicensePlate[2])) {
                return $districtName;
            }
        }

        return null;
    }
}
