<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use Illuminate\Http\Request;

class ActiveOrderController extends Controller
{
    public function view(Request $request)
    {
        $session_email = session('userID');

        $transaction = transaction::where('userID','=',$session_email)->where('status','=',"Pending")->first();

        $activeorder  = new ActiveOrderCounter();
        $time = $activeorder->ActiveOrder();

        if($transaction != NULL)
        {
            $request->session()->put('transacID', $transaction->refID);
            $totalpricesolver = new TotalPriceSolver();
            $transaction = $totalpricesolver->priceSolver($transaction);

        }

        return view('activeorder',['transaction'=>$transaction, 'time'=>$time]);
    }


    public function cancel()
    {
        $id = session('transacID');
        $transaction = transaction::find($id);

        $transaction->status = "Cancelled";
        $transaction->prefferedTime = "Cancelled";
        $transaction->save();
        return redirect()->route('placeorder');
    }
}
