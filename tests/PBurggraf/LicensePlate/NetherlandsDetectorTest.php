<?php

namespace PBurggraf\LicensePlate\Test\Detector;

use PBurggraf\LicensePlate\Detector\NetherlandsDetector;
use PBurggraf\LicensePlate\LicensePlateFactory;

class NetherlandsDetectorTest extends \PHPUnit_Framework_TestCase
{
    protected static $plateTests = [
        [
            'plate' => 'XX 99 99',
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_1,
        ],
        [
            'plate' => '99 99 XX',
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_2,
        ],
        [
            'plate' => '99 XX 99',
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_3,
        ],
        [
            'plate' => 'XX 99 XX',
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_4,
        ],
        [
            'plate' => 'XX XX 99',
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_5,
        ],
        [
            'plate' => '99 XX XX',
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_6,
        ],
        [
            'plate' => '99 XXX 9',
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_7,
        ],
        [
            'plate' => '9 XXX 99',
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_8,
        ],
        [
            'plate' => 'XX 999 X',
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_9,
        ],
        [
            'plate' => 'X 999 XX',
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_10,
        ],
        [
            'plate' => 'XXX 99 X',
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_11,
        ],
        [
            'plate' => 'X 99 XXX',
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_12,
        ],
        [
            'plate' => '9 XX 999',
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_13,
        ],
        [
            'plate' => '999 XX 9',
            'valid' => true,
            'type' => NetherlandsDetector::PLATE_SIDECODE_14,
        ],
    ];

    /**
     * @param $plate
     * @param $validity
     * @param $type
     *
     * @dataProvider getDataProvider
     */
    public function testValidity($plate, $validity, $type)
    {
        $validationResults = LicensePlateFactory::fromString($plate, [NetherlandsDetector::class]);

        foreach ($validationResults as $validationResult) {
            $result = $validationResult->isValid();
            $this->assertEquals($validity, $result, sprintf('Tested plate: \'%s\', should be %s', $plate, (bool)$validity));
        }
    }

    /**
     * @param $plate
     * @param $validity
     * @param $type
     *
     * @dataProvider getDataProvider
     */
    public function testType($plate, $validity, $type)
    {
        $typeResults = LicensePlateFactory::fromString($plate, [NetherlandsDetector::class]);

        foreach ($typeResults as $typeResult) {
            $result = $typeResult->getType();
            $this->assertEquals($type, $result, sprintf('Tested plate: \'%s\', should be %s', $plate, $type));
        }
    }

    /**
     * @return array
     */
    public function getDataProvider()
    {
        return self::$plateTests;
    }
}
