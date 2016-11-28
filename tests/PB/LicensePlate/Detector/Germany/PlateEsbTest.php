<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;
use PB\LicensePlate\LicensePlateFactory;
use PB\LicensePlate\Test\Detector\Germany\AbstractGermanyPlate;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateEsbTest extends AbstractGermanyPlate
{
    /**
     * @var array
     */
    protected static $plateTests = [
        [
            'plate' => 'ESB A 1',
            'description' => [
                'Landkreis Neustadt an der Waldnaab'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB A 10',
            'description' => [
                'Landkreis Neustadt an der Waldnaab'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB A 100',
            'description' => [
                'Landkreis Neustadt an der Waldnaab'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB A 1000',
            'description' => [
                'Landkreis Neustadt an der Waldnaab'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'ESB AA 1',
            'description' => [
                'Landkreis Neustadt an der Waldnaab'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB AA 10',
            'description' => [
                'Landkreis Neustadt an der Waldnaab'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB AA 100',
            'description' => [
                'Landkreis Neustadt an der Waldnaab'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB AA 1000',
            'description' => [
                'Landkreis Neustadt an der Waldnaab'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'ESB N 1',
            'description' => [
                'Landkreis Nürnberger Land'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB N 10',
            'description' => [
                'Landkreis Nürnberger Land'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        [
            'plate' => 'ESB N 100',
            'description' => [
                'Landkreis Nürnberger Land'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB N 1000',
            'description' => [
                'Landkreis Neustadt an der Waldnaab'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        ],
        [
            'plate' => 'ESB AT 1',
            'description' => [
                'Landkreis Bayreuth'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB AT 10',
            'description' => [
                'Landkreis Bayreuth'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB AT 100',
            'description' => [
                'Landkreis Neustadt an der Waldnaab'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB AT 1000',
            'description' => [
                'Landkreis Neustadt an der Waldnaab'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'ESB ZT 1',
            'description' => [
                'Landkreis Bayreuth'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB ZT 10',
            'description' => [
                'Landkreis Bayreuth'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB ZT 100',
            'description' => [
                'Landkreis Neustadt an der Waldnaab'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB ZT 1000',
            'description' => [
                'Landkreis Neustadt an der Waldnaab'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'ESB B 1',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB B 10',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB B 100',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB B 1000',
            'description' => [
                'Landkreis Neustadt an der Waldnaab'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'ESB F 1',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB F 10',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB F 100',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB F 1000',
            'description' => [
                'Landkreis Neustadt an der Waldnaab'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'ESB G 1',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB G 10',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB G 100',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB G 1000',
            'description' => [
                'Landkreis Neustadt an der Waldnaab'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'ESB I 1',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB I 10',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB I 100',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB I 1000',
            'description' => [
                'Landkreis Neustadt an der Waldnaab'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'ESB O 1',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB O 10',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB O 100',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB O 1000',
            'description' => [
                'Landkreis Neustadt an der Waldnaab'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'ESB Q 1',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB Q 10',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB Q 100',
            'description' => [
                'Landkreis Amberg-Sulzbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'ESB Q 1000',
            'description' => [
                'Landkreis Neustadt an der Waldnaab'
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