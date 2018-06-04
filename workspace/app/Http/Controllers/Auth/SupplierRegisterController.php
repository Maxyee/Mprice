<?php

namespace App\Http\Controllers\Auth;


use App\Supplier;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;



class SupplierRegisterController extends Controller
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
    protected $redirectTo = '/supplier';

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
        return view('supplier');
    }

    public function showRegisterForm()
    {
        return view('auth.supplier-register');
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

        event(new Registered($supplier = $this->create($request->all())));

        $this->guard()->login($supplier);

        return $this->registered($request, $supplier)
            ?: redirect($this->redirectPath());
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'phone' => 'required|min:11',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Supplier
     */
    protected function create(array $data)
    {
        return Supplier::create([
            'name' => $data['name'],
            'gender' => $data['gender'],
            'farm-name' => $data['farm-name'],
            'trade-licence' =>$data['trade-licence'],
            'nid' =>$data['nid'],
            'address' =>$data['address'],
            'phone' =>$data['phone'],
            'email' =>$data['email'],
            'social-media' =>$data['social-media'],
            'nature-of-bussiness' =>$data['nature-of-bussiness'],
            'category' =>$data['category'],
            'remarks' =>$data['remarks'],
        ]);
    }

    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/supplier';
    }


    protected function guard()
    {
        return Auth::guard();
    }


    protected function registered(Request $request, $supplier)
    {
        //
    }

}
