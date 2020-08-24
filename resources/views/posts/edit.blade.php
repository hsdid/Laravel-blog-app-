@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Edit Post</h1> 
    {!! Form::open(['action' => ['PostsController@update',$post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{-- values , name , value --}}
            {{Form::text('title', $post->title, ['class' => 'form-control','placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Body')}}
            {{-- values , name , value --}}
            {{Form::text('body', $post->body, ['class' => 'form-control','placeholder' => 'Body text'])}}
        </div>
        {{-- {{Form::hidden('_method','PUT')}} --}}
        {{ Form::open(array('url' => '/', 'method' => 'PUT', 'class'=>'col-md-12')) }}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection