<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;
use PBurggraf\LicensePlate\LicensePlateFactory;
use PBurggraf\LicensePlate\Test\Detector\Germany\AbstractGermanyPlate;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateRodTest extends AbstractGermanyPlate
{
    /**
     * @var array
     */
    protected static $plateTests = [
        [
            'plate' => 'ROD A 1',
            'description' => [
                'Landkreis Cham'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD A 10',
            'description' => [
                'Landkreis Cham'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD A 100',
            'description' => [
                'Landkreis Cham'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD A 1000',
            'description' => [
                'Landkreis Cham'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'ROD B 1',
            'description' => [
                'Landkreis Schwandorf'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD B 10',
            'description' => [
                'Landkreis Schwandorf'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD B 100',
            'description' => [
                'Landkreis Schwandorf'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD B 500',
            'description' => [
                'Landkreis Schwandorf'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD B 900',
            'description' => [
                'Landkreis Cham'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD B 1000',
            'description' => [
                'Landkreis Cham'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'ROD F 1',
            'description' => [
                'Landkreis Schwandorf'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD F 10',
            'description' => [
                'Landkreis Schwandorf'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD F 100',
            'description' => [
                'Landkreis Schwandorf'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD F 700',
            'description' => [
                'Landkreis Schwandorf'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD F 900',
            'description' => [
                'Landkreis Cham'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD F 1000',
            'description' => [
                'Landkreis Cham'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        
        [
            'plate' => 'ROD G 1',
            'description' => [
                'Landkreis Cham'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD G 10',
            'description' => [
                'Landkreis Cham'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD G 50',
            'description' => [
                'Landkreis Schwandorf'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD G 100',
            'description' => [
                'Landkreis Schwandorf'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD G 400',
            'description' => [
                'Landkreis Schwandorf'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD G 500',
            'description' => [
                'Landkreis Cham'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD G 1000',
            'description' => [
                'Landkreis Cham'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'ROD I 1',
            'description' => [
                'Landkreis Cham'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD I 10',
            'description' => [
                'Landkreis Cham'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD I 100',
            'description' => [
                'Landkreis Schwandorf'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD I 1000',
            'description' => [
                'Landkreis Schwandorf'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD I 2000',
            'description' => [
                'Landkreis Cham'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        
        [
            'plate' => 'ROD AA 1',
            'description' => [
                'Landkreis Cham'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD AA 10',
            'description' => [
                'Landkreis Cham'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD AA 100',
            'description' => [
                'Landkreis Cham'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ROD AA 1000',
            'description' => [
                'Landkreis Cham'
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
