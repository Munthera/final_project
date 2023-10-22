<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdmin extends Controller
{

    public function index(){
        return view('admin.Login');
    }

    public function check(Request $request)
    {   
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $email = $request->input('email');
        $password = $request->input('password');
    
        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $user = users::where('email', $email)->first();
    
            // Check if the user is an admin
            if ($user && $user->is_admin == 1) {
                session()->put('admin', $user->id);
                return redirect('/AdminIndex');   
            } else {
                return redirect('admin')->with('message', 'You are not an admin.');
            }
        } else {
            return redirect('admin')->with('message', 'User email or password is incorrect.');
        }
    }

    
}