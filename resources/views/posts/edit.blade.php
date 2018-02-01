@extends('layouts.app')


@section('content')
    <h1>edit post</h1>

    {!! Form::model($post, ['method'=>'PATCH', 'action'=>['PostsController@update', $post->id]]) !!}


    <div class="form-group">

        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}

    </div>

    {!! Form::submit('Update Post', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}







    {{--<form method="post" action="/posts/{{$post->id}}">--}}

        {{--<input type="hidden" name="_method" value="PUT">--}}
        {{--<input type="text" name="title" placeholder="Enter your title" value="{{$post->title}}">--}}
        {{--{{csrf_field()}}--}}
        {{--<input type="submit" name="submit">--}}

    {{--</form>--}}

    {!! Form::open(['method'=>'DELETE', 'action'=>['PostsController@destroy', $post->id]]) !!}

        {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}

   {!! Form::close() !!}

@endsection