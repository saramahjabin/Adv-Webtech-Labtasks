@extends('Layout.app')
@section('content')
<h1>This is Contact Information Validation Page</h1>
<form action="{{route('contact')}}" class="form-group" method="post">
@if($message = Session::get('text'))
    <div class="alert alert-success">
    <span class="text-success">{{$message}}</span>
</div>
@endif
{{csrf_field()}}
<div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="email" value="{{old('email')}}"class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Phone</span>
        <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
        @error('phone')
            <span class="text-danger">{{$message}}</span><br>
        @enderror
    </div>
    
    <input type="submit" class="btn btn-success" value="Submit" >                  
</form>
@endsection 