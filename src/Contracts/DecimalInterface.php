<?php
declare(strict_types=1);

namespace B2B\Decimal\Contracts;

/**
 * Interface DecimalInterface
 *
 * @package B2B\Decimal\Contracts
 */
interface DecimalInterface
{
    /**
     * Get value inner value.
     *
     * @return string
     */
    public function getValue(): string;

    /**
     * Get scale.
     *
     * @return int
     */
    public function getScale(): int;
}
