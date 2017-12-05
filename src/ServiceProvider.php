<?php
declare(strict_types=1);

namespace B2B\Decimal;

use B2B\Eloquent\TypeCasting\Factory;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

/**
 * Class ServiceProvider
 *
 * @package B2B\Eloquent\TypeCasting
 */
class ServiceProvider extends IlluminateServiceProvider
{
    public function register(): void
    {
        $this->app->extend('eloquent.typecasting', function (Factory $factory) {
            return $factory->extend('decimal', DecimalTypeCasting::class);
        });
    }
}
