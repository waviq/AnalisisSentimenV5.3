@extends('layouts.layout')
@section('procces')
    @include('cagub.anis.proccesPreprocessingAnis')
@endsection
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
                                <th>No</th>
                                <th>From User</th>
                                <th>Text</th>
                                </thead>
                                <tbody>

                                @foreach($anis as $key => $aniss)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$aniss->From_User}}</td>
                                        @if(empty($aniss->text))
                                            <td>null</td>
                                        @else
                                            <td>{{$aniss->text}}</td>
                                        @endif
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            <div class="text-center">
                                <ul class="pagination ">
                                    {{$anis->render()}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection