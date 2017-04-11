<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;
use PBurggraf\LicensePlate\LicensePlateFactory;
use PBurggraf\LicensePlate\Test\Detector\Germany\AbstractGermanyPlate;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlatePegTest extends AbstractGermanyPlate
{
    /**
     * @var array
     */
    protected static $plateTests = [
        [
            'plate' => 'PEG A 1',
            'description' => [
                'Landkreis Nürnberger Land'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PEG A 10',
            'description' => [
                'Landkreis Nürnberger Land'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PEG A 100',
            'description' => [
                'Landkreis Nürnberger Land'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PEG A 1000',
            'description' => [
                'Landkreis Forchheim'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PEG B 1',
            'description' => [
                'Landkreis Bayreuth'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PEG B 10',
            'description' => [
                'Landkreis Bayreuth'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PEG B 100',
            'description' => [
                'Landkreis Bayreuth'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PEG B 1000',
            'description' => [
                'Landkreis Forchheim'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'PEG AA 1',
            'description' => [
                ''
            ],
            'type' => GermanyDetector::PLATE_TYPE_UNKNOWN,
        ],
        [
            'plate' => 'PEG AA 10',
            'description' => [
                ''
            ],
            'type' => GermanyDetector::PLATE_TYPE_UNKNOWN,
        ],
        [
            'plate' => 'PEG AA 100',
            'description' => [
                ''
            ],
            'type' => GermanyDetector::PLATE_TYPE_UNKNOWN,
        ],
        [
            'plate' => 'PEG AA 1000',
            'description' => [
                ''
            ],
            'type' => GermanyDetector::PLATE_TYPE_UNKNOWN,
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