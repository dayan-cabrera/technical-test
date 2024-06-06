<?php

namespace App\Service;

use App\Interface\IMathService;

class MathService
{
    public function add(float $numberOne, float $numberTwo): float
    {
        return $numberOne + $numberTwo;
    }
}
