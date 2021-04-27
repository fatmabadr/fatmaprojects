@extends('layouts.app')

@section('content')
 
<div class="container">

 
  <h1>add new flat ya {{ Auth::user()->name  }}^_^</h1>
  {!! Form::open(['url' => 'Units/submit']) !!}
  <div class="form-group">
      {{Form::label('type', 'type')}}
      {{Form::text('type', '', ['class' => 'form-control'])}}
    </div>


    <div class="form-group">
      {{Form::label('title', 'title')}}
      {{Form::text('title', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
      {{Form::label('price', 'Price')}}
      {{Form::text('price', '', ['class' => 'form-control'])}}
    </div>


    <input  type="hidden"id="user_id" type="user_id"  name="user_id" value={{ Auth::user()->id }}>

    
    <div class="form-group">
      {{Form::label('area', 'area size (m2)')}}
      {{Form::text('area', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
      {{Form::label('noOfRooms', 'noOfRooms')}}
      {{Form::text('noOfRooms', '', ['class' => 'form-control'])}}
    </div>

    @foreach($features as $feature)
 
   
    <input type="checkbox" id="{{$feature->id}}" name="{{$feature->id}}" value="{{$feature->id}}">
    <label for="feature->id"> {{$feature->name}}</label><br>
   
    @endforeach


    @foreach($cities as $city)
 
   
    <input type="checkbox" id="city_id" name="city_id" value="{{$city->id}}">
    <label for="city->id"> {{$city->name}}</label><br>
   
    @endforeach


    <div class="form-group">
      {{Form::label('details ', 'details ')}}
      {{Form::textarea('details', '', ['class' => 'form-control', 'placeholder' => 'Enter details'])}}
    </div>
    <div>
      {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
    </div>
  {!! Form::close() !!}



            
 

  @endsection

          