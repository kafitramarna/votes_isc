<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function login_post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nim' => 'required',
            'password' => 'required',

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $credentials = $request->only('nim', 'password');

        if (Auth::attempt($credentials)) {
            // dd(Auth::user());
            return redirect('/dashboard');
        }
        return redirect()->back();
    }
}
