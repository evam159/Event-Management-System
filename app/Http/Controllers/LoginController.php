<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('user_name', 'password');
     

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard.index');
        }
        return back()->withErrors([
            "Invalid Login!"
        ]);

    }

}
