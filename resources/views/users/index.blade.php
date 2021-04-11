<h1> Users</h1>
@if (count($users)>0)
@foreach($users as $user)
{{$user->name}}
"\n"
{{$user->email}}
@endforeach
@endif