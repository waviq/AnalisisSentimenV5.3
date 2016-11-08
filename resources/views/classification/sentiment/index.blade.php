@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Data Asli dari Twitter</h4>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                <th class="label-primary vq">No</th>
                                <th class="label-primary vq">From User</th>
                                <th class="label-primary vq">Text</th>
                                <th class="label-primary vq">Sentiment</th>
                                </thead>
                                <tbody>

                                @foreach($ahok as $key => $ahoks)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$ahoks->From_User}}</td>
                                        @if(empty($ahoks->text))
                                            <td>N/A</td>
                                        @else
                                            <td>{{$ahoks->text}}</td>
                                        @endif

                                        @if($ahoks->sentiment->id == 1)
                                            <td class="label la-1x label-success">{{$ahoks->sentiment->kriteria}}</td>
                                            @elseif($ahoks->sentiment->id == 2)
                                            <td class="label label-danger">{{$ahoks->sentiment->kriteria}}</td>
                                            @elseif($ahoks->sentiment->id == 3)
                                            <td class="label label-info">{{$ahoks->sentiment->kriteria}}</td>
                                        @endif


                                    </tr>

                                @endforeach

                                </tbody>
                            </table>

                            <div class="text-center">
                                <ul class="pagination ">
                                    {{$ahok->render()}}
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection