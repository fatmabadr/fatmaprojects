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
      </tr>
    </thead>
   

   
    <tbody>

    @foreach($flats as $flat)
 


      <tr>
        <td> {{ $flat->title }}</td>
        <td> {{ $flat->price }}$</td>
        <td> {{ $flat->user_id }}</td>
        <td> {{ $flat->Property }}m2</td>
        <td> {{ $flat->noOfRooms }}</td>
        <td> {{ $flat->user->name}}</td>
        <td> {{ $flat->detail }}</td>
      
      </tr>
      @endforeach
   
    </tbody>
  </table>
</div>








@endsection
