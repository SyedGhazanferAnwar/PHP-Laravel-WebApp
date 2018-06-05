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

                   <h3>Your Blog posts</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
