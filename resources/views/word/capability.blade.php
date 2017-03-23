@extends('word.index')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <form action="{{url(action('WordSentimentController@postWordCapability'))}}" method="post">
                {!! Form::hidden('sentimen_id',5) !!}
                {!! Form::token() !!}
                <div class="form-group">
                    {!! Form::text('word',null,['class'=>'form-control','placeholder'=>'input word']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('save',['class'=>'btn btn-primary']) !!}
                </div>
            </form>
            <form action="{{url(action('WordSentimentController@searchCapability'))}}" method="post">
                {!! Form::hidden('sentimen_id',5) !!}
                {!! Form::token() !!}
                <div class="form-group">
                    {!! Form::text('word',null,['class'=>'form-control','placeholder'=>'input word']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Find Word',['class'=>'btn btn-primary']) !!}
                </div>
            </form>
            @include('errors.alertValidasi')
        </div>
        <div class="col-md-4">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Word</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($word as $key => $words)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$words->word}}</td>
                            <td>
                            {!! Form::open(array('action'=>array('WordSentimentController@hapusCapability', $words->id), 'method'=>'delete')) !!}
                            <!-- Button Submit-->
                                {!! Form::submit('Delete', ['class' =>'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                <ul class="pagination ">
                    {{$word->render()}}
                </ul>
            </div>
        </div>
    </div>
@endsection
