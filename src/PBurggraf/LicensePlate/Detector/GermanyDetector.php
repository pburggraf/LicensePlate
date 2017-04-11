<?php

namespace PBurggraf\LicensePlate\Detector;

use PBurggraf\LicensePlate\Detector\Germany\AbstractGermanyPlate;
use PBurggraf\LicensePlate\Response\LicensePlateResponse;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class GermanyDetector extends AbstractDetector
{
    const PLATE_TYPE_INVALID = 'invalid';
    const PLATE_TYPE_DEFAULT = 'default';
    const PLATE_TYPE_GOVERNMENT = 'government';
    const PLATE_TYPE_DIPLOMATIC_CORPS = 'diplomatic-corps';
    const PLATE_TYPE_FEDERAL = 'federal';
    const PLATE_TYPE_LOCAL_POLICE = 'local-police';
    const PLATE_TYPE_MILITARY = 'military';

    /**
     * @return LicensePlateResponse
     */
    public function parse()
    {
        // match default plate layout (inclusive historic)
        if (preg_match('/^(?:[A-ZÄÖÜ]{1,3} (?:[A-Z]{1,2} [1-9][0-9]{0,3}|(?:\d{1,4} \d{1,4}|\d{1,6}))[H]?|\d{1,2} \d{1,2}|(?:(?:0|B|BN) \d{2,3} \d{1,3}[A-Z]?|[A-Z]{1,3} 9\d{1,4}[A-Z]?))$/u', $this->normalizedLicensePlate) === 1) {
            $plateParts = $this->seperatedLicensePlate;

            /** @var AbstractGermanyPlate $plateClassname */
            $plateClassname = __NAMESPACE__ . '\\Germany\\' . 'Plate' . $this->mb_ucfirst(mb_strtolower(str_replace(['ä', 'ö', 'ü', 'Ä', 'Ö', 'Ü'], ['ae', 'oe', 'ue', 'Ae', 'Oe', 'Ue'], $plateParts[0])));

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
