<?php

namespace App\Providers;

use App\Services\Calculator;
use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(Calculator::class, function () {
            $name = 'me';
            return new Calculator($name);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->make('log')->info('log success');
    }
}
