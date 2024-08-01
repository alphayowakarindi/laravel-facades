<?php

use App\Facades\Calculator;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dd(Calculator::add(1, 2));
});
