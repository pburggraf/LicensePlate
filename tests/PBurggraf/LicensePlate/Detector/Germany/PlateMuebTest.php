<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;
use PBurggraf\LicensePlate\Test\Detector\Germany\AbstractGermanyPlate;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateMuebTest extends AbstractGermanyPlate
{
    /**
     * @var array
     */
    protected static $plateTests = [
        [
            'plate' => 'MÜB A 1',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'MÜB A 10',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'MÜB A 100',
            'description' => [
                'Landkreis Bayreuth'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'MÜB A 1000',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'MÜB N 1',
            'description' => [
                'Landkreis Bayreuth'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'MÜB N 10',
            'description' => [
                'Landkreis Bayreuth'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'MÜB N 100',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'MÜB N 1000',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'MÜB AA 1',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'MÜB AA 10',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'MÜB AA 100',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'MÜB AA 1000',
            'description' => [
                'Landkreis Hof'
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
