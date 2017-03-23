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
                                <th class="label-primary vq">Classification</th>
                                </thead>
                                <tbody>

                                @foreach($integritas as $key => $integritass)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$integritass->From_User}}</td>
                                        @if(empty($integritass->text))
                                            <td>N/A</td>
                                        @else
                                            <td>{{$integritass->text}}</td>
                                        @endif

                                        @if($integritass->sentiment->id == 4)
                                            <td class="label la-1x label-success">Berintegritas</td>
                                        @elseif($integritass->sentiment->id == 3)
                                            <td class="label label-info">Netral</td>
                                        @endif
                                    </tr>

                                @endforeach

                                </tbody>
                            </table>

                            <div class="text-center">
                                <ul class="pagination ">
                                    {{$integritas->render()}}
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection