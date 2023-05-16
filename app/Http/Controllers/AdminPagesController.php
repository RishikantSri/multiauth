<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function panelHome()
    {
        return view('admin.panel_home');
    }
}
