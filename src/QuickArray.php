<?php

namespace Alirezasalehizadeh\QuickArray;

class QuickArray extends \SplFixedArray
{

    public function __construct(int $size)
    {
        parent::__construct($size);
    }

    /**
     * Push new element to QuickArray
     *
     * @param mixed $index
     * @param mixed $value
     *
     * @return void
     */
    public function push($index, $value)
    {
        $this[$index] = $value;
    }

    /**
     * Push normal array to QuickArray
     *
     * @param array $array
     * @param boolean $preserveKeys
     *
     * @return new SplFixedArray
     */
    public function pushArray(array $array, bool $preserveKeys = true)
    {
        return $this->fromArray($array, $preserveKeys);
    }

    /**
     * Get the size of QuickArray
     *
     * @return integer
     */
    public function size(): int
    {
        return $this->count();
    }

    /**
     * Set size for QuickArray
     *
     * @param integer $size
     *
     * @return boolean
     */
    public function resize(int $size): bool
    {
        return $this->setSize($size);
    }

    /**
     * Get element value by index
     *
     * @param mixed $index
     *
     * @return void
     */
    public function get($index)
    {
        return $this->offsetGet($index);
    }

    /**
     * Set value for specific index
     *
     * @param mixed $index
     * @param mixed $value
     *
     * @return void
     */
    public function set($index, $value)
    {
        $this->offsetSet($index, $value);
    }

    /**
     * Unset element by index
     *
     * @param mixed $index
     *
     * @return void
     */
    public function unset($index) {
        $this->offsetUnset($index);
    }

    /**
     * Check the element are exists by index
     *
     * @param mixed $index
     *
     * @return boolean
     */
    public function exists($index): bool
    {
        return $this->offsetExists($index);
    }
}
