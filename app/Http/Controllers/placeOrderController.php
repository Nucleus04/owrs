<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\transaction;
use Illuminate\Http\Request;

class placeOrderController extends Controller
{

    public int $transaccount = 2;
    public function View (){
        $session_email = session('userID');
        $customer_data = Customer::where('userID','=',$session_email)->first();
        $count = transaction::where('userID','=',$session_email)->where('status','=',"Pending")->count();
        $transaccount = $count;
        $customer_data->count = $count;
        $price1 = 10;
        $price2 = 25;
        $price3 = 35;
        $price4 = 40;
        $totalprice = 0;

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

        if($customer_data->container1 != NULL)
        {
            $customer_data->price1 = $price1 * $customer_data->container1;
            $totalprice = $totalprice +  $customer_data->price1;
        }
        else
        {
            $customer_data->price1 = 0;
        }
        if($customer_data->container2 != NULL)
        {
            $customer_data->price2 = $price2 * $customer_data->container2;
            $totalprice = $totalprice +  $customer_data->price2;
        }
        else
        {
            $customer_data->price2 = 0;
        }
        if($customer_data->container3 != NULL)
        {
            $customer_data->price3 = $price3 * $customer_data->container3;
            $totalprice = $totalprice +  $customer_data->price3;
        }
        else
            $customer_data->price3 = 0;
        if($customer_data->container4 != NULL)
        {
            $customer_data->price4 = $price4 * $customer_data->container4;
            $totalprice = $totalprice +  $customer_data->price4;
        }
        else
            $customer_data->price4 = 0;

        $customer_data->totalprice  = $totalprice;
        return View('placeordertest',['users'=>$customer_data, 'transaction'=>$transaction, 'time'=>$time]);
    }

    public function transact(Request $request)
    {
        $session_email = session('userID');
        $customer_data = Customer::where('userID','=',$session_email)->first();


        $price1 = 10;
        $price2 = 25;
        $price3 = 35;
        $price4 = 40;
        $totalprice = 0;

        if($customer_data->container1 != NULL)
        {
            $customer_data->price1 = $price1 * $customer_data->container1;
            $totalprice = $totalprice +  $customer_data->price1;
        }
        else{
            $customer_data->price1 = 0;
        }
        if($customer_data->container2 != NULL)
        {
            $customer_data->price2 = $price2 * $customer_data->container2;
            $totalprice = $totalprice +  $customer_data->price2;
        }
        else{
            $customer_data->price2 = 0;
        }
        if($customer_data->container3 != NULL)
        {
            $customer_data->price3 = $price3 * $customer_data->container3;
            $totalprice = $totalprice +  $customer_data->price3;
        }
        else
            $customer_data->price3 = 0;
        if($customer_data->container4 != NULL)
        {
            $customer_data->price4 = $price4 * $customer_data->container4;
            $totalprice = $totalprice +  $customer_data->price4;
        }
        else
            $customer_data->price4 = 0;

        $customer_data->totalprice  = $totalprice;

        $ptime = $request->hour;
        $ptime .=":";
        $ptime .= $request->minute;

        if($request->am != NULL)
            $ptime .= $request->am;
        if($request->pm != NULL)
            $ptime .= $request->pm;

        $transaction = new transaction();

        $transaction->userID = $customer_data->userID;
        $transaction->name = $customer_data->name;
        $transaction->address = $customer_data->address;
        $transaction->contactNumber = $customer_data->contactNumber;
        $transaction->prefferedTime = $ptime;
        $transaction->status = "Pending";
        $transaction->container1 = $customer_data->container1;
        $transaction->container2 = $customer_data->container2;
        $transaction->container3 = $customer_data->container3;
        $transaction->container4 = $customer_data->container4;
        $transaction->price = $customer_data->totalprice;
        $transaction->save();

        return redirect()->route('activeorder');

    }

}
