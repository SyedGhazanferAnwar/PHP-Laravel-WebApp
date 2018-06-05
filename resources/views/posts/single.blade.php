@extends('layouts/app')

@section('content')
<a class='btn' href="/lsapp/public/posts/" style="margin-left:-5%">Go Back</a>
<a class='btn btn-primary' href="/lsapp/public/posts/{{$singlepost->id}}/edit" style="float:right">Edit</a>

<h1>{{$singlepost->title}}</h1>
<div>
    <body>{!!$singlepost->body!!}</body>
</div>
<hr>
<small>Written On: {{$singlepost->created_at}}</small>
{!!Form::open(['action'=>['PostsController@destroy',$singlepost->id],'method'=>'POST','class'=>'float-right'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
@endsection