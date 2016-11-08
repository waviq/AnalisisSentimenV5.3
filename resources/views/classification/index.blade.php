@extends('layouts.layout')

@section('title')
    <a class="navbar-brand" href="#">Klasifikasi</a>
@endsection
@section('content')
    <div class="col-lg-3">
        <div class="contact-box center-version">

            <a href="{{url(action('AgusController@index'))}}">

                <img alt="image" class="img-circle" src="{{asset('assets/img/cagub/agus.jpg')}}">


                <h3 class="m-b-xs"><strong>Agus Yudhoyono</strong></h3>

                <div class="font-bold">@AgusYudhoyono</div>
                <address class="m-t-md">
                    <strong>Calon Gubernur DKI 2017</strong><br>
                    Diusung oleh partai<br>
                    Demokrat, PKB, PAN, PPP<br>
                </address>

            </a>
            <div class="contact-box-footer">
                <div class="m-t-xs btn-group">
                    <a href="{{url(action('ClassificationController@postAgusSentiment'))}}" class="btn btn-xs btn-white"><i class="fa fa-users"></i> Sentiment </a>
                    <a class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                    <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                </div>
            </div>

        </div>
    </div>

    <div class="col-lg-3">
        <div class="contact-box center-version">

            <a href="#">

                <img alt="image" class="img-circle" src="{{asset('assets/img/cagub/ahok.jpg')}}">


                <h3 class="m-b-xs"><strong>Ahok Cahya Purnama</strong></h3>

                <div class="font-bold">@ahok_btp</div>
                <address class="m-t-md">
                    <strong>Calon dari Incumbent</strong><br>
                    Diusung oleh partai<br>
                    PDIP, Nasdem, Golkar<br>
                </address>

            </a>
            <div class="contact-box-footer">
                <div class="m-t-xs btn-group">
                    <a href="{{url(action('ClassificationController@postAhokSentiment'))}}" class="btn btn-xs btn-white"><i class="fa fa-users"></i> Sentiment </a>
                    <a class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                    <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                </div>
            </div>

        </div>
    </div>

    <div class="col-lg-3">
        <div class="contact-box center-version">

            <a href="{{url(action('AnisController@index'))}}">

                <img alt="image" class="img-circle" src="{{asset('assets/img/cagub/anis.jpg')}}">


                <h3 class="m-b-xs"><strong>Anies Baswedan</strong></h3>

                <div class="font-bold">@aniesbaswedan</div>
                <address class="m-t-md">
                    <strong>Calon Gubernur DKI 2017</strong><br>
                    Diusung oleh partai<br>
                    Gerinda<br>
                </address>

            </a>
            <div class="contact-box-footer">
                <div class="m-t-xs btn-group">
                    <a href="{{url(action('ClassificationController@postAnisSentiment'))}}" class="btn btn-xs btn-white"><i class="fa fa-users"></i> Sentiment </a>
                    <a class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                    <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                </div>
            </div>

        </div>
    </div>
@endsection