@extends('layouts.app')

@section('content')



  <table class="table">
    <thead>
      <tr>
        <th>title</th>
        <th>price</th>
        <th>user_id</th>
        <th>Property</th>
        <th>noOfRooms</th>
      
        <th>Owner</th>
        <th>deails</th>
        <th>features</th>
      </tr>
    </thead>
   

   
    <tbody>

    @foreach($units as $unit)
 


      <tr>
        <td> {{ $unit->title }}</td>
        <td> {{ $unit->price }}$</td>
        <td> {{ $unit->user_id }}</td>
        <td> {{ $unit->Property }}m2</td>
        <td> {{ $unit->noOfRooms }}</td>
        <td> {{ $unit->user->name}}</td>
        <td> {{ $unit->detail }}</td>
        <td> {{ $unit->Feature}}</td>

      </tr>
      @endforeach
   
    </tbody>
  </table>
</div>








@endsection
