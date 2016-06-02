PBLicensePlate [![Build Status](https://travis-ci.org/pburggraf/LicensePlate.svg?branch=master)](https://travis-ci.org/pburggraf/PBLicensePlate)
===

Easily validate license plates and get some information (planned feature).

## How to use

    use PB\LicensePlate\LicensePlateFactory;

    $validationResult = LicensePlateFactory::fromString('B AB 123');

    // $validationResult -> true

## Test

This project uses phpunit to test the validation of license plates.