@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="mb-4">Posts</h1>
        </div>
        <div class="card-body">
            @if (count($posts) > 0)
                @foreach ($posts as $post)
                    <div class="card p-4">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <img style="width:100%" src="/storage/cover_image/{{$post->cover_image}}" alt="">
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                    <small>Written on {{$post->created_at}} by <b>{{$post->user->name}}</b></small>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="mt-2">
                    {{$posts->links()}}
                </div>
            
            @else 
                <p>No posts fount</p>
            @endif
        </div>
    </div>
@endsection