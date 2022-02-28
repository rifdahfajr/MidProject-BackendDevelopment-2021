<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLogin() {
        return view('login');
    }

    public function loginUser(Request $request){
        Login::create([
            'username' => $request->username,
            'password' => $request->password,
        ]);

        // return redirect(route('getCourse'));
        return redirect('/course');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'username' => 'required|min:3|max:15',
            'password' => 'required|min:8|max:20',
        ]);

        Login::create($validatedData);
        return redirect('/course');
    }
}
