@extends('layouts.app')
@section('content')
    <a href="/posts" class="btn btn-primary mb-3">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by <b>{{$post->user->name}}</b></small>
    <hr>
    {{-- <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class' => ' float-right'])!!}
        {{-- {{Form::hidden('_method','DELETE')}} --}}
        {{-- {{ Form::open(array('url' => '/', 'method' => 'DELETE', 'class'=>'col-md-12')) }}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    
    {!! Form::close() !!} --}}
@endsection