@extends('layouts.app')



@section('content')

    <h1>this a contact page</h1>

    @if(count($people))

        <ul>

        @foreach($people as $person)

            <li>{{$person}}</li>

            @endforeach
        </ul>
    @endif


@stop