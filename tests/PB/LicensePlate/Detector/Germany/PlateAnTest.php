<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;
use PB\LicensePlate\LicensePlateFactory;
use PB\LicensePlate\Test\Detector\Germany\AbstractGermanyPlate;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateAnTest extends AbstractGermanyPlate
{
    /**
     * @var array
     */
    protected static $plateTests = [
        [
            'plate' => 'AN A 1',
            'description' => [
                'Stadt Ansbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'AN A 10',
            'description' => [
                'Stadt Ansbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'AN A 100',
            'description' => [
                'Stadt Ansbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'AN A 1000',
            'description' => [
                'Stadt Ansbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'AN AA 1',
            'description' => [
                'Stadt Ansbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'AN AA 10',
            'description' => [
                'Stadt Ansbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],

        [
            'plate' => 'AN AA 100',
            'description' => [
                'Landkreis Ansbach'
            ],
            'type' => GermanyDetector::PLATE_TYPE_DEFAULT,
        ],
        [
            'plate' => 'AN AA 1000',
            'description' => [
                'Stadt Ansbach'
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
}