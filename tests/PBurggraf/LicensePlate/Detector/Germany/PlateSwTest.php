<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;
use PBurggraf\LicensePlate\Test\Detector\Germany\AbstractGermanyPlate;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateSwTest extends AbstractGermanyPlate
{
    /**
     * @var array
     */
    protected static $plateTests = [
        [
            'plate' => 'SW A 1',
            'description' => [
                'Stadt Schweinfurt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SW A 10',
            'description' => [
                'Stadt Schweinfurt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SW A 100',
            'description' => [
                'Stadt Schweinfurt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SW A 1000',
            'description' => [
                'Stadt Schweinfurt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'SW AA 1',
            'description' => [
                'Landkreis Schweinfurt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SW AA 10',
            'description' => [
                'Landkreis Schweinfurt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SW AA 100',
            'description' => [
                'Stadt Schweinfurt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SW AA 1000',
            'description' => [
                'Stadt Schweinfurt'
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
