@extends('Layout.app')
@section('content')
<h1>{{ $contentName }}</h1>    
    @foreach ($contents as $content)
        <li>{{ $content }}</li>
    @endforeach
@endsection 