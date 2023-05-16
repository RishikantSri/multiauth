<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientPagesController extends Controller
{
    public function panelHome()
    {
        return view('client.panel_home');
    }
}
