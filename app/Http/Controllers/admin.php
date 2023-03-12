<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use Illuminate\Http\Request;

class admin extends Controller
{
    public function view(){
        $pending = transaction::where('status','=',"Pending")->count();
        if($pending == NULL){
            $pending = 0;
        }
        $proccessing = transaction::where('status','=',"Proccessing")->count();
        if($proccessing == NULL){
            $proccessing = 0;
        }
        $todeliver = transaction::where('status','=',"To Deliver")->count();
        if($todeliver == NULL){
            $todeliver = 0;
        }
        $alltransaction = transaction::all();
        return view('admin',['pending'=>$pending, 'proccessing'=>$proccessing, 'todeliver'=>$todeliver, 'transaction'=>$alltransaction]);
    }
}
