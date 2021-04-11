<?php

namespace App\Http\Controllers;

use App\Flat;
use Illuminate\Http\Request;

class FlatCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addnewFlat(Request $req)
    {

    $flat=new Flat;
    $flat->title =$req ->input('title');
    $flat->price =$req ->input('price');
    $flat->Property =$req ->input('property');
    $flat->noOfRooms =$req ->input('noOfRooms');
    $flat->detail =$req ->input('details');
    
    $flat->save();
    return $req->input();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Units.addnewFlat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Flate  $flate
     * @return \Illuminate\Http\Response
     */
    public function show(Flate $flate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Flate  $flate
     * @return \Illuminate\Http\Response
     */
    public function edit(Flate $flate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Flate  $flate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flate $flate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flate  $flate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flate $flate)
    {
        //
    }
}
