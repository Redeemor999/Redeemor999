<?php

namespace app\PaymentGateway;

class efford
{
    public float $refVal = 0;

    public function payTax($refVal): float
    {
        $refVal = $refVal * (8 * 100);
        return $refVal;
    }
}