<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;
use PB\LicensePlate\LicensePlateFactory;
use PB\LicensePlate\Test\Detector\Germany\AbstractGermanyPlate;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateRehTest extends AbstractGermanyPlate
{
    /**
     * @var array
     */
    protected static $plateTests = [
        [
            'plate' => 'REH A 1',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH A 10',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH A 100',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH A 1000',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'REH E 1',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH E 10',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH E 100',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH E 1000',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'REH F 1',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH F 10',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH F 100',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH F 1000',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],


        [
            'plate' => 'REH H 1',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH H 10',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH H 100',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH H 1000',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],


        [
            'plate' => 'REH J 1',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH J 10',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH J 100',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH J 1000',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],


        [
            'plate' => 'REH M 1',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH M 10',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH M 100',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH M 1000',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],


        [
            'plate' => 'REH N 1',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH N 10',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH N 100',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH N 1000',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],


        [
            'plate' => 'REH P 1',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH P 10',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH P 100',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH P 1000',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],


        [
            'plate' => 'REH R 1',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH R 10',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH R 100',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH R 1000',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],


        [
            'plate' => 'REH S 1',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH S 10',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH S 100',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH S 1000',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],


        [
            'plate' => 'REH V 1',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH V 10',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH V 100',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH V 1000',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],


        [
            'plate' => 'REH X 1',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH X 10',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH X 100',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH X 1000',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'REH AA 1',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH AA 10',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH AA 100',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH AA 1000',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'REH FF 1',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH FF 10',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH FF 100',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH FF 1000',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'REH GG 1',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH GG 10',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH GG 100',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH GG 1000',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'REH OO 1',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH OO 10',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH OO 100',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH OO 1000',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'REH ZZ 1',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH ZZ 10',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH ZZ 100',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH ZZ 1000',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'REH AU 1',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH AU 10',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH AU 100',
            'description' => [
                'Landkreis Hof'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH AU 900',
            'description' => [
                'Landkreis Wunsiedel im Fichtelgebirge'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'REH AU 1000',
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