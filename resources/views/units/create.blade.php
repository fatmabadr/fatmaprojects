@extends('layouts.app')

@section('content')

<div class="container">


  <h1>add new flat ya {{ Auth::user()->name  }}^_^</h1>
  {!! Form::open(['url' => 'Units/submit']) !!}
<<<<<<< HEAD
  <div class="form-group">


=======
 
    
 
 
 <div class="form-group">
>>>>>>> f84b2a383c19144a0173641e688dc7d63a2ca616
  <label for="type"> unit type:</label>
  <select name="type" id="type">
    <option value="Apartments">Apartments</option>
    <option value="Houses">Houses</option>
    <option value="villas">villas</option>
    <option value="Land">Land</option>
    <option value="offices">offices</option>
  </select>
    </div>

<div class="form-group">
 <label for="city_id"> unit loction:</label>
    <select name="city_id" id="city_id">
        @foreach($cities as $city)
              <option value="{{$city->id}}">{{$city->name}}</option>
        @endforeach
    </select>
</div>

    <div class="form-group">
    <label for="status"> unit status:</label>
    <select name="status" id="status">
    <option value="For rent">For rent</option>
    <option value="for sale">for sale</option>

  </select>
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
    <hr>
    <h3>selece features please</h3>
    @foreach($features as $feature)
    <label><input type="checkbox" name="features[]" value="{{$feature->id}}"> {{$feature->name}}</label>
    <label for="feature->id"> {{$feature->name}}</label><br>
    @endforeach
    </select>
    <hr>

<<<<<<< HEAD
    @foreach($cities as $city)


    <input type="checkbox" id="city_id" name="city_id" value="{{$city->id}}">
    <label for="city->id"> {{$city->name}}</label><br>
=======
>>>>>>> f84b2a383c19144a0173641e688dc7d63a2ca616

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

