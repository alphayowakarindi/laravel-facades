<?php

use App\Services\Calculator;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Calculator $calculator) {
    dd(app()->make(Calculator::class), app()->make(Calculator::class));
    // dd($calculator->add(1, 1));
});
