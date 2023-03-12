<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class adminController extends Controller
{

    public function View (){
        $session_email = session('userID');

        $customer_data = Customer::where('userID','=',$session_email)->first();

        return view('admin',['users'=>$customer_data]);
    }
}
