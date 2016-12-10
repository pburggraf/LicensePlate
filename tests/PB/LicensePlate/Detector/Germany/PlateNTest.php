<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;
use PB\LicensePlate\LicensePlateFactory;
use PB\LicensePlate\Test\Detector\Germany\AbstractGermanyPlate;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateNTest extends AbstractGermanyPlate
{
    /**
     * @var array
     */
    protected static $plateTests = [
        [
            'plate' => 'N A 1',
            'description' => [
                'Landkreis Nürnberger Land'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'N A 10',
            'description' => [
                'Landkreis Nürnberger Land'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'N A 100',
            'description' => [
                'Landkreis Nürnberger Land'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'N A 1000',
            'description' => [
                'Stadt Nürnberg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'N AA 1',
            'description' => [
                'Stadt Nürnberg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'N AA 10',
            'description' => [
                'Stadt Nürnberg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'N AA 100',
            'description' => [
                'Stadt Nürnberg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'N AA 1000',
            'description' => [
                'Stadt Nürnberg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'N PP 1',
            'description' => [
                'Stadt Nürnberg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'N PP 10',
            'description' => [
                'Stadt Nürnberg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'N PP 100',
            'description' => [
                'Polizeipräsidium Mittelfranken'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'N PP 1000',
            'description' => [
                'Stadt Nürnberg'
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