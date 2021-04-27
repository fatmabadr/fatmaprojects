<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
class CityController extends Controller
{
    

    public function store(Request $request)
    {

    $city=new City;
    $city->name=$request->input('name');
    $city->save();
    return "Done^^";
    }
    public function create()
{
    return view('city.create');
}
public function index()
    {

   
    $unit = City::all();	
 

   return view('city.index',['cities'=>City::all()]);
  
    }

}
