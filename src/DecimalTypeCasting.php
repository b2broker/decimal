<?php
declare(strict_types=1);

namespace B2B\Decimal;

use B2B\Eloquent\TypeCasting\Contracts\TypeCasting;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DecimalTypeCasting
 *
 * @package B2B\Decimal
 */
class DecimalTypeCasting implements TypeCasting
{
    /**
     * @param string $key
     * @param mixed  $value
     * @param Model  $model
     *
     * @return mixed
     * @throws \TypeError
     */
    public function castAttribute(string $key, $value, Model $model): Decimal
    {
        return Decimal::create($value);
    }

    /**
     * @param string $key
     * @param mixed  $value
     * @param Model  $model
     *
     * @return string
     * @throws \TypeError
     */
    public function fromAttribute(string $key, $value, Model $model): string
    {
        return (string) Decimal::create($value);
    }
}
