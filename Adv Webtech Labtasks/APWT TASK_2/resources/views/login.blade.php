@extends('Layout.app')
@section('content')
<h2>Login</h2> 
<form action="{{route('login')}}" class="form-group" method="post">
    @if($message = Session::get('error'))
    <div class="alert alert-danger">
    <span class="text-danger">{{$message}}</span>
</div>
@endif
{{csrf_field()}}
<div class="col-md-4 form-group">
        <span>User Name</span>
        <input type="text" name="username" value="{{old('username')}}" class="form-control">
        @error('username')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Password</span>
        <input type="text" name="pass" value="{{old('pass')}}"class="form-control">
        @error('pass')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    
    <input type="submit" class="btn btn-success" value="Submit" >                  
</form>
@endsection 