<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Repositories\CityRepository;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var CityRepository
     */
    protected $cityRepo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CityRepository $cityRepo)
    {
        $this->cityRepo = $cityRepo;
    }

    /**
     * Show the index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $city = $this->cityRepo;

        return view('app.home.index', compact('city'));
    }

    /**
     * Show the index page current region.
     *
     * @param  City  $city
     * @return \Illuminate\Http\Response
     */
    public function home(City $city)
    {
        return view('app.home.index', compact('city'));
    }
}
