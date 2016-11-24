<?php

namespace PB\LicensePlate\Test\Detector;

use PB\LicensePlate\Detector\GermanyDetector;
use PB\LicensePlate\LicensePlateFactory;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class GermanyDetectorTest extends \PHPUnit_Framework_TestCase
{
    protected static $plateTests = [
        [
            'plate' => 'A A 1',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'A A 12',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'A A 123',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'A A 1234',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'A AB 1',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'A AB 12',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'A AB 123',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'A AB 1234',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'AA A 1',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'AA A 12',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'AA A 123',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'AA A 1234',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'AA AB 1',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'AA AB 12',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'AA AB 123',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'AA AB 1234',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'ABG A 1',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ABG A 12',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ABG A 123',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ABG A 1234',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ABG AB 1',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ABG AB 12',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ABG AB 123',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'AÖ A 123',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => '0-1',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_GOVERNMENT,
        ],
        [
            'plate' => '1-1',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_GOVERNMENT,
        ],

        [
            'plate' => 'BD 16-123',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_FEDERAL,
        ],
        [
            'plate' => 'BW 6-123',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_FEDERAL,
        ],

        [
            'plate' => 'AA AB 123H',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        // police cars
        [
            'plate' => 'NRW 4 1234',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ],
        [
            'plate' => 'B 12345',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ],
        [
            'plate' => 'LSA 12345',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ],
        [
            'plate' => 'SH 12345',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ],
        [
            'plate' => 'MVL 34567',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ],
        [
            'plate' => 'HB 1234',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ],
        [
            'plate' => 'HH 1234',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ],
        [
            'plate' => 'WI HP 1234',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ],
        [
            'plate' => 'DD Q 1234',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ],
        [
            'plate' => 'EF LP 1234',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ],

        // diplomatic corps
        [
            'plate' => '0 17 1',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DIPLOMATIC_CORPS,
        ],
        [
            'plate' => '0 17 37A',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DIPLOMATIC_CORPS,
        ],
        [
            'plate' => 'B 17 323',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DIPLOMATIC_CORPS,
        ],
        [
            'plate' => 'BN 17 323',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DIPLOMATIC_CORPS,
        ],
        [
            'plate' => 'BN 17 323C',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DIPLOMATIC_CORPS,
        ],
        [
            'plate' => 'N 912',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DIPLOMATIC_CORPS,
        ],
        [
            'plate' => 'F 91234',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_DIPLOMATIC_CORPS,
        ],

        [
            'plate' => 'Y 123123',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_MILITARY,
        ],
        [
            'plate' => 'Y 123 123',
            'valid' => true,
            'type' => GermanyDetector::PLATE_TYPE_MILITARY,
        ],

        // there is no combination starting with 'ABC'
        [
            'plate' => 'ABC AB 123',
            'valid' => false,
            'type' => GermanyDetector::PLATE_TYPE_UNKNOWN,
        ],

        // 3 chars in combination with 2 chars and 4 numbers is not valid
        [
            'plate' => 'ABG AB 1234',
            'valid' => false,
            'type' => GermanyDetector::PLATE_TYPE_UNKNOWN,
        ],
    ];

    /**
     * @dataProvider getDataProvider
     */
    public function testValidity($plate, $validity, $type)
    {
        $validationResults = LicensePlateFactory::fromString($plate, [GermanyDetector::class]);

        foreach ($validationResults as $validationResult) {
            $result = $validationResult->isValid();
            $this->assertEquals($validity, $result, sprintf('Tested plate: \'%s\', should be %s', $plate, (bool)$validity));
        }
    }

    /**
     * @dataProvider getDataProvider
     */
    public function testType($plate, $validity, $type)
    {
        $typeResults = LicensePlateFactory::fromString($plate, [GermanyDetector::class]);

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