<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;
use PB\LicensePlate\LicensePlateFactory;
use PB\LicensePlate\Test\Detector\Germany\AbstractGermanyPlate;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateLaTest extends AbstractGermanyPlate
{
    /**
     * @var array
     */
    protected static $plateTests = [
        [
            'plate' => 'LA A 1',
            'description' => [
                'Stadt Landshut'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'LA A 10',
            'description' => [
                'Stadt Landshut'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'LA A 100',
            'description' => [
                'Stadt Landshut'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'LA A 1000',
            'description' => [
                'Stadt Landshut'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'LA AA 1',
            'description' => [
                'Stadt Landshut'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'LA AA 10',
            'description' => [
                'Stadt Landshut'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'LA AA 100',
            'description' => [
                'Landkreis Landshut'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'LA AA 1000',
            'description' => [
                'Stadt Landshut'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'LA AA 5000',
            'description' => [
                'Landkreis Landshut'
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
        return parent::testDescription($plate, $description, $type);
    }
}