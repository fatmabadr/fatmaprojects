
  <h1>add new flat</h1>
  {!! Form::open(['url' => 'Flats/submit']) !!}
    <div class="form-group">
      {{Form::label('title', 'title')}}
      {{Form::text('title', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
      {{Form::label('price', 'Price')}}
      {{Form::text('price', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
      {{Form::label('property', 'Property')}}
      {{Form::text('property', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
      {{Form::label('noOfRooms', 'noOfRooms')}}
      {{Form::text('noOfRooms', '', ['class' => 'form-control'])}}
    </div>

   
    <div class="form-group">
      {{Form::label('details ', 'details ')}}
      {{Form::textarea('details', '', ['class' => 'form-control', 'placeholder' => 'Enter details'])}}
    </div>
    <div>
      {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
    </div>
  {!! Form::close() !!}






          