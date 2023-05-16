<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerPagesController extends Controller
{
    public function panelHome()
    {
        return view('manager.panel_home');
    }
}
