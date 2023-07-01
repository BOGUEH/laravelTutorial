<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function handleLogin(Request $request){

            $request->validate([

                'name' => ['required', 'min: 6', 'max: 25', 'alpha'],
                'email' => ['required', 'email'],
                'password' => ['required', 'min: 30', 'max: 50']

            ],[
                'name.alpha' => 'it can only contain alphabet, it will not accept numbers or any other special characters'
            ]);

        return $request;

    }
}
