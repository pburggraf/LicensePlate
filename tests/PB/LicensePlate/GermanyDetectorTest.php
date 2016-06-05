<?php

namespace PB\LicensePlate\Test\Detector;

use PB\LicensePlate\Detector\GermanyDetector;
use PB\LicensePlate\LicensePlateFactory;

require_once __DIR__ . '/../../../vendor/autoload.php';

class GermanyDetectorTest extends \PHPUnit_Framework_TestCase
{
    protected $plateTests = array(
        'A A 1' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),
        'A A 12' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),
        'A A 123' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),
        'A A 1234' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),
        'A AB 1' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),
        'A AB 12' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),
        'A AB 123' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),
        'A AB 1234' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),

        'AA A 1' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),
        'AA A 12' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),
        'AA A 123' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),
        'AA A 1234' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),
        'AA AB 1' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),
        'AA AB 12' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),
        'AA AB 123' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),
        'AA AB 1234' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),

        'ABG A 1' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),
        'ABG A 12' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),
        'ABG A 123' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),
        'ABG A 1234' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),
        'ABG AB 1' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),
        'ABG AB 12' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),
        'ABG AB 123' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),

        'AÖ A 123' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),

        '0-1' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_GOVERNMENT,
        ),
        '1-1' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_GOVERNMENT,
        ),

        'BD 16-123' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_FEDERAL,
        ),
        'BW 6-123' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_FEDERAL,
        ),

        'AA AB 123H' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ),

        // police cars
        'NRW 4 1234' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ),
        'B 12345' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ),
        'LSA 12345' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ),
        'SH 12345' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ),
        'MVL 34567' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ),
        'HB 1234' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ),
        'HH 1234' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ),
        'WI HP 1234' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ),
        'DD Q 1234' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ),
        'EF LP 1234' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ),

        // diplomatic corps
        '0 17 1' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DIPLOMATIC_CORPS,
        ),
        '0 17 37A' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DIPLOMATIC_CORPS,
        ),
        'B 17 323' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DIPLOMATIC_CORPS,
        ),
        'BN 17 323' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DIPLOMATIC_CORPS,
        ),
        'BN 17 323C' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DIPLOMATIC_CORPS,
        ),
        'N 912' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DIPLOMATIC_CORPS,
        ),
        'F 91234' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DIPLOMATIC_CORPS,
        ),

        'Y 123123' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_MILITARY,
        ),
        'Y 123 123' => array(
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_MILITARY,
        ),

        // there is no combination starting with 'ABC'
        'ABC AB 123' => array(
            'valid' => false,
            'type' => GermanyDetector::PLATE_TYPE_UNKNOWN,
        ),

        // 3 chars in combination with 2 chars and 4 numbers is not valid
        'ABG AB 1234' => array(
            'valid' => false,
            'type' => GermanyDetector::PLATE_TYPE_UNKNOWN,
        ),
    );

    public function testValidate()
    {
        foreach ($this->plateTests as $plate => $result) {
            $validationResult = LicensePlateFactory::fromString($plate, GermanyDetector::class)->isValid();
            $this->assertEquals($result['valid'], $validationResult);
        }
    }

    public function testType()
    {
        foreach ($this->plateTests as $plate => $result) {
            $typeResult = LicensePlateFactory::fromString($plate, GermanyDetector::class)->getType();
            $this->assertEquals($result['type'], $typeResult);
        }
    }
}