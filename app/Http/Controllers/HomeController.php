<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\City;
use App\Repositories\CityRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var CityRepository
     */
    protected $cityRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CityRepository $cityRepository)
    {
        $this->cityRepository = $cityRepository;
    }

    /**
     * Show the index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.home.index', [
            'bigCities'    => $this->cityRepository->getBigCities(),
            'europeCities' => $this->cityRepository->getEuropeCities(),
            'littleCities' => $this->cityRepository->getOtherCities(),
            'mainCities'   => $this->cityRepository->getMainCities(),
        ]);
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
