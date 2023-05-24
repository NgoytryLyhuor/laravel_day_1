<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function Data(Request $request){
        $name = $request->name;
        $pass = $request->pass;
        $c_pass = $request->c_pass;
        return view('dashboard',compact('name','pass','c_pass'));
    }
}
