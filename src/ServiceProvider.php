<?php
declare(strict_types=1);

namespace B2B\Decimal;

use B2B\Eloquent\Extensions\Factories\TypesFactory;
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

        $this->app->extend('eloquent.types', function (TypesFactory $factory) {
            return $factory->extend('decimal', function ($value): Decimal {
                return Decimal::create($value);
            }, function ($value) {
                return (string) Decimal::create($value);
            });
        });
    }
}
