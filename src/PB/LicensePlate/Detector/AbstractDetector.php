<?php

namespace PB\LicensePlate\Detector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
abstract class AbstractDetector implements DetectorInterface
{
    /**
     * @param string $licensePlate
     *
     * @return string
     */
    public function normalize($licensePlate)
    {
        // remove dashes
        $result = str_replace(array(
            '-',
        ), ' ', $licensePlate);

        // uppercase only
        $result = strtoupper($result);

        return $result;
    }

    /**
     * @param string $licensePlate
     *
     * @return array
     */
    public function seperate($licensePlate)
    {
        // split plate
        $result = explode(' ', $licensePlate);

        return $result;
    }
}