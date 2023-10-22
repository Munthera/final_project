<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use App\Models\users;
use App\Models\trips;

use Illuminate\Http\Request;

class ReservatioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = reservation::with(['user:id,Fname', 'trip:id,trip_name'])->get();
        $data2 = users::all();
        $data3 = trips::all();

        return view('admin.Orders', compact('data', 'data2', 'data3'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $res = new reservation();
        $res->reservation_date = $request->input('reservation_date');
        $res->user_id = $request->input('user_id');
        $res->trip_id = $request->input('trip_id');
        $res->payment_status = $request->input('payment_status');

        $res->save();
        return redirect('/AdminOrders');
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
    public function show(reservation $reservatio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, $status)
    {
        //
        $res = reservation::find($id);
        $res->payment_status = $status;
        $res->update();
        return redirect('/AdminOrders');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reservation $reservatio)
    {
        //
        $id = $request->input('id');
        $res = reservation::find($id);
        if ($request->input('reservation_date')) {
            // dd($request->input('reservation_date'));
            $res->reservation_date = $request->input('reservation_date');
            $res->update();
        }
        return redirect('/AdminOrders');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $res = reservation::find($id);
        $res->delete();
        return redirect('/AdminOrders');
    }


    public function total()
    {
        $reservations = reservation::with('trip')->get();
        $totalPrice=0;
        foreach ($reservations as $reservation) {
            $tripPrice = $reservation->trip->price;
            $totalPrice  = $totalPrice + $tripPrice ; 
        }
        $data = $totalPrice;
        $data2 = reservation::count();
        $data3 = users::count();
        return view('admin.Index', compact('data','data2', 'data3'));




    }
    public function confirmation(Request $request){
        $request->validate([
            'trip_day' => 'required',
        ]);
        $user_id = $request->input('user_id');
        $trip_id = $request->input('trip_id');
        $request->session()->put('trip_id' , $trip_id);
        $day = $request->input('trip_day');
        $confirmation = new reservation;
        $confirmation->user_id = $user_id;
        $confirmation->trip_id = $trip_id;
        $confirmation->trips_days = $day;
        $confirmation->save();
        return redirect()->route('user_profile');
    }
    public function user_trip()
    {
        $user = users::where('id' , '=',session('id'))->get();
        // return view('user', ['user' => $user]);
        $userId = session('id');
        $tripId = session('trip_id');
        
        $reservations = reservation::where('user_id', '=', $userId)->with('user', 'trip')->get();

        return view('user', compact('reservations' , 'user'));
    }
    
}
