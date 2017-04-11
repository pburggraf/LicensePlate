<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

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
     * @var string
     */
    protected $prefix;

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
        '/^(?:[A-ZÄÖÜ]{1,2} [A-Z]{1,2} [1-9][0-9]{0,3}[EH]?|[A-ZÄÖÜ]{3} (?:[A-Z]{1} [1-9][0-9]{0,3}[EH]?|[A-Z]{2} [1-9][0-9]{0,2}[EH]?))$/',
    ];

    /**
     * @var string[]
     */
    protected static $globalName = [
        'Konsularische Korps',
    ];

    /**
     * @var int[]
     */
    protected static $globalType = [
        GermanyDetector::PLATE_TYPE_DIPLOMATIC_CORPS,
    ];

    /**
     * @var string[]
     */
    protected static $globalRegex = [
        '/^[A-ZÄÖÜ]{1,2} 9[0-9]{2,4}$/',
    ];

    /**
     * AbstractGermanyPlate constructor.
     *
     * @param string $plate
     */
    public function __construct($plate)
    {
        $this->plate = $plate;

        static::$name = array_merge(static::$name, static::$globalName);
        static::$type = array_merge(static::$type, static::$globalType);
        static::$regexes = array_merge(static::$regexes, static::$globalRegex);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        $result = $this->getIndex();

        if ($result !== false) {
            return static::$name[(int) $result];
        }

        return '';
    }

    /**
     * @return int
     */
    public function getType()
    {
        $result = $this->getIndex();

        if ($result !== false) {
            return static::$type[(int) $result];
        }

        return GermanyDetector::PLATE_TYPE_UNKNOWN;
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
            if (preg_match($regex . 'u', $this->plate) === 1) {
                return $index;
            }
        }

        return false;
    }
}
