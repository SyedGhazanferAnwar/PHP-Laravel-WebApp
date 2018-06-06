@extends('layouts/app')

@section('content')
<a class='btn' href="/lsapp/public/posts/" style="margin-left:-5%">Go Back</a>
@if(Auth::user()->id === $singlepost->user_id)
<a class='btn btn-primary' href="/lsapp/public/posts/{{$singlepost->id}}/edit" style="float:right">Edit</a>
@endif

<h1>{{$singlepost->title}}</h1>
<div>
    <body>{!!$singlepost->body!!}</body>
</div>
<hr>
<p><small>Created by: {{$singlepost->user->name}}</small>  &nbsp; &nbsp; &nbsp;<small>Written On: {{substr($singlepost->created_at, 0, -9)}}</small></p>
@if(Auth::user()->id === $singlepost->user_id)
        {!!Form::open(['action'=>['PostsController@destroy',$singlepost->id],'method'=>'POST','class'=>'float-right'])!!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
        {!!Form::close()!!}
    @endif
@endsection