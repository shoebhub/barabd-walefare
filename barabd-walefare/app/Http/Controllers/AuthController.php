<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    /**
     * backend home page
    */
    public function home(){
        return view('backend.dashboard');
    }


    /**
     * backend login page
    */
    public function loginView(){
        return view('backend.login');
    }


     // Handle login request
     public function authenticate(Request $request)
     {
        
         // Validate input data
         $request->validate([
             'email' => 'required|email',
             'password' => 'required|min:6',
         ]);        
 
         // Attempt to log the user in
         $credentials = $request->only('email', 'password');        

         $remember = $request->has('remember');
 
         if (Auth::attempt($credentials,  $remember)) {
             // Authentication passed and redirect to dashboard
             return redirect()->intended('/home');
         }
 
         // Authentication failed
         return back()->withErrors(['email' => 'Invalid credentials']);
     }
 
     // Handle logout
     public function logout(Request $request)
     {
         Auth::logout();
         return redirect()->route('login');
     }
}
