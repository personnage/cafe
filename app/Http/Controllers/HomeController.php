<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $city = new City;

        return view('app.home.index', compact('city'));
    }

    /**
     * Show the index page current region.
     *
     * @param  City   $city
     * @return \Illuminate\Http\Response
     */
    public function home(City $city)
    {
        dd($city);
    }
}
