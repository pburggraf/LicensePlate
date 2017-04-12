<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;
use PBurggraf\LicensePlate\LicensePlateFactory;
use PBurggraf\LicensePlate\Test\Detector\Germany\AbstractGermanyPlate;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateParTest extends AbstractGermanyPlate
{
    /**
     * @var array
     */
    protected static $plateTests = [
        [
            'plate' => 'PAR A 1',
            'description' => [
                'Landkreis Neumarkt in der Oberpfalz'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PAR A 10',
            'description' => [
                'Landkreis Neumarkt in der Oberpfalz'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PAR A 100',
            'description' => [
                'Landkreis Neumarkt in der Oberpfalz'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PAR A 1000',
            'description' => [
                'Landkreis Neumarkt in der Oberpfalz'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PAR AA 1',
            'description' => [
                'Landkreis Neumarkt in der Oberpfalz'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PAR AA 10',
            'description' => [
                'Landkreis Neumarkt in der Oberpfalz'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PAR AA 100',
            'description' => [
                'Landkreis Neumarkt in der Oberpfalz'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PAR AA 1000',
            'description' => [
                'Landkreis Neumarkt in der Oberpfalz'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'PAR Q 1',
            'description' => [
                'Landkreis Kelheim'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PAR Q 10',
            'description' => [
                'Landkreis Kelheim'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PAR Q 100',
            'description' => [
                'Landkreis Kelheim'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PAR Q 1000',
            'description' => [
                'Landkreis Neumarkt in der Oberpfalz'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PAR Y 1',
            'description' => [
                'Landkreis Kelheim'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PAR Y 10',
            'description' => [
                'Landkreis Kelheim'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PAR Y 100',
            'description' => [
                'Landkreis Kelheim'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PAR Y 1000',
            'description' => [
                'Landkreis Neumarkt in der Oberpfalz'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PAR BB 1',
            'description' => [
                'Landkreis Kelheim'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PAR BB 10',
            'description' => [
                'Landkreis Kelheim'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PAR BB 100',
            'description' => [
                'Landkreis Kelheim'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PAR BB 1000',
            'description' => [
                'Landkreis Neumarkt in der Oberpfalz'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PAR CC 1',
            'description' => [
                'Landkreis Kelheim'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PAR CC 10',
            'description' => [
                'Landkreis Kelheim'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PAR CC 100',
            'description' => [
                'Landkreis Kelheim'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PAR CC 1000',
            'description' => [
                'Landkreis Neumarkt in der Oberpfalz'
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
