<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Charts\HomeChart;
use App\Models\Dashboard;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dashboards = Dashboard::all();
        //return view('home', ['chart' => $chart->build()]);
        return view('home', compact('dashboards'));
    }
}
