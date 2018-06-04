@extends('layouts/app')

@section('content')
<a class='btn' href="/lsapp/public/posts/" style="margin-left:-5%">Go Back</a>
<h1>{{$singlepost->title}}</h1>
<div>
    <body>{{$singlepost->body}}</body>
</div>
<hr>
<small>Written On: {{$singlepost->created_at}}</small>
@endsection