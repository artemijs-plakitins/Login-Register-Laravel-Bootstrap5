<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');

    }
    public function loginPost(Request $request) {
        $request->validate([
            'email'=> 'required',
            'password'=> 'required'
        ]);

        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with("error", "Login details are not valid!");   
    }

    public function registerPost(Request $request) {
    $request->validate([
        'FirstName' => 'required',
        'LastName' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => [
            'required',
            'confirmed',
            'min:8',
            'regex:/[a-zA-Z]/',
            'regex:/[0-9]/',
        ],
    ]);

    // Prepare the data for insertion
    $data = [
        'FirstName' => $request->FirstName,
        'LastName' => $request->LastName,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'subscribed' => $request->has('subscribed'),
    ];

    $user = User::create($data);

    if (!$user) {
        return redirect(route('register'))->with("error", "Registration failed!");
    }

    return redirect(route('login'))->with("success", "Registration successful, now you can log in.");
    }

    function logout() {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}