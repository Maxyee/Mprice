<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:supplier');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
  
  
    // Product Input PagesControllers Start Here ---->
    public function productinput()
    {
        return view('productinput');
    }
    
    public function seed()
    {
        return view('seed');
    }
    
    public function fertilizer()
    {
        return view('fertilizer');
    }
    
    public function pesticide()
    {
        return view('pesticide');
    }
    
    public function feed()
    {
        return view('feed');
    }
    //Product Input PagesControllers End Here -----> 
   
   
    // Produce Input PagesController Starts Here --->
    public function produceinput()
    {
        return view('produceinput');    
    }
    
    public function crop()
    {
        return view('crop');
    }
    
    public function fruit()
    {
        return view('fruit');
    }
    
    public function flower()
    {
        return view('flower');
    }
    
    public function fisheries()
    {
        return view('fisheries');
    }
    
    public function dairyandpoultry()
    {
        return view('dairyandpoultry');
    }
    
    // Produce InPut pagesController End here ----> 
    
    
    
    // Service Input PagesController Start here --->
    public function serviceinput()
    {
        return view('serviceinput');    
    }
    
    public function Information_advisoryservice()
    {
        return view('Information_advisoryservice');    
    }
    
    public function finance()
    {
        return view('finance');    
    }
    //Service Input PagesController End Here --->
   
   
}
