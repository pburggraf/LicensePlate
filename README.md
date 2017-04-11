LicensePlate [![Build Status](https://travis-ci.org/pburggraf/LicensePlate.svg?branch=master)](https://travis-ci.org/pburggraf/LicensePlate) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/pburggraf/LicensePlate/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/pburggraf/LicensePlate/?branch=master)
===

Easily validate license plates and get some information (planned feature).

## How to use

    use PBurggraf\LicensePlate\LicensePlateFactory;
    use PBurggraf\LicensePlate\Detector\GermanyDetector;
    use PBurggraf\LicensePlate\Detector\NetherlandsDetector;

    // Procedural style
    $procedural = LicensePlateFactory::fromString($plate, [
        GermanyDetector::class,
        NetherlandsDetector::class,
    ]);
    
    // Object orientated
    $licensePlate = new LicensePlateFactory($plate);
    $licensePlate->addDetectorType(GermanyDetector::class);
    $licensePlate->addDetectorType(NetherlandsDetector::class);
    $objectOrientated = $licensePlate->getResults();

## Test

This project uses phpunit to test the validation of license plates.