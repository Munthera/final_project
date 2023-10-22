<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\trips;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = category::all();
        return view('admin.Categories', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $cat = new category();
        $cat->category_name    = $request->input('cat_name');
        $img = $request->file('cat_img');
        $imgname = $img->getClientOriginalName();
        $img->move(public_path('assetsAdmin/images'), $imgname);
        $cat->category_picture = $imgname;
        $cat->save();
        return redirect('/AdminCategories');
    }

  
    // public function categ()
    // {
    //     $cat = category::all();

       
    //     return view('home' , ['cat' => $cat]);
    // }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {

        $id = $request->input('id');
        $cat = category::find($id);
        $cat->category_name = $request->input('cat_name');
        if ($request->file('cat_img')) {
            $img = $request->file('cat_img');
            $imgname = $img->getClientOriginalName();
            $img->move(public_path('assetsAdmin/images'), $imgname);
            $cat->category_picture = $imgname;
        }

        $cat->update();
        return redirect('/AdminCategories');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $cat = category::find($id);
        // Check if there are related trips
        $relatedTrips = trips::where('category_id', $cat->id)->count();

        if ($relatedTrips > 0) {
            // There are related trips, so display an error message
            return redirect()->back()->with('error1', 'Cannot delete this category until all related trips are deleted.');
        }
        $cat->delete();
        return redirect('/AdminCategories');
    }
}
