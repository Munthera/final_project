<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
   
    public function index()
    {
     $data= users::all();
     return view('admin.Users',compact('data'));
 
}

    // public function user(){
    //     $user = users::where('id' , session('id'));
    //     return view('user', ['user' => $user]);

    // }
    public function userAdmin(){
        $user = Auth::user();
        return view('admin.Account', compact('user'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request){
        
        $user = users::where('id', 1)->get();

        return view('user', ['user' => $user]);
    }


    public function edit()
    {
        $user = users::where('id', 1)->get();

        return view('edit', ['user' => $user]);
    }


    public function userp()
    {
        $user = users::where('id', 2)->get();

        return view('user', ['user' => $user]);
    }


    public function logoutAdmin(){
        if(session()->has('admin')){
            session()->pull('admin');
        }
        return redirect('admin');
    }
    

   
    public function createA(Request $request)
    {
        $usr = new users();
        $usr->Fname    = $request->input('user_fname');
        $usr->Lname    = $request->input('user_lname');
        $usr->password    = bcrypt($request->input('user_pass'));
        $usr->email    = $request->input('user_email');
        $usr->phone    = $request->input('user_phone');
        $usr->save();
        return redirect('/AdminUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editA($id, $status)
    {
        $usr = users::find($id);
        $usr->is_admin= $status;
        $usr->update();
        return redirect('/AdminUser');    }

    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usr = users::find($id);
        $relatedRes = reservation::where('user_id', $usr->id)->count();

        if ($relatedRes > 0) {
            // There are related trips, so display an error message
            return redirect()->back()->with('error1', 'Cannot delete this user until all related reservation are deleted.');
        }
        $usr->delete();
        return redirect('/AdminUser');    }
   
//     public function update(Request $request, $id)
// {
// $request->validate([
//         'name' => 'required|string|max:255',
//         'email' => 'required|email|max:255',
//         'phone' => 'required|string|max:20',
//         'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
//     ]);

//     // Update the user data based on the form input
//     $user = users::find($id);

//     if (!$user) {
//         return redirect()->back()->with('error', 'User not found');
//     }

//     $user->name = $request->input('name');
//     $user->email = $request->input('email');
//     $user->phone = $request->input('phone');
//     $user->photo = $request->input('photo');


//     $user->save();

//     return redirect('user');
// }


public function updateuser(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);


   
    $user = users::find($id); 

    if (!$user) {
        return redirect()->back()->with('error', 'User not found');
    }

    $user->Fname = $request->input('name');
    $user->Lname = $request->input('lname');
    $user->email = $request->input('email');
    $user->phone = $request->input('phone');

    if ($request->hasFile('photo')) {
        $photo = $request->file('photo');
        $photoname = $photo->getClientOriginalName();
        $photo->move(public_path('assetsAdmin/images'), $photoname);
        $user->photo = $photoname;
    }
    

    $user->save();

    return redirect()->route('user_profile');
}







public function useredit($id)
{
    $user = Users::where('id', $id)->get(); 

    if (!$user) {
        return redirect()->back()->with('error', 'User not found');
    }


    
    return view('edit', compact('user'));
}



}