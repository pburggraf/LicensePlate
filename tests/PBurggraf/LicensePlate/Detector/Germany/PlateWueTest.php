<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;
use PBurggraf\LicensePlate\Test\Detector\Germany\AbstractGermanyPlate;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateWueTest extends AbstractGermanyPlate
{
    /**
     * @var array
     */
    protected static $plateTests = [
        [
            'plate' => 'WÜ A 1',
            'description' => [
                'Landkreis Würzburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'WÜ A 10',
            'description' => [
                'Landkreis Würzburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'WÜ A 100',
            'description' => [
                'Landkreis Würzburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'WÜ A 1000',
            'description' => [
                'Landkreis Würzburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'WÜ AA 1',
            'description' => [
                'Landkreis Würzburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'WÜ AA 10',
            'description' => [
                'Landkreis Würzburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'WÜ AA 100',
            'description' => [
                'Stadt Würzburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'WÜ AA 1000',
            'description' => [
                'Stadt Würzburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'WÜ OA 1',
            'description' => [
                'Landkreis Würzburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'WÜ OA 10',
            'description' => [
                'Landkreis Würzburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'WÜ OA 100',
            'description' => [
                'Stadt Würzburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'WÜ OA 1000',
            'description' => [
                'Landkreis Würzburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'WÜ PP 1',
            'description' => [
                'Landkreis Würzburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'WÜ PP 10',
            'description' => [
                'Landkreis Würzburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'WÜ PP 100',
            'description' => [
                'Landkreis Würzburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'WÜ PP 1000',
            'description' => [
                'Polizeipräsidium Unterfranken'
            ],
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
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
