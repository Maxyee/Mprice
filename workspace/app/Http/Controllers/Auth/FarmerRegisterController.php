<?php

namespace App\Http\Controllers\Auth;


use App\Farmer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;



class FarmerRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/farmer';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('farmer');
    }

    public function showRegisterForm()
    {
        return view('auth.farmer-register');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($farmer = $this->create($request->all())));

        $this->guard()->login($farmer);

        return $this->registered($request, $farmer)
            ?: redirect($this->redirectPath());
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            //'email' => 'required|max:255',
            //'location' => 'required',
            'phone' => 'required|min:11',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return farmer
     */
    protected function create(array $data)
    {
        return Farmer::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'address' => $data['address'],
            'nid' => $data['nid'],
            'phone' => $data['phone'],
        ]);
    }

    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/farmer';
    }


    protected function guard()
    {
        return Auth::guard();
    }


    protected function registered(Request $request, $farmer)
    {
        //
    }

}