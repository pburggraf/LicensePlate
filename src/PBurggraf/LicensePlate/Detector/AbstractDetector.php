<?php

namespace PBurggraf\LicensePlate\Detector;

use PBurggraf\LicensePlate\Response\LicensePlateResponse;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
abstract class AbstractDetector implements DetectorInterface
{
    const PLATE_TYPE_UNKNOWN = GermanyDetector::PLATE_TYPE_INVALID;

    /**
     * @var string
     */
    protected $licensePlate;

    /**
     * @var string
     */
    protected $normalizedLicensePlate;

    /**
     * @var string[]
     */
    protected $seperatedLicensePlate;

    /**
     * @var LicensePlateResponse
     */
    protected $response;

    /**
     * AbstractDetector constructor.
     *
     * @param $licensePlate
     */
    public function __construct($licensePlate)
    {
        $this->licensePlate = $licensePlate;
        $this->normalizedLicensePlate = $this->normalize($licensePlate);
        $this->seperatedLicensePlate = $this->seperate($this->normalizedLicensePlate);

        $this->response = new LicensePlateResponse($this->licensePlate);
        $this->response->setCountry(strrev(strstr(strrev(str_replace('Detector', '', get_called_class())), '\\', true)));

        $this->parse();
    }

    /**
     * @return LicensePlateResponse
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param string $licensePlate
     *
     * @return string
     */
    public function normalize($licensePlate)
    {
        // remove dashes
        $result = str_replace([
            '-',
        ], ' ', $licensePlate);

        // uppercase only
        $result = mb_strtoupper($result);

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
        return explode(' ', $licensePlate);
    }

    /**
     * @param string $string
     * @param string $encoding
     *
     * @return string
     */
    protected function mb_ucfirst($string, $encoding = null)
    {
        if (null === $encoding) {
            $encoding = mb_internal_encoding();
        }

        $strlen = mb_strlen($string, $encoding);
        $firstChar = $string[0];
        $then = mb_substr($string, 1, $strlen - 1, $encoding);

        return mb_strtoupper($firstChar, $encoding) . $then;
    }

    /**
     * @return LicensePlateResponse
     */
    abstract public function parse();
}
