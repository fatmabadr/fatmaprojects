@extends('layouts.app')

@section('content')
 
<div class="container">

 
  <h1>add new feature </h1>
  {!! Form::open(['url' => 'Feature/submit']) !!}
    <div class="form-group">
      {{Form::label('name', 'name')}}
      {{Form::text('name', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
      {{Form::label('icon', 'icon')}}
      {{Form::text('icon', '', ['class' => 'form-control'])}}
    </div>


  
      {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
    </div>
  {!! Form::close() !!}



            
 

  @endsection

          