<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;
use App\User;
use App\Feature;
use App\UnitFeature;

class UnitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {

    $unit=new Unit;
    $unit->type=$request->input('type');
    $unit->title =$request ->input('title');
    $unit->price =$request ->input('price');
    $unit->user_id=$request->input('user_id');
    $unit->Property =$request ->input('property');
    $unit->noOfRooms =$request ->input('noOfRooms');
    $unit->detail =$request ->input('details');
    $unit->save();
    //add to unit_features



$features =Feature::all();
foreach ($features as $feature) {
    if ($request->has($feature->id)){
        $unit_feature=new UnitFeature;
        $unit_feature->unit_id = $unit->id;
        $unit_feature->feature_id= $feature->id;
        $unit_feature->save();      }
                                }

return "Done"   ;



}

public function create()
{
    return view('Units.create');
}

public function index()
    {

    //return Unit::with('User')->get();
    $unit = Unit::all();	
 
//return Unit::with('Feature')->get();

   return view('units.index',['units'=>Unit::with('user','Feature')->get()]);
    }

}

