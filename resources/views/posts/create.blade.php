@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{-- values , name , value --}}
            {{Form::text('title', '', ['class' => 'form-control','placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Body')}}
            {{-- values , name , value --}}
            {{Form::text('body', '', ['class' => 'form-control','placeholder' => 'Body text'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection