<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagerAuthController extends Controller
{
    public function __construct()
    {
        Auth::setDefaultDriver('manager');
        config(['auth.defaults.passwords' => 'managers']); 
    }

    public function login()
    {
        return view('manager_auth.managerlogin');
    }

    public function logoutManager(Request $request)
        {
            Auth::guard('manager')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
        }

    public function store(Request $request)
    {
        $request->validate([
            'email'=>'required|string',
            'password'=>'required|min:5|max:30'
        ]);


        if (Auth::guard('manager')->attempt(['email' => $request->identifier, 'password' => $request->password])|| 
           Auth::guard('manager')->attempt(['username' => $request->identifier, 'password' => $request->password])) {
                // Authentication was successful...
                return redirect()->route('panel');
        }
    else{
        return redirect()->route('manager.login')->with('fail','Incorrect credentials');
        }
        }
}
