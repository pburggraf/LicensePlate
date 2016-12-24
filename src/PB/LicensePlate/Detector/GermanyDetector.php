<?php

namespace PB\LicensePlate\Detector;

use PB\LicensePlate\Detector\Germany\AbstractGermanyPlate;
use PB\LicensePlate\Response\LicensePlateResponse;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class GermanyDetector extends AbstractDetector
{
    const PLATE_TYPE_INVALID = 0;
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
        if (preg_match('/^(?:[A-ZÄÖÜ]{1,3} [A-Z]{1,2} \d{1,4}[H]?|\d{1,2} \d{1,2}|(?:BD|BG|BP|BW|THW|Y|X|B|BBL|BWL|BYL|HB|HEL|HH|LSA|LNS|MVL|NL|NRW|RPL|SAL|SH|THL) (?:\d{1,4} \d{1,4}|\d{1,6})|(?:(?:0|B|BN) \d{2,3} \d{1,3}[A-Z]?|[A-Z]{1,3} 9\d{2,4}[A-Z]?))$/u', $this->normalizedLicensePlate) === 1) {
            $plateParts = $this->seperatedLicensePlate;

            /** @var AbstractGermanyPlate $plateClassname */
            $plateClassname = __NAMESPACE__ . '\\Germany\\' . 'Plate' . $this->mb_ucfirst(mb_strtolower($plateParts[0]));

            if (class_exists($plateClassname)) {
                $licensePlate = count($plateParts) > 2 ? $plateParts[0] . ' ' . $plateParts[1] . ' ' . $plateParts[2] : $plateParts[0] . ' ' . $plateParts[1];

                /** @var AbstractGermanyPlate $plate */
                $plate = new $plateClassname($licensePlate);

                $this->response->setValid($plate->isValid());
                $this->response->setType($plate->getType());
                $this->response->addDetail($plate->getDescription());
            }
        }

        return $this->response;
    }
}
