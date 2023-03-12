<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TotalPriceSolver extends Controller
{
    public function priceSolver($transaction)
    {
        $price1 = 10;
        $price2 = 25;
        $price3 = 35;
        $price4 = 40;
        $totalprice = 0;

        if($transaction->container1 != NULL)
        {
            $transaction->price1 = $price1 * $transaction->container1;
            $totalprice = $totalprice +  $transaction->price1;
        }
        else
        {
            $transaction->price1 = 0;
        }
        if($transaction->container2 != NULL)
        {
            $transaction->price2 = $price2 * $transaction->container2;
            $totalprice = $totalprice +  $transaction->price2;
        }
        else
        {
            $transaction->price2 = 0;
        }
        if($transaction->container3 != NULL)
        {
            $transaction->price3 = $price3 * $transaction->container3;
            $totalprice = $totalprice +  $transaction->price3;
        }
        else
        {
            $transaction->price3 = 0;
        }
        if($transaction->container4 != NULL)
        {
            $transaction->price4 = $price4 * $transaction->container4;
            $totalprice = $totalprice +  $transaction->price4;
        }
        else
        {
            $transaction->price4 = 0;
        }

        $transaction->totalprice  = $totalprice;

        return $transaction;
    }
}
