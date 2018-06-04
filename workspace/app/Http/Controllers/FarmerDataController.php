<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FarmerDataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:farmer');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    //For Product Page................
    public function seedData()
    {
         return view('seedData');
    }

    public function fertilizerData()
    {
        return view('fertilizerData');
    }
    
    public function pesticideData()
    {
        return view('pesticideData');
    }
    
    public function feedData()
    {
        return view('feedData');
    }

    // For Produce Page..............

    
    public function cropData()
    {
        return view('cropData');
    }
    
    public function fruitData()
    {
        return view('fruitData');
    }
    
    public function flowerData()
    {
        return view('flowerData');
    }
    
    public function fisheriesData()
    {
        return view('fisheriesData');
    }
    
    public function dairyandpoultryData()
    {
        return view('dairyandpoultryData');
    }

    //For Service Page .........................
    
    public function Information_advisoryserviceData()
    {
        return view('Information_advisoryserviceData');    
    }
    
    public function financeData()
    {
        return view('financeData');    
    }
    
}
