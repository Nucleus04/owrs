<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class Authentication_Controller extends Controller
{
    public function view()
    {
        return view('/account/authentication');
    }


    public function register(Request $customer)
    {
        $customer->validate([
            'firstname'=>'required',
            'lastname'=> 'required',
            'address'=> 'required',
            'contactnumber'=> 'required',
            'email' => 'required|email|unique:customers',
            'password' => 'required|min:8|confirmed'
        ]);

        $user = new Customer();
        $name = ucfirst($customer->firstname);
        $name .= " ";
        $name .= ucfirst($customer->lastname);

        $user->name = $name;
        $user->address = $customer->address;
        $user->email = $customer->email;
        $user->contactNumber = $customer->contactnumber;
        $user->password = Hash::make($customer->password);


        $user->container1 = $customer->container1;
        $user->container2 = $customer->container2;
        $user->container3 = $customer->container3;
        $user->container4 = $customer->container4;


        $result = $user->save();

        if($result){
            return back()->withErrors([
                'success' => 'Registered Successfully.',
            ])->onlyInput('email');
        }else{
            return redirect()->back()->with('failed', 'Unable to regirter.');
        }

    }


    public function login(Request $request)
    {
        $user = Customer::where('email','=',$request->email)->first();
        $credentials = $request->only('email', 'password');

        if($this->admin($request) == 1)
        {
            return redirect()->route('admin');
        }
        else
        {
            if(!Auth::attempt($credentials)){
                return back()->withErrors([
                    'error' => 'Wrong email or password.',
                ]);
            }
            $request->session()->put('userID',$user->userID);
            return redirect()->route('home');
        }
    }

    protected function admin(Request $request){
        if($request->email == "admin@admin.admin"){
            if($request->password == "admin"){
                $request->session()->put('userID',$request->email);
                return 1;
            }
        }
    }
}
