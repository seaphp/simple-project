<?php
namespace SeaPhp\SimpleProject;

/**
 * A Simple calculator that keeps track of the current value and allows you to
 * alter it with calculator operations.
 */
class Calculator
{
    /** @var int Current value stored in the calculator. */
    private $currentValue;

    /**
     * Creates the calculator with an optional initial value.
     *
     * @param int $initialValue Initial value in the calculator. 0 by default.
     */
    public function __construct($initialValue = 0)
    {
        $this->currentValue = $initialValue;
    }

    /**
     * Add a value to the calculator's current value.
     *
     * @param int $value Value to add.
     *
     * @return $this
     */
    public function add($value)
    {
        $this->currentValue += $value;

        return $this;
    }

    /**
     * Subtract a value from the calculator's current value.
     *
     * @param int $value Value to subtract.
     *
     * @return $this
     */
    public function subtract($value)
    {
        $this->currentValue -= $value;

        return $this;
    }

    /**
     * Returns the result of the calculator.
     *
     * @return int
     */
    public function getResult()
    {
        return $this->currentValue;
    }
}
