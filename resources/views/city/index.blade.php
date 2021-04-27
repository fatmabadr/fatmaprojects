@extends('layouts.app')

@section('content')



  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
      </tr>
    </thead>
   

   
    <tbody>
    @foreach($cities as $city)
 


      <tr>
        <td> {{ $city->id }}</td>
        <td> {{ $city->name }}</td>

      </tr>
      @endforeach
   
    </tbody>
  </table>
</div>








@endsection
