<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Unit;
use App\User;
use App\Feature;
use App\UnitFeature;
use App\City;

class UnitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {

    $unit=new Unit;
    $unit->type     =$request->input('type');
    $unit->title    =$request ->input('title');
    $unit->price    =$request ->input('price');
    $unit->status   =$request->input('Status');
    $unit->user_id  =$request->input('user_id');
    $unit->area     =$request ->input('area');
    $unit->noOfRooms=$request ->input('noOfRooms');
    $unit->detail   =$request ->input('details');
    $unit->city_id  =$request ->input('city_id');
    $unit->save();
    //add to unit_features
    /* Using attach to add many to many releation ship instead of the loop ;) */

    $unit->Feature()->attach($request->input('features'));

    /*$features =Feature::all();
    foreach ($features as $feature) {
         if ($request->has($feature->id)){
            $unit_feature=new UnitFeature;
            $unit_feature->unit_id = $unit->id;
            $unit_feature->feature_id= $feature->id;
            $unit_feature->save();      }
                                    }
    */
    return "Done"   ;


}
public function search(Request $request)
{
    $searchParamete = [
                        'city_id'       => $request->input()['select-location'],
                        'type'          =>$request->input()['select-type'],
                        'status'        =>$request->input()['select-status'],
                        'noOfRooms'     =>$request->input()['select-rooms'],
                      ];
    $unit = Unit::where($searchParamete)->get();

        return  view('front.search',['unit'=>$unit]);

}

public function create()
{
    return view('units.create',['features'=>Feature::all(),'cities'=>City::all()]);
}

public function index()
{

    $units                    = Unit::with('user','Feature','City')->paginate(20);
    $units_type_counter       = Unit::groupBy('type')->select('type', DB::raw('count(*) as total'))->get();
    $units_stutus_counter     = Unit::groupBy('status')->select('status', DB::raw('count(*) as total'))->get();
    $units_room_counter       = Unit::groupBy('noOfRooms')->select('noOfRooms', DB::raw('count(*) as total'))->get();
    $cities_count             = DB::table('units')->join('cities','cities.id','=','units.city_id')->select('name',DB::raw('count(*) as total'))->groupBy('name')->get();
    $city                     = City::all();

    $arr = array('units_type_counter'  =>$units_type_counter,
                 'units_stutus_counter'=>$units_stutus_counter ,
                 'cities_count'        =>$cities_count,
                 'cities_count2'       =>$cities_count,
                 'units_room_counter'  =>$units_room_counter,
                 'units'               =>$units ,
                 'city'                =>$city
                );
    return view('front.list',$arr);


}

public function show($id)
{
   $unit = Unit::where('id','=',$id)->get();
   return view('front.show_unit',['unit'=>$unit]);


}
}

