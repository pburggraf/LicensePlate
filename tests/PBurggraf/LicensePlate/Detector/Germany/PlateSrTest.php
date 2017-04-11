<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;
use PBurggraf\LicensePlate\LicensePlateFactory;
use PBurggraf\LicensePlate\Test\Detector\Germany\AbstractGermanyPlate;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateSrTest extends AbstractGermanyPlate
{
    /**
     * @var array
     */
    protected static $plateTests = [
        [
            'plate' => 'SR A 1',
            'description' => [
                'Stadt Straubing'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SR A 10',
            'description' => [
                'Stadt Straubing'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SR A 100',
            'description' => [
                'Stadt Straubing'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SR A 1000',
            'description' => [
                'Stadt Straubing'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'SR P 1',
            'description' => [
                'Stadt Straubing'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SR P 10',
            'description' => [
                'Stadt Straubing'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SR P 100',
            'description' => [
                'Stadt Straubing'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SR P 1000',
            'description' => [
                'Polizeipräsidium Niederbayern'
            ],
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ],

        [
            'plate' => 'SR AA 1',
            'description' => [
                'Landkreis Straubing-Bogen'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SR AA 10',
            'description' => [
                'Landkreis Straubing-Bogen'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SR AA 100',
            'description' => [
                'Landkreis Straubing-Bogen'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SR AA 1000',
            'description' => [
                ''
            ],
            'type' => GermanyDetector::PLATE_TYPE_INVALID,
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