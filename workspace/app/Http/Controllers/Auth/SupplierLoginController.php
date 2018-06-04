<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class SupplierLoginController extends Controller
{
    public function __construct()
    {
         $this->middleware('guest:supplier');
    }
    
     
    public function showLoginForm()
    {
      return view('auth.supplier-login');
    }

    public function login(Request $request)
    {
        //validate the form data Section
        $this->validate($request, [
          //'email' => 'required|email',
          'phone' => 'required|min:11'
        ]);

        //Attempt to log the user in

        //Auth::guard('admin')->attempt($credentials, $remember);
        //we can write this line as like as...
        if(Auth::guard('supplier')->attempt(['phone' => $request->phone], $request->remember))
        {
            //If successful, then redirect them to there intetdend location,
            return redirect()->intended(route('supplier.dashboard'));
        }
        //if unsuccessful, the redirect them back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));

        //return true;
    }
}