@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-primary m-3">Go Back</a>
<div class="card">
    
    
    
    <div class="card-header">
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_image/{{$post->cover_image}}" alt="">
    </div>
    <div class="card-body">
        {{$post->body}}
    
    <hr>
    <small>Written on {{$post->created_at}} by <b>{{$post->user->name}}</b></small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class' => ' float-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{ Form::open(array('url' => '/', 'method' => 'DELETE', 'class'=>'col-md-12')) }}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            
            {!! Form::close() !!}
        @endif
    @endif
    </div>  
</div>
@endsection