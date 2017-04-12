<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;
use PBurggraf\LicensePlate\LicensePlateFactory;
use PBurggraf\LicensePlate\Test\Detector\Germany\AbstractGermanyPlate;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateSanTest extends AbstractGermanyPlate
{
    /**
     * @var array
     */
    protected static $plateTests = [
        [
            'plate' => 'SAN A 1',
            'description' => [
                'Landkreis Kulmbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SAN A 10',
            'description' => [
                'Landkreis Kulmbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SAN A 100',
            'description' => [
                'Landkreis Kulmbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SAN A 1000',
            'description' => [
                'Landkreis Kulmbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'SAN S 1',
            'description' => [
                'Landkreis Kronach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SAN S 10',
            'description' => [
                'Landkreis Kronach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SAN S 100',
            'description' => [
                'Landkreis Kronach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SAN S 1000',
            'description' => [
                'Landkreis Kronach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'SAN W 1',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SAN W 10',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SAN W 100',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SAN W 1000',
            'description' => [
                ''
            ],
            'type' => GermanyDetector::PLATE_TYPE_INVALID,
        ],

        [
            'plate' => 'SAN AA 1',
            'description' => [
                'Landkreis Kronach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SAN AA 10',
            'description' => [
                'Landkreis Kronach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SAN AA 100',
            'description' => [
                'Landkreis Kronach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SAN AA 1000',
            'description' => [
                ''
            ],
            'type' => GermanyDetector::PLATE_TYPE_INVALID,
        ],

        [
            'plate' => 'SAN JA 1',
            'description' => [
                'Landkreis Kulmbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SAN JA 10',
            'description' => [
                'Landkreis Kulmbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SAN JA 100',
            'description' => [
                'Landkreis Kulmbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'SAN JA 1000',
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
