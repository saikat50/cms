@extends('layouts.app')


@section('content')
    <h1>create post</h1>
    {{--<form method="post" action="/posts">--}}
    {!! Form::open(['method'=>'POST', 'action'=>'PostsController@store', 'files'=>true]) !!}

        <div class="form-group">

            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">
            {!! Form::file('file', ['class', 'form-control']) !!}
        </div>

        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

<h1></h1>



    @if(count($errors) >0 )


        <div class="alert alert-danger">

            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>

        </div>


    @endif


@endsection