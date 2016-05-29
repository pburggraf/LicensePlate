<?php

namespace PB\LicensePlate\Response;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class LicensePlateResponse
{
    /**
     * @var string
     */
    protected $normalizedLicensePlate;

    /**
     * @var bool
     */
    protected $isValid;

    /**
     * @var string[]
     */
    protected $details;

    /**
     * @param $normalizedLicensePlate
     */
    public function __construct($normalizedLicensePlate)
    {
        $this->normalizedLicensePlate = '';
        $this->isValid = false;
        $this->details = array();
    }

    /**
     * @return string
     */
    public function getNormalizedLicensePlate()
    {
        return $this->normalizedLicensePlate;
    }

    /**
     * @param string $normalizedLicensePlate
     */
    public function setNormalizedLicensePlate($normalizedLicensePlate)
    {
        $this->normalizedLicensePlate = $normalizedLicensePlate;
    }

    /**
     * @return boolean
     */
    public function isValid()
    {
        return $this->isValid;
    }

    /**
     * @param boolean $isValid
     */
    public function setIsValid($isValid)
    {
        $this->isValid = $isValid;
    }

    /**
     * @return string[]
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param string[] $details
     */
    public function setDetails($details)
    {
        $this->details = $details;
    }

    /**
     * @param string $detail
     */
    public function addDetail($detail)
    {
        $this->details[] = $detail;
    }


}