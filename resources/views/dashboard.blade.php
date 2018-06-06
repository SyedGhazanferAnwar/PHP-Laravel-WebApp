@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <p><a class="btn btn-primary" href="/lsapp/public/posts/create">Create Post</a></p>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h4>Your Blog posts</h4>
                   @if(count($myposts)>0)

                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            </tr>
                                    @foreach($myposts as $post)
                                        <tr>
                                            <td>{{$post->title}}</td>
                                            <td><a class="btn btn-primary" href="/lsapp/public/posts/{{$post->id}}">View</a></td>
                                            <td><a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                                            <td><a>
                                                    {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST'])!!}
                                                    {{Form::hidden('_method','DELETE')}}
                                                    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                                    {!!Form::close()!!}
                                                </a></td>
                                        </tr>
                                    @endforeach
                        </table>                
                    @else
                            <p>You don't have any posts</p>                           
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection