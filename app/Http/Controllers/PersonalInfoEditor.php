<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalInfoEditor extends Controller
{
    public function update(Request $customer){
        $session_email = session('userID');

        $user = Customer::find($session_email);

        if($customer->name != NULL)
            $user->name = $customer->name;
        if($customer->address != NULL)
            $user->address = $customer->address;
        if($customer->email != NULL)
            $user->email = $customer->email;
        if($customer->contactNumber != NULL)
            $user->contactNumber = $customer->contactNumber;

        $user->save();

        return back()->withErrors([
            'error' => 'Registered Successfully.',
        ])->onlyInput('email');
    }
}
