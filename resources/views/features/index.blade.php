@extends('layouts.app')

@section('content')



  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>icon</th>
        
      </tr>
    </thead>
   

   
    <tbody>

    @foreach($features as $feature)
 


      <tr>
        <td> {{ $feature->id }}</td>
        <td> {{ $feature->name }}</td>
        <td> <i class= "{{ $feature->icon }}"></i></td>
      </tr>
      @endforeach
   
    </tbody>
  </table>
</div>








@endsection
