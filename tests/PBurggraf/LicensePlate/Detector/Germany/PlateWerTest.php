<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;
use PBurggraf\LicensePlate\LicensePlateFactory;
use PBurggraf\LicensePlate\Test\Detector\Germany\AbstractGermanyPlate;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateWerTest extends AbstractGermanyPlate
{
    /**
     * @var array
     */
    protected static $plateTests = [
        [
            'plate' => 'WER A 1',
            'description' => [
                'Landkreis Dillingen an der Donau'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'WER A 10',
            'description' => [
                'Landkreis Dillingen an der Donau'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'WER A 100',
            'description' => [
                'Landkreis Dillingen an der Donau'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'WER A 1000',
            'description' => [
                'Landkreis Dillingen an der Donau'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'WER A 7',
            'description' => [
                'Landkreis Dillingen an der Donau'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'WER A 70',
            'description' => [
                'Landkreis Dillingen an der Donau'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'WER A 700',
            'description' => [
                'Landkreis Dillingen an der Donau'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'WER A 7000',
            'description' => [
                'Landkreis Augsburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'WER AA 1',
            'description' => [
                'Landkreis Dillingen an der Donau'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'WER AA 10',
            'description' => [
                'Landkreis Dillingen an der Donau'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'WER AA 100',
            'description' => [
                'Landkreis Dillingen an der Donau'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'WER AA 1000',
            'description' => [
                'Landkreis Dillingen an der Donau'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'WER YA 1',
            'description' => [
                'Landkreis Augsburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'WER YA 10',
            'description' => [
                'Landkreis Augsburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'WER YA 100',
            'description' => [
                'Landkreis Augsburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'WER YA 1000',
            'description' => [
                'Landkreis Dillingen an der Donau'
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