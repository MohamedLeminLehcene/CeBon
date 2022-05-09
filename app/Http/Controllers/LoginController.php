<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        $login = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);


        if(!Auth::attempt($login))
        {
            return response(['message' => 'Invalid Tocken']);
        }

        $accessToken = Auth::user()->createToken('authToken')->accessToken;

        return response(['user' => Auth::user(),'access_token' => $accessToken]);
    }


    public function register(Request $request)
    {

        $user = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $user = User::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => bcrypt($request -> passwrd),
        ]);

       return response(['user' => $user]);
    }


}
