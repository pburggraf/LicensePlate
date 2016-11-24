<?php

namespace PB\LicensePlate\Test\Detector\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;
use PB\LicensePlate\LicensePlateFactory;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateATest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var array
     */
    protected static $plateTests = [
        [
            'plate' => 'A AA 1',
            'description' => [
                'Stadt Augsburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'A AA 4999',
            'description' => [
                'Stadt Augsburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'A PS 1',
            'description' => [
                'Stadt Augsburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'A PS 99',
            'description' => [
                'Stadt Augsburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'A PS 1000',
            'description' => [
                'Stadt Augsburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'A PS 4999',
            'description' => [
                'Stadt Augsburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'A AA 5000',
            'description' => [
                'Landkreis Augsburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'A AA 9999',
            'description' => [
                'Landkreis Augsburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'A PS 5000',
            'description' => [
                'Landkreis Augsburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'A PS 9999',
            'description' => [
                'Landkreis Augsburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'A A 1',
            'description' => [
                'Landkreis Augsburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'A A 9999',
            'description' => [
                'Landkreis Augsburg'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'A PS 100',
            'description' => [
                'Polizeipräsidium Schwaben Nord'
            ],
            'type' => GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        ],
        [
            'plate' => 'A PS 999',
            'description' => [
                'Polizeipräsidium Schwaben Nord'
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
        $descriptionResults = LicensePlateFactory::fromString($plate, [GermanyDetector::class]);

        foreach ($descriptionResults as $descriptionResult) {
            $result = $descriptionResult->getDetails();
            $this->assertEquals($description, $result);
        }
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
        $typeResults = LicensePlateFactory::fromString($plate, [GermanyDetector::class]);

        foreach ($typeResults as $typeResult) {
            $result = $typeResult->getType();
            $this->assertEquals($type, $result, sprintf('Tested plate: \'%s\', should be %s', $plate, $type));
        }
    }

    /**
     * @return array
     */
    public function getDataProvider()
    {
        return self::$plateTests;
    }
}