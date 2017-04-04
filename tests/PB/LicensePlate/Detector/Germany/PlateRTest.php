<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;
use PB\LicensePlate\LicensePlateFactory;
use PB\LicensePlate\Test\Detector\Germany\AbstractGermanyPlate;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateRTest extends AbstractGermanyPlate
{
    /**
     * @var array
     */
    protected static $plateTests = [
        [
            'plate' => 'R A 1',
            'description' => [
                'Landkreis Regensburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'R A 10',
            'description' => [
                'Landkreis Regensburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'R A 100',
            'description' => [
                'Landkreis Regensburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'R A 1000',
            'description' => [
                'Landkreis Regensburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'R AA 1',
            'description' => [
                'Stadt Regensburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'R AA 10',
            'description' => [
                'Stadt Regensburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'R AA 100',
            'description' => [
                'Stadt Regensburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'R AA 1000',
            'description' => [
                'Stadt Regensburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'R PP 1',
            'description' => [
                'Stadt Regensburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'R PP 10',
            'description' => [
                'Stadt Regensburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'R PP 100',
            'description' => [
                'Polizeipräsidium Oberpfalz'
            ],
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ],
        [
            'plate' => 'R PP 1000',
            'description' => [
                'Stadt Regensburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'R PR 1',
            'description' => [
                'Stadt Regensburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'R PR 10',
            'description' => [
                'Stadt Regensburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'R PR 100',
            'description' => [
                'Polizeipräsidium Oberpfalz'
            ],
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ],
        [
            'plate' => 'R PR 1000',
            'description' => [
                'Stadt Regensburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'R ZZ 1',
            'description' => [
                'Stadt Regensburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'R ZZ 10',
            'description' => [
                'Stadt Regensburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'R ZZ 100',
            'description' => [
                'Stadt Regensburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'R ZZ 1000',
            'description' => [
                'Stadt Regensburg'
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