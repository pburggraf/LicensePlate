<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;
use PBurggraf\LicensePlate\Test\Detector\Germany\AbstractGermanyPlate;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateBulTest extends AbstractGermanyPlate
{
    /**
     * @var array
     */
    protected static $plateTests = [
        [
            'plate' => 'BUL A 1',
            'description' => [
                'Landkreis Schwandorf'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BUL A 10',
            'description' => [
                'Landkreis Schwandorf'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BUL A 100',
            'description' => [
                'Landkreis Schwandorf'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BUL A 1000',
            'description' => [
                'Landkreis Schwandorf'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'BUL AA 1',
            'description' => [
                'Landkreis Schwandorf'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BUL AA 10',
            'description' => [
                'Landkreis Schwandorf'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BUL AA 100',
            'description' => [
                'Landkreis Schwandorf'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BUL AA 1000',
            'description' => [
                'Landkreis Schwandorf'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'BUL B 1',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BUL B 10',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BUL B 100',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BUL B 1000',
            'description' => [
                'Landkreis Schwandorf'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'BUL F 1',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BUL F 10',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BUL F 100',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BUL F 1000',
            'description' => [
                'Landkreis Schwandorf'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'BUL G 1',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BUL G 10',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BUL G 100',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BUL G 1000',
            'description' => [
                'Landkreis Schwandorf'
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
