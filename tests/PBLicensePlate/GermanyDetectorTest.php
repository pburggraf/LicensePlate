<?php

namespace PB\LicensePlate\Test\Detector;

use PB\LicensePlate\Detector\AbstractDetector;
use PB\LicensePlate\Detector\GermanyDetector;

require_once __DIR__ . '/../vendor/autoload.php';

class GermanyDetectorTest extends \PHPUnit_Framework_TestCase
{
    protected $validationTests = array(
        'A A 1' => true,
        'A A 12' => true,
        'A A 123' => true,
        'A A 1234' => true,
        'A AB 1' => true,
        'A AB 12' => true,
        'A AB 123' => true,
        'A AB 1234' => true,

        'AA A 1' => true,
        'AA A 12' => true,
        'AA A 123' => true,
        'AA A 1234' => true,
        'AA AB 1' => true,
        'AA AB 12' => true,
        'AA AB 123' => true,
        'AA AB 1234' => true,

        'ABG A 1' => true,
        'ABG A 12' => true,
        'ABG A 123' => true,
        'ABG A 1234' => true,
        'ABG AB 1' => true,
        'ABG AB 12' => true,
        'ABG AB 123' => true,

        'AÖ A 123' => true,

        '0-1' => true,
        '1-1' => true,
        'BD 16-123' => true,
        'BW 6-123' => true,
        'Y 123123' => true,
        'Y 123 123' => true,

        'AA AB 123H' => true,

        // police cars
        'NRW 4 1234' => true,
        'B 12345' => true,
        'LSA 12345' => true,
        'SH 12345' => true,
        'MVL 34567' => true,
        'HB 1234' => true,
        'HH 1234' => true,
        'WI HP 1234' => true,
        'DD Q 1234' => true,
        'EF LP 1234' => true,

        // diplomatic corps
        '0 17 1' => true,
        '0 17 37A' => true,
        'B 17 323' => true,
        'BN 17 323' => true,
        'BN 17 323C' => true,
        'N 912' => true,
        'F 91234' => true,

        // there is no combination starting with 'ABC'
        'ABC AB 123' => false,

        // 3 chars in combination with 2 chars and 4 numbers is not valid
        'ABG AB 1234' => false,
    );

    /**
     * @var AbstractDetector
     */
    protected $detector;

    protected function setUp()
    {
        $this->detector = new GermanyDetector();
    }

    protected function tearDown()
    {
        $this->calculator = NULL;
    }

    public function testValidate()
    {
        foreach ($this->validationTests as $plate => $result) {
            $validationResult = $this->detector->validate($plate);
            $this->assertEquals($result, $validationResult);
        }
    }
}