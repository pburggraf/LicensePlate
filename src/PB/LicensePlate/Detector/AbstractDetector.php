<?php

namespace PB\LicensePlate\Detector;
use PB\LicensePlate\Response\LicensePlateResponse;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
abstract class AbstractDetector implements DetectorInterface
{
    const PLATE_TYPE_UNKNOWN = 0;

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

    /**
     * @return LicensePlateResponse
     */
    abstract public function parse();
}