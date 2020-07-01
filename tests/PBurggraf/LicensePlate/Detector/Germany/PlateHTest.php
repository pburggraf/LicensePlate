<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;
use PBurggraf\LicensePlate\Test\Detector\Germany\AbstractGermanyPlate;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateHTest extends AbstractGermanyPlate
{
    /**
     * @var array
     */
    protected static $plateTests = [
        [
            'plate' => 'H A 1',
            'description' => [
                'Region Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'H A 10',
            'description' => [
                'Region Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'H A 100',
            'description' => [
                'Region Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'H A 1000',
            'description' => [
                'Region Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'H AA 1',
            'description' => [
                'Region Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'H AA 10',
            'description' => [
                'Region Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'H AA 100',
            'description' => [
                'Stadt Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'H AA 1000',
            'description' => [
                'Region Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'H BA 1',
            'description' => [
                'Region Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'H BA 10',
            'description' => [
                'Region Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'H BA 100',
            'description' => [
                'Stadt Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'H BA 1000',
            'description' => [
                'Stadt Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'H CA 1',
            'description' => [
                'Region Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'H CA 10',
            'description' => [
                'Region Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'H CA 100',
            'description' => [
                'Stadt Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'H CA 1000',
            'description' => [
                'Region Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'H FA 1',
            'description' => [
                'Region Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'H FA 10',
            'description' => [
                'Region Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'H FA 100',
            'description' => [
                'Stadt Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'H FA 1000',
            'description' => [
                'Stadt Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'H GA 1',
            'description' => [
                'Region Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'H GA 10',
            'description' => [
                'Region Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'H GA 100',
            'description' => [
                'Stadt Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'H GA 1000',
            'description' => [
                'Stadt Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'H ZD 1',
            'description' => [
                'Region Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'H ZD 10',
            'description' => [
                'Region Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'H ZD 100',
            'description' => [
                'Zentrale Polizeidirektion Niedersachsen'
            ],
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ],
        [
            'plate' => 'H ZD 1000',
            'description' => [
                'Zentrale Polizeidirektion Niedersachsen'
            ],
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ],

        [
            'plate' => 'H PD 1',
            'description' => [
                'Region Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'H PD 10',
            'description' => [
                'Region Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'H PD 100',
            'description' => [
                'Polizeidirektion Hannover'
            ],
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ],
        [
            'plate' => 'H PD 1000',
            'description' => [
                'Polizeidirektion Hannover'
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
