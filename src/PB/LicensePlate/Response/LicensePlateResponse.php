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
    protected $licensePlate;

    /**
     * @var bool
     */
    protected $valid;

    /**
     * @var string[]
     */
    protected $details;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var int
     */
    protected $type;

    /**
     * @param $licensePlate
     */
    public function __construct($licensePlate)
    {
        $this->licensePlate = $licensePlate;
        $this->valid = false;
        $this->details = array();
        $this->country = '';
        $this->type = 0;
    }

    /**
     * @return string
     */
    public function getLicensePlate()
    {
        return $this->licensePlate;
    }

    /**
     * @param string $licensePlate
     */
    public function setLicensePlate($licensePlate)
    {
        $this->licensePlate = $licensePlate;
    }

    /**
     * @return boolean
     */
    public function isValid()
    {
        return $this->valid;
    }

    /**
     * @param boolean $valid
     */
    public function setValid($valid)
    {
        $this->valid = $valid;
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

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}