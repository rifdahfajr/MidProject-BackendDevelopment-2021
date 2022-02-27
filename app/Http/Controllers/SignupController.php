<?php

namespace App\Http\Controllers;

use App\Models\Signup;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function getSignUp() {
        return view('signups');
    }

    public function signupUser(Request $request){
        Signup::create([
            'fullname' => $request->fullname,
            'username' => $request->username,
            'password' => $request->password,
            'confirmpassword' => $request->confirmpassword,
            'address' => $request->address,
            'phonenumber' => $request->phonenumber,
            'age' => $request->age,
            'birthdate' => $request->birthdate,
        ]);

        return redirect(route('getSignUp'));
    }
}
