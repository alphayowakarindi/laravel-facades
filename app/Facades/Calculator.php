<?php

namespace App\Facades;

use App\Services\Calculator as ServicesCalculator;
use Illuminate\Support\Facades\Facade;

class Calculator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ServicesCalculator::class;
    }
}
