@extends('layouts.layout')


@section('title')
    <a class="navbar-brand" href="#">Daftar Kosa Kata</a>
@endsection

@section('content')
    <div class="col-lg-3">
        <div class="contact-box center-version">

            <a href="{{url(action('WordSentimentController@getWordPositif'))}}">
                <img alt="image" class="img-circle" src="{{asset('assets/img/positive.png')}}">

                <h3 class="m-b-xs"><strong>Positive Words</strong></h3>
                <address class="m-t-md">
                    <strong>Data dikumpulkan dari</strong><br>
                    Hasil translate berbagai macam sumber paper<br>
                    Hasil data training<br>
                </address>
            </a>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="contact-box center-version">

            <a href="{{url(action('WordSentimentController@getWordNegatif'))}}">
                <img alt="image" class="img-circle" src="{{asset('assets/img/negative.png')}}">

                <h3 class="m-b-xs"><strong>Negative Words</strong></h3>
                <address class="m-t-md">
                    <strong>Data dikumpulkan dari</strong><br>
                    Hasil translate berbagai macam sumber paper<br>
                    Hasil data training<br>
                </address>
            </a>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="contact-box center-version">

            <a href="{{url(action('WordSentimentController@getWordIntegririty'))}}">
                <img alt="image" class="img-circle" src="{{asset('assets/img/integrity.png')}}">

                <h3 class="m-b-xs"><strong>Integrity Words</strong></h3>
                <address class="m-t-md">
                    <strong>Data dikumpulkan dari</strong><br>
                    Hasil translate berbagai macam sumber paper<br>
                    Hasil data training<br>
                </address>
            </a>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="contact-box center-version">

            <a href="{{url(action('WordSentimentController@getWordCapability'))}}">
                <img alt="image" class="img-circle" src="{{asset('assets/img/Capability2.png')}}">

                <h3 class="m-b-xs"><strong>Capability Words</strong></h3>
                <address class="m-t-md">
                    <strong>Data dikumpulkan dari</strong><br>
                    Hasil translate berbagai macam sumber paper<br>
                    Hasil data training<br>
                </address>
            </a>
        </div>
    </div>
@endsection