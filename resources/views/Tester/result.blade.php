@extends('layouts.layout')

@section('title')
    <a class="navbar-brand" href="#">Result Testing</a>
@endsection

@section('content')
    <h3>{{$hasil}}</h3>
    <a href="{{url(action('TesterController@index'))}}"><button class="btn btn-primary">Back</button></a>
@endsection