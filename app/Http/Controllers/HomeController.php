<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }


    public function purchases()
    {
        return view('purchases');
    }


    public function sales()
    {
        return view('sales');
    }


    public function makeSale()
    {
        return view('make-sale');
    }


    public function carDetails()
    {
        return view('car-details');
    }
}
