<?php
declare(strict_types=1);

namespace B2B\Decimal;

use B2B\Decimal\Contracts\DecimalInterface;
use Litipk\BigNumbers\Decimal as BigNumbersDecimal;

/**
 * Class Decimal
 *
 * @package B2B\Decimal
 */
class Decimal extends BigNumbersDecimal implements DecimalInterface
{
    /**
     * Decimal "constructor".
     *
     * @param  mixed $value
     * @param  int   $scale
     *
     * @return Decimal
     * @throws \TypeError
     */
    public static function create($value, int $scale = null): BigNumbersDecimal
    {
        if (\is_int($value)) {
            return static::fromInteger($value);
        }
        if (\is_float($value)) {
            return static::fromFloat($value, $scale);
        }
        if (\is_string($value)) {
            return static::fromString($value, $scale);
        }
        if ($value instanceof Decimal) {
            return static::fromDecimal($value, $scale);
        }
        throw new \TypeError(
            'Expected (int, float, string, Decimal), but received ' .
            (\is_object($value) ? \get_class($value) : \gettype($value))
        );
    }

    /**
     * Get value inner value.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Get scale.
     *
     * @return int
     */
    public function getScale(): int
    {
        $property = (new \ReflectionClass($this))->getProperty('scale');
        $property->setAccessible(true);
        return (int) $property->getValue($this);
    }
}
