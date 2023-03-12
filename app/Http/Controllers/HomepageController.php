<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function view(){
        //Active Order
        $activeorder  = new ActiveOrderCounter();
        $time = $activeorder->ActiveOrder();

        $pending = transaction::where('status','=',"Pending")->count();
        if($pending == NULL)
        {
            $pending = 0;
        }
        $proccessing = transaction::where('status','=',"Proccessing")->count();
        if($proccessing == NULL)
        {
            $proccessing = 0;
        }
        $todeliver = transaction::where('status','=',"To Deliver")->count();
        if($todeliver == NULL)
        {
            $todeliver = 0;
        }
        return view('homepage',['transaction'=>$time, 'pending'=>$pending, 'proccessing'=>$proccessing, 'todeliver'=>$todeliver]);
    }
}
