<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 
 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/farmerapp', function () {
    return view('farmerapp');
});

Route::get('/farmerappregi', function () {
    return view('farmerappregi');
});

Route::get('/mobileapp', function () {
    return view('mobileapp');
});



Auth::routes();

Route::get('/home', 'HomeController@index');

// Lets make Admin Route Group
Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

//Supplier routes
//Route::get('/supplier', 'SupplierController@index');
Route::prefix('supplier')->group(function() {
  Route::get('/login', 'Auth\SupplierLoginController@showLoginForm')->name('supplier.login');
  Route::post('/login', 'Auth\SupplierLoginController@login')->name('supplier.login.submit');
  Route::get('/', 'SupplierController@index')->name('supplier.dashboard');
});

Route::prefix('supplier')->group(function (){
   Route::get('/register', 'Auth\SupplierRegisterController@showRegisterForm')->name('supplier.register');
   Route::post('/register', 'Auth\SupplierRegisterController@register')->name('supplier.register.submit');
   
   //Supplier Product Input Routes ------>
   Route::get('/productinput', 'PagesController@productinput')->name('supplier.productinput');
   Route::get('/productinput/seed', 'PagesController@seed')->name('supplier.seed');
   Route::get('/productinput/fertilizer', 'PagesController@fertilizer')->name('supplier.fertilizer');
   Route::get('/productinput/pesticide', 'PagesController@pesticide')->name('supplier.pesticide');
   Route::get('/productinput/feed', 'PagesController@feed')->name('supplier.feed');
   
   //All Post Route for Product Input ----->
   Route::post('/productinput/seed', 'SeedController@store')->name('supplier.seed.submit');
   Route::post('/productinput/fertilizer', 'FertilizerController@store')->name('supplier.fertilizer.submit');
   Route::post('/productinput/pesticide', 'PesticideController@store')->name('supplier.pesticide.submit');
   Route::post('/productinput/feed', 'FeedController@store')->name('supplier.feed.submit');
   
   //Supplier Produce Input Routes ----->
   Route::get('/produceinput', 'PagesController@produceinput')->name('supplier.produceinput');
   Route::get('/produceinput/crop', 'PagesController@crop')->name('supplier.crop');
   Route::get('/produceinput/fruit', 'PagesController@fruit')->name('supplier.fruit');
   Route::get('/produceinput/flower', 'PagesController@flower')->name('supplier.flower');
   Route::get('/produceinput/fisheries', 'PagesController@fisheries')->name('supplier.fisheries');
   Route::get('/produceinput/dairyandpoultry', 'PagesController@dairyandpoultry')->name('supplier.dairyandpoultry');
   
   //All Post Route for Produce Input ----->
   Route::post('/produceinput/crop', 'CropController@store')->name('supplier.crop.submit');
   Route::post('/produceinput/fruit', 'FruitController@store')->name('supplier.fruit.submit');
   Route::post('/produceinput/flower', 'FlowerController@store')->name('supplier.flower.submit');
   Route::post('/produceinput/fisheries', 'FisheriesController@store')->name('supplier.fisheries.submit');
   Route::post('/produceinput/dairyandpoultry', 'DairyandpoultryController@store')->name('supplier.dairyandpoultry.submit');
   
   
   
   //Supplier Service Input Routes ------>
   Route::get('/serviceinput', 'PagesController@serviceinput')->name('supplier.serviceinput');
   Route::get('/serviceinput/Information_advisoryservice', 'PagesController@Information_advisoryservice')->name('supplier.Information_advisoryservice');
   Route::get('/serviceinput/finance', 'PagesController@finance')->name('supplier.finance');
   //Route::get('/','SupplierRegisterController@index')->name('supplier.dashboard');
   
   //All Post Route for Service Input ----->
   Route::post('/serviceinput/Information_advisoryservice', 'InfoController@store')->name('supplier.Information_advisoryservice.submit');
   Route::post('/serviceinput/finance', 'FinanceController@store')->name('supplier.finance.submit');
   
});

//Farmer Login Route:----
Route::prefix('farmer')->group(function() {
  Route::get('/login', 'Auth\FarmerLoginController@showLoginForm')->name('farmer.login');
  Route::post('/login', 'Auth\FarmerLoginController@login')->name('farmer.login.submit');
  Route::get('/', 'FarmerController@index')->name('farmer.dashboard');
});

//Farmer Register Route:----
Route::prefix('farmer')->group(function (){
   Route::get('/register', 'Auth\FarmerRegisterController@showRegisterForm')->name('farmer.register');
   Route::post('/register', 'Auth\FarmerRegisterController@register')->name('farmer.register.submit');
   //Route::get('/','SupplierRegisterController@index')->name('supplier.dashboard');
});

//Farmer PriceView Route : ------>

Route::prefix('farmer')->group(function (){

    //Farmer Product Data view Route ------>
    Route::get('/seedData', 'SeedController@show')->name('farmer.seedData');
    Route::get('/fertilizerData', 'FertilizerController@show')->name('farmer.fertilizerData');
    Route::get('/pesticideData', 'PesticideController@show')->name('farmer.pesticideData');
    Route::get('/feedData', 'FeedController@show')->name('farmer.feedData');
    //Route::get('/seedData', 'FarmerDataController@seedData')->name('farmer.seedData');
    //Route::get('/fertilizerData', 'FarmerDataController@fertilizerData')->name('farmer.fertilizerData');
    //Route::get('/pesticideData', 'FarmerDataController@pesticideData')->name('farmer.pesticideData');
    //Route::get('/feedData', 'FarmerDataController@feedData')->name('farmer.feedData');
    
    
    //Farmer Produce Data View Route ------->
    
    Route::get('/cropData', 'CropController@show')->name('farmer.cropData');
    Route::get('/fruitData', 'FruitController@show')->name('farmer.fruitData');
    Route::get('/flowerData', 'FlowerController@show')->name('farmer.flowerData');
    Route::get('/fisheriesData', 'FisheriesController@show')->name('farmer.fisheriesData');
    Route::get('/dairyandpoultryData', 'DairyandpoultryController@show')->name('farmer.dairyandpoultryData');
    
    //Route::get('/cropData', 'FarmerDataController@cropData')->name('farmer.cropData');
    //Route::get('/fruitData', 'FarmerDataController@fruitData')->name('farmer.fruitData');
    //Route::get('/flowerData', 'FarmerDataController@flowerData')->name('farmer.flowerData');
    //Route::get('/fisheriesData', 'FarmerDataController@fisheriesData')->name('farmer.fisheriesData');
    //Route::get('/dairyandpoultryData', 'FarmerDataController@dairyandpoultryData')->name('farmer.dairyandpoultryData');
    
    //Farmer Service Data View Route --------->
    Route::get('/Information_advisoryserviceData', 'InfoController@show')->name('farmer.Information_advisoryserviceData');
    Route::get('/financeData', 'FinanceController@show')->name('farmer.financeData');
    
    //Route::get('/Information_advisoryserviceData', 'FarmerDataController@Information_advisoryserviceData')->name('farmer.Information_advisoryserviceData');
    //Route::get('/financeData', 'FarmerDataController@financeData')->name('farmer.financeData');
    
});