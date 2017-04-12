<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;
use PBurggraf\LicensePlate\LicensePlateFactory;
use PBurggraf\LicensePlate\Test\Detector\Germany\AbstractGermanyPlate;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateBhTest extends AbstractGermanyPlate
{
    /**
     * @var array
     */
    protected static $plateTests = [
        [
            'plate' => 'BH F 1',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH F 10',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH F 100',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH F 1000',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH F 6000',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH F 7000',
            'description' => [
                'Ortenaukreis'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH F 8000',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'BH N 1',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH N 10',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH N 100',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH N 1000',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH N 7000',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH N 8000',
            'description' => [
                'Ortenaukreis'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH N 9000',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'BH O 1',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH O 10',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH O 100',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH O 1000',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH O 2000',
            'description' => [
                'Ortenaukreis'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH O 3000',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'BH OF 1',
            'description' => [
                'Ortenaukreis'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH OF 10',
            'description' => [
                'Ortenaukreis'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH OF 100',
            'description' => [
                'Ortenaukreis'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH OF 1000',
            'description' => [
                'Ortenaukreis'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH OF 7000',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'BH OG 1',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH OG 10',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH OG 100',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH OG 100',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH OG 1000',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH OG 9000',
            'description' => [
                'Ortenaukreis'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'BH OK 1',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH OK 10',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH OK 100',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH OK 1000',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH OK 3000',
            'description' => [
                'Ortenaukreis'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH OK 4000',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'BH OP 1',
            'description' => [
                'Ortenaukreis'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH OP 10',
            'description' => [
                'Ortenaukreis'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH OP 100',
            'description' => [
                'Ortenaukreis'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH OP 1000',
            'description' => [
                'Ortenaukreis'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH OP 4999',
            'description' => [
                'Ortenaukreis'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH OP 5000',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'BH AA 1',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH AA 10',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH AA 100',
            'description' => [
                'Landkreis Rastatt'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'BH AA 1000',
            'description' => [
                'Landkreis Rastatt'
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
