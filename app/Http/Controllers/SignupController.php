<?php

namespace App\Http\Controllers;

use App\Models\Signup;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function getSignUp() {
        return view('signup');
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

        return redirect(route('getLogin'));
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'fullname' => 'required|min:10|max:45',
            'username' => 'required|min:3|max:15',
            'password' => 'required|min:8|max:20',
            'confirmpassword' => 'required|min:8|max:20',
        ]);

        dd($request);
        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['confirmpassword'] = bcrypt($validatedData['confirmpassword']);

        Signup::create($validatedData);

        $request->session()->flash('success', 'Registration successfull! Please Login');
        return redirect('/login');
    }
}
