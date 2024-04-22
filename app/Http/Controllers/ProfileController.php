<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function update(Request $request) {
        $user = Customer::find(Auth::user()->id);
        $user->email = $request->email;
        $user->city = $request->city;
        $user->address = $request->address;
        $user->save();

        return redirect()->back()->with('success', 'Profile has been updated successfully.');
    }

    public function changePassword(Request $request) {
        // dd($request);
        $user = Customer::find(Auth::user()->id);
        if (Hash::check($request->current_password, $user->password)) {
            $user->password = Hash::make($request->new_password);
            $user->save();
            return redirect()->back()->with('success', 'Password has been changed successfully.');
        } else {
            return redirect()->back()->with('error', 'Old password not matched.');
        }
    }
}
