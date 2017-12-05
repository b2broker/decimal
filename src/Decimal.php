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

}
