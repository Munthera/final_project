<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\signups;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class signup extends Controller
{
    public function index(){
        return view('signup');
    }

    
    public function store(Request $request){
        $data_input = $request->validate([
            'fname' => 'required|min:3|max:255',
            'lname' => 'required|min:3|max:255',
            'email' => 'required|email',
            'password' => 'required_with:confirm_password|same:confirm_password|max:255|min:5',
            'confirm_password' => 'required',
            'phone' => 'required|numeric',
        ]);
        $user_data = new signups; 
        $user_data->Fname = $data_input['fname'];
        $user_data->Lname = $data_input['lname'];
        $user_data->email = $data_input['email'];
        $user_data->phone = $data_input['phone'];
        $user_data->password = bcrypt($data_input['password']);        
        $user_data->save();

        return redirect()->route('login');

        
    }
   

}
