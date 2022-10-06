@extends('Layout.app')
@section('content')

    <div >
    <h1>Welcome {{$customer->name}}</h1>
    <h3>Address: {{$customer->address}}</h3>
    <h3>Email: {{$customer->email}}</h3>
    <h3>Phone: {{$customer->phone}}</h3>
</div>
<form action="{{route('logout')}}" class="form-group" method="post">
{{csrf_field()}}
<input type="submit" class="btn btn-success" value="Logout" >                  
</form>
@endsection 

