@extends('layouts/app')

@section('title')
    Services
@endsection
@section('content')
    <h1>{{$title}}</h1>
    @if(count($myservices) > 0)
    <ul class='list-group'>
        @foreach($myservices as $service)
          <li class='list-group-item'>{{$service}}</li>
        @endforeach
    </ul>
    @endif
@endsection