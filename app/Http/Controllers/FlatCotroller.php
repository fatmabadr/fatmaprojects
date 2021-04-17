<?php

namespace App\Http\Controllers;

use App\Flat;
use App\User;
use Illuminate\Http\Request;

class FlatCotroller extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function store(Request $request)
    {

    // $flat=new Flat;
    
    // $flat->title =$request ->input('title');
    // $flat->price =$request ->input('price');
    // $flat->user_id=$request->input('user_id');
    // $flat->Property =$request ->input('property');
    // $flat->noOfRooms =$request ->input('noOfRooms');
    // $flat->detail =$request ->input('details');
    
    // $flat->save();
    return $request->input();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Units.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Display the specified resource.
     *
     * @param  \App\Flate  $flate
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


   return view('flats.index',['flats'=>Flat::with('user')->get()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Flate  $flate
     * @return \Illuminate\Http\Response
     */
    public function edit(Flate $flate)
    {
        
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
