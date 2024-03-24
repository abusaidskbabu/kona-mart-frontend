<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Auth;

class AuthController extends Controller
{
    public function signup(){
        return view('pages.auth.signup');
    }

    public function login(){
        return view('pages.auth.login');
    }

    public function signupStore(Request $request){
        $validator = Validator::make($request->all(), [
			'name' => 'required',
			'phone' => 'required|unique:customers,phone_number',
			'password' => 'required|min:8|confirmed',
			'password_confirmation' => 'required',
		]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $customer = new Customer();
        $customer->name = $request->name;
        $customer->phone_number = $request->phone;
        $customer->customer_group_id  = 1;
        $customer->password  = Hash::make($request->password);
        $customer->is_active  = 1;
        $customer->save();
        
        return redirect()->back()->with('success', 'Your registration successfully complete!');
    }

    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
			'phone_number' => 'required',
			'password' => 'required',
		]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('phone_number', 'password');
        $user = Customer::where('phone_number', $request->phone_number)->first();
        
        if ($user && $user->is_active == 1) {
            if (Auth::attempt($credentials)) {
                return redirect()->route('dashboard');
            }else{
                return redirect()->back()->withErrors(['error' => 'Invalid credentials.']);
            }
        }else{
            return redirect()->back()->withErrors(['error' => 'Your account is not active yet!.']);
        }
        
    }

    public function logout(Request $request)
	{
		Auth::logout();
		$request->session()->invalidate();
		return redirect()->route('home');
	}

}
