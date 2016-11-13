<?php

namespace PB\LicensePlate\Detector\Germany;
use PB\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
abstract class AbstractGermanyPlate
{
    /**
     * @var string
     */
    protected $plate;

    /**
     * @var string[]
     */
    protected static $name = [
        '',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '^[A-Z]{1,2} [1-9][0-9]{0,3}$',
    ];

    /**
     * AbstractGermanyPlate constructor.
     *
     * @param string $plate
     */
    public function __construct($plate)
    {
        $this->plate = $plate;
    }

    /**
     * @return string
     * @throws \Exception
     */
    public function getDescription()
    {
        $result = $this->getIndex();

        if ($result !== false) {
            return static::$name[(int) $result];
        }

        throw new \Exception(sprintf('Error in %s while validating %s', static::class, $this->plate));
    }

    /**
     * @return string
     * @throws \Exception
     */
    public function getType()
    {
        $result = $this->getIndex();

        if ($result !== false) {
            return static::$type[(int) $result];
        }

        throw new \Exception(sprintf('Error in %s while validating %s', static::class, $this->plate));
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return $this->getIndex() !== false ? true : false;
    }

    /**
     * @return int|bool
     */
    protected function getIndex()
    {
        foreach (static::$regexes as $index => $regex) {
            if (preg_match('/' . $regex . '/', $this->plate) === 1) {
                return $index;
            }
        }

        return false;
    }
}