<?php

namespace PB\LicensePlate\Test\Detector;

use PB\LicensePlate\Detector\NetherlandsDetector;

class NetherlandsDetectorTest extends \PHPUnit_Framework_TestCase
{
    protected static $plateTests = array(
        'XX 99 99' => array(
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_1,
        ),
        '99 99 XX' => array(
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_2,
        ),
        '99 XX 99' => array(
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_3,
        ),
        'XX 99 XX' => array(
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_4,
        ),
        'XX XX 99' => array(
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_5,
        ),
        '99 XX XX' => array(
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_6,
        ),
        '99 XXX 9' => array(
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_7,
        ),
        '9 XXX 99' => array(
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_8,
        ),
        'XX 999 X' => array(
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_9,
        ),
        'X 999 XX' => array(
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_10,
        ),
        'XXX 99 X' => array(
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_11,
        ),
        'X 99 XXX' => array(
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_12,
        ),
        '9 XX 999' => array(
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_13,
        ),
        '999 XX 9' => array(
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_14,
        ),
    );

    public function testValidate()
    {
//        foreach (self::$plateTests as $plate => $result) {
//            $validationResult = LicensePlateFactory::fromString($plate, NetherlandsDetector::class)->isValid();
//            self::assertEquals($result['valid'], $validationResult);
//        }
    }

    public function testType()
    {
//        foreach (self::$plateTests as $plate => $result) {
//            $typeResult = LicensePlateFactory::fromString($plate, NetherlandsDetector::class)->getType();
//            self::assertEquals($result['type'], $typeResult);
//        }
    }
}