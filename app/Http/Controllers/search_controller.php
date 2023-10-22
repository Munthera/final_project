<?php

namespace App\Http\Controllers;

use App\Models\trips;
use Illuminate\Http\Request;

class search_controller extends Controller
{
  
    public function destroy(){
        if(session()->has('search')){
            session()->pull('search');
        }
        return view('home');
    }
    
    public function search(Request $request){
        $search = $request->input('search');
        
        if($search){
            $request->session()->put('search' , $search);
            return redirect()->route('book');
        }
        else{
            session()->pull('search');
            return redirect()->route('home');
        }
    }
    public function index(){

            if(session('search')){
                $trips = trips::where('trip_name', 'like', '%' . session('search') . '%')->get();
            }
            else{
                $trips = trips::all();
            }
            return view('book' , ['trips' => $trips]);
            
    
}

}