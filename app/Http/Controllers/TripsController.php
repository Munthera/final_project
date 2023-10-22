<?php

namespace App\Http\Controllers;

use App\Models\trips;
use App\Models\category;
use App\Models\reservation;

use App\Models\users;
use Illuminate\Http\Request;

class TripsController extends Controller
{
   

    public function index (){

        $data = trips::with('category:id,category_name')->get();
        $data2= category::all();
        return view('admin.Trips', compact('data','data2'));
    }




    
    public function create(Request $request)
    {
        $trp = new trips();
        $trp->trip_name    = $request->input('trip_name');
        $trp->price    = $request->input('trip_price');
        $trp->date    = $request->input('trip_date');
        
        $trp->clients    = $request->input('trip_clients');

        $img = $request->file('trip_img');
        $imgname = $img->getClientOriginalName();
        $img->move(public_path('assetsAdmin/images'), $imgname);
        $trp->photo = $imgname;

        $trp->days	    = $request->input('trip_days');
        $trp->details    = $request->input('trip_details');
        $trp->category_id     = $request->input('categories_id');


        $trp->save();
        return redirect('/AdminTrips');    }



    public function enjoyment()
    {
        $trips = trips::where('category_id', 8 )->get();
        foreach ( $trips as $trip){

        }
        return view('tours', ['trips' => $trips]);


       
    }

    public function medical()
    {
        $trips = trips::where('category_id', 15)->get();

        return view('tours', ['trips' => $trips]);

    }

    public function archaeological()
    {
        $trips = trips::where('category_id', 10)->get();

        return view('tours', ['trips' => $trips]);

    }

    public function religious()
    {
        $trips = trips::where('category_id', 14)->get();

        return view('tours', ['trips' => $trips]);

    }


    public function petradetails()
    {
        $trips = trips::where('trip_name', 'Petra')->get();

        return view('details')->with('trips', $trips);

    }

    public function ummdetails()
    {
        $trips = trips::where('trip_name', 'Umm Qais, Irbid')->get();

    //     return view('details')->with('trips', $trips);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $trp = trips::find($id);
        $relatedRes = reservation::where('trip_id', $trp->id)->count();

        if ($relatedRes > 0) {
            // There are related trips, so display an error message
            return redirect()->back()->with('error1', 'Cannot delete this Trip until all related reservation are deleted.');
        }  
        $trp->delete();
        return redirect('/AdminTrips');  }







        
    public function deaddetails()
    {
        $trips = trips::where('trip_name', 'Dead sea')->get();

        return view('details')->with('trips', $trips);

    }

    public function aqabadetails()
    {
        $trips = trips::where('trip_name', 'Aqaba')->get();

        return view('details')->with('trips', $trips);

    }

    public function ammandetails()
    {
        $trips = trips::where('trip_name', 'Amman')->get();

        return view('details')->with('trips', $trips);

    }

    
    public function wadidetails()
    {
        $trips = trips::where('trip_name', 'Wadi Rum')->get();

        return view('details')->with('trips', $trips);

    }
   

    public function usertrup(Request $req)
{

    $id = $req->trip_id;
    $trip = trips::find($id)->get()->first(); 

    if (!$trip) {
       
        return "somthing wrong .!";
    }
    

    
    return view('user');
}


// public function usertrup(Request $req)
// {
//     $id = $req->trip_id;
//     $trip = trips::find($id); 

//     if (!$trip) {
//         return "Something went wrong!";
//     }

//     // Assuming you have a way to fetch user data, replace this with your logic
//     $user = users::find($userId); // Replace User with your actual User model

//     // Assuming you have a way to fetch trips for the user, replace this with your logic
//     $trips = $user->trips; // Replace 'trips' with the relationship method you defined

//     return view('user_profile', ['user' => $user, 'trips' => $trips]);
// }
public function edit(Request $request)
{
    $id = $request->input('id');
    $trp = trips::find($id);
    $trp->trip_name = $request->input('trip_name');
    $trp->price = $request->input('trip_price');
    $trp->date = $request->input('trip_date');
    $trp->clients = $request->input('trip_clients');
    if ($request->file('trip_img')) {
        $img = $request->file('trip_img');
        $imgname = $img->getClientOriginalName();
        $img->move(public_path('assetsAdmin/images'), $imgname);
        $trp->photo = $imgname;}

        $trp->days = $request->input('trip_days');
        $trp->details = $request->input('trip_details');
        $trp->category_id = $request->input('categories_id');





        $trp->update();
        return redirect('/AdminTrips');
    


}

}
