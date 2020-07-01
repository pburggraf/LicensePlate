<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;
use PBurggraf\LicensePlate\Test\Detector\Germany\AbstractGermanyPlate;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateHbTest extends AbstractGermanyPlate
{
    /**
     * @var array
     */
    protected static $plateTests = [
        [
            'plate' => 'HB A 1',
            'description' => [
                'Stadt Bremen, Senat und Bürgerschaft'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'HB A 10',
            'description' => [
                'Stadt Bremen, Senat und Bürgerschaft'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'HB A 100',
            'description' => [
                'Stadt Bremen, Senat und Bürgerschaft'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'HB A 1000',
            'description' => [
                'Stadt Bremerhaven'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'HB AA 1',
            'description' => [
                'Stadt Bremen, Senat und Bürgerschaft'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'HB AA 10',
            'description' => [
                'Stadt Bremen, Senat und Bürgerschaft'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'HB AA 100',
            'description' => [
                'Stadt Bremen, Senat und Bürgerschaft'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'HB AA 1000',
            'description' => [
                'Stadt Bremen, Senat und Bürgerschaft'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
    ];

    /**
     * @dataProvider getDataProvider
     *
     * @param $plate
     * @param $description
     * @param $type
     */
    public function testDescription($plate, $description, $type)
    {
        return parent::testDescription($plate, $description, $type);
    }

    /**
     * @dataProvider getDataProvider
     *
     * @param $plate
     * @param $description
     * @param $type
     */
    public function testType($plate, $description, $type)
    {
        return parent::testType($plate, $description, $type);
    }
}
