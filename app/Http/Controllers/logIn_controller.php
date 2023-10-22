<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logIn_controller extends Controller
{
    public function index(){
       
        return view('login');
    }

    public function check(Request $request)
    {   
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $data = users::where('email', $email)->first();
            if ($data) {
                $request->session()->put('name', $data->Fname);
                $request->session()->put('id', $data->id);
            }
            return redirect()->route('home');   
        } else {
            return redirect()->route('login');
        }
    
    } 
}
