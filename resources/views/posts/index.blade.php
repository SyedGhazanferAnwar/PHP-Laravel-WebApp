@extends('layouts/app')

@section('content')
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class='card card-body bg-light' style="margin-bottom:1%">
            <h3><a href="/lsapp/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written On: {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
     <p>No posts Found</p>
    @endif

@endsection