<?php

namespace PBurggraf\LicensePlate\Test\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;
use PBurggraf\LicensePlate\LicensePlateFactory;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
abstract class AbstractGermanyPlate extends \PHPUnit_Framework_TestCase
{
    /**
     * @var array
     */
    protected static $plateTests = [];

    /**
     * @param $plate
     * @param $description
     * @param $type
     */
    public function testDescription($plate, $description, $type)
    {
        $descriptionResults = LicensePlateFactory::fromString($plate, [GermanyDetector::class]);

        $this->assertCount(1, $descriptionResults);

        foreach ($descriptionResults as $descriptionResult) {
            $result = $descriptionResult->getDetails();
            $this->assertEquals($description, $result);
        }
    }

    /**
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
        return static::$plateTests;
    }
}