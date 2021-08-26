<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if(Auth::check() && Auth::user()->verified == 1) {
            return view('dashboard');
        } else {
            Auth::logout();
            return view('auth.login');
        }
    }
}
