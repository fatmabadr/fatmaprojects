<?php

namespace App\Http\Controllers;

use App\Flat;
use Illuminate\Http\Request;

class flatsCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addnewFlat(Request $req)
    {
    $flate=new Flat;
    $flate->title =$req ->input('name');
    $flate->price=$req ->input('name');
    $flate->save();
    return 'success'.$req;
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
