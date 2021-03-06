<?php

namespace App\Http\Controllers;

use App\Lokasi;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lokasi = Lokasi::all();
        $user = User::all();
        return view('landingpage.home', compact('lokasi', 'user'));
    }
}
