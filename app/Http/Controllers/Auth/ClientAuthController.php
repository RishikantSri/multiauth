<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientAuthController extends Controller
{
    public function __construct()
    {
        Auth::setDefaultDriver('client');
        config(['auth.defaults.passwords' => 'clients']);
    }

    public function login()
    {
        return view('client_auth.clientlogin');
    }

    public function logoutClient(Request $request)
    {
        Auth::guard('client')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|min:5|max:30'
        ]);


        if (
            Auth::guard('client')->attempt(['email' => $request->identifier, 'password' => $request->password]) ||
            Auth::guard('client')->attempt(['username' => $request->identifier, 'password' => $request->password])
        ) {
            // Authentication was successful...
            return redirect()->route('client.panel');
        } else {
            return redirect()->route('client.login')->with('fail', 'Incorrect credentials');
        }
    }
}
