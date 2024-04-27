<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Headercontroller;
use Illuminate\Http\Request;

class HeadercontrollerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //    return view('header.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('header.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
          'title_name'=>'required',
          'title_description' => 'required',
          'header_photo' => 'required |image|mimes:jpeg,png,jpg',
        //   'robert_fox' => 'required |image|mimes:jpeg,png,jpg',
        //   'michel_jones' => 'required |image|mimes:jpeg,png,jpg',
       ]);

        if ($request->hasFile('header_photo')) {
            $file = $request->file('header_photo');
            $header_photo = time() . '.' . $file->getClientOriginalExtension();
            $path = "uploads/header_photos";
            $file->move(public_path($path), $header_photo);

        }
        Header::insert([
            'header_photo' => $header_photo,
            'title_name' => $request->title_name,
            'title_description' => $request->title_description,
        ]);

    return back()->with('insert','Data insert successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Headercontroller $headercontroller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Headercontroller $headercontroller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Headercontroller $headercontroller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Headercontroller $headercontroller)
    {
        //
    }
}
