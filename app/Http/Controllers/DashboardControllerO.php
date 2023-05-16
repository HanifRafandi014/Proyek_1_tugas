<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardControllerO extends Controller
{
    public function index() {
        return view('dashboard');
    }

    public function redirect() {
        return redirect()->route('dashboard');
    }
}
