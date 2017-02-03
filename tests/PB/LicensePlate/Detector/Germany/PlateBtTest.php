<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;
use PB\LicensePlate\LicensePlateFactory;
use PB\LicensePlate\Test\Detector\Germany\AbstractGermanyPlate;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateBtTest extends AbstractGermanyPlate
{
    /**
     * @var array
     */
    protected static $plateTests = [
        [
            'plate' => 'BT A 1',
            'description' => [
                'Stadt Bayreuth / Landkreis Bayreuth'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BT A 10',
            'description' => [
                'Stadt Bayreuth / Landkreis Bayreuth'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BT A 100',
            'description' => [
                'Stadt Bayreuth / Landkreis Bayreuth'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BT A 1000',
            'description' => [
                'Stadt Bayreuth / Landkreis Bayreuth'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'BT AA 1',
            'description' => [
                'Stadt Bayreuth / Landkreis Bayreuth'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BT AA 10',
            'description' => [
                'Stadt Bayreuth / Landkreis Bayreuth'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BT AA 100',
            'description' => [
                'Stadt Bayreuth / Landkreis Bayreuth'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BT AA 1000',
            'description' => [
                'Stadt Bayreuth / Landkreis Bayreuth'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'BT P 1',
            'description' => [
                'Stadt Bayreuth / Landkreis Bayreuth'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BT P 10',
            'description' => [
                'Stadt Bayreuth / Landkreis Bayreuth'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BT P 100',
            'description' => [
                'Stadt Bayreuth / Landkreis Bayreuth'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BT P 1000',
            'description' => [
                'Stadt Bayreuth / Landkreis Bayreuth'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BT P 8000',
            'description' => [
                'Polizeipräsidium Oberfranken'
            ],
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ],
        [
            'plate' => 'BT P 9000',
            'description' => [
                'Polizeipräsidium Oberfranken'
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