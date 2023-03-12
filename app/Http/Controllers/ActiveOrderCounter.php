<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use Illuminate\Http\Request;

class ActiveOrderCounter extends Controller
{
    public function ActiveOrder()
    {
        $session_email = session('userID');

        $transaction = transaction::where('userID','=',$session_email)->where('status','=',"Pending")->first();

        if($transaction == NULL)
        {
            $transaction = transaction::where('userID','=',$session_email)->where('status','=',"Cancelled")->first();

            if($transaction != NULL)
            {
                $time = $transaction->prefferedTime;
            }
            else
            {
                $time = "No Order";
            }
        }
        else
        {
            $time = $transaction->prefferedTime;
        }

        return $time;
    }
}
