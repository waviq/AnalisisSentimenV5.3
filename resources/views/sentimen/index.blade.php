@extends('layouts.layout')

@section('title')
    <a class="navbar-brand" href="#">Sentimen Positif dan Negatif</a>
@endsection
@section('content')
    <div class="col-lg-3">
        <div class="contact-box center-version">

            <a href="{{url(action('SentimenController@postAgusSentiment'))}}">

                <img alt="image" class="img-circle" src="{{asset('assets/img/cagub/agus.jpg')}}">

                <h3 class="m-b-xs"><strong>Agus Yudhoyono</strong></h3>
            </a>

        </div>
    </div>

    <div class="col-lg-3">
        <div class="contact-box center-version">

            <a href="{{url(action('SentimenController@postAhokSentiment'))}}">

                <img alt="image" class="img-circle" src="{{asset('assets/img/cagub/ahok.jpg')}}">


                <h3 class="m-b-xs"><strong>Ahok Cahya Purnama</strong></h3>
            </a>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="contact-box center-version">

            <a href="{{url(action('ClassificationController@postAnisSentiment'))}}">

                <img alt="image" class="img-circle" src="{{asset('assets/img/cagub/anis.jpg')}}">


                <h3 class="m-b-xs"><strong>Anies Baswedan</strong></h3>

            </a>


        </div>
    </div>
@endsection