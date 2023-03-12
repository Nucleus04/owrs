<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class ContainerEditor extends Controller
{
    public function update(Request $request){
        $sessionid = session('userID');
        $user = Customer::find($sessionid);

        if($request->container1 != NULL)
            $user->container1 = $request->container1;
        if($request->container2 != NULL)
            $user->container2 = $request->container2;
        if($request->container3 != NULL)
            $user->container3 = $request->container3;
        if($request->container4 != NULL)
            $user->container4 = $request->container4;

        $user->save();

        return back()->withErrors([
            'error' => 'Registered Successfully.',
        ])->onlyInput('email');
    }
}
