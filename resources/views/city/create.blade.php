@extends('layouts.app')

@section('content')
 
<div class="container">


  <h1>add new city </h1>
  {!! Form::open(['url' => 'city/submit'])!!}
  <div class="form-group">
      {{Form::label('name', 'name')}}
      {{Form::text('name', '', ['class' => 'form-control'])}}
    </div>

   
    <div>
      {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
    </div>
  {!! Form::close() !!}



            
 

  @endsection

          