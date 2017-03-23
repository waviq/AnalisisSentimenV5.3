@extends('layouts.layout')

@section('title')
    <a class="navbar-brand" href="#">Klasifikasi</a>
@endsection
@section('content')
    <div class="col-lg-3">
        <div class="contact-box center-version-kotak">

            <a href="{{url(action('ClassificationController@indexSentimen'))}}">

                <img alt="image" class="img-kotak" src="{{asset('assets/img/sentimen.jpg')}}">

            </a>

        </div>
    </div>

    <div class="col-lg-3">
        <div class="contact-box center-version-kotak">

            <a href="{{url(action('IntegritasController@indexIntegritas'))}}">

                <img alt="image" class="img-kotak" src="{{asset('assets/img/integrity.png')}}">

            </a>

        </div>
    </div>

@endsection