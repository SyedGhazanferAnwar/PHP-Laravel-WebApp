@extends('layouts/app')

@section('title')
    Home
@endsection     
@section('content')
    {{-- <h1>{{$title}}</h1> --}}
    <div class="jumbotron text-center">
        <h1>Welcome to DonGo CMS</h1>
        <p>This a laravel based CMS which is under construction</p>
        <p><a class="btn btn-primary btn-lg" href="/lsapp/public/login">Login</a> <a class="btn btn-success btn-lg" href="/lsapp/public/register">Register</a></p>
    </div>
@endsection