<?php

namespace App\Services;

class Calculator
{
    public function __construct(protected string $name)
    {
    }

    public function add($a, $b)
    {
        return $a + $b;
    }
}
