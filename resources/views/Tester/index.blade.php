@extends('layouts.layout')

@section('title')
    <a class="navbar-brand" href="#">Testing Data</a>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            {!! Form::open(['url' => 'tester/stemming']) !!}
            <div class="form-group">
                <h5>Test Normalisasi</h5>
                {!! Form::text('words',null,['class'=>'form-control','placeholder'=>'Masukan Kalimat']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('check',['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            {!! Form::open(['url' => 'tester/stemming']) !!}
            <div class="form-group">
                <h5>Test Stemming</h5>
                {!! Form::text('words',null,['class'=>'form-control','placeholder'=>'Masukan Kalimat']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('check',['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            {!! Form::open(['url' => 'tester/sentiment']) !!}
            <div class="form-group">
                <h5>Test Sentiment</h5>
                {!! Form::text('words',null,['class'=>'form-control','placeholder'=>'Masukan Kalimat']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('check',['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection