@extends('layouts.layout')
@section('procces')
    @include('layouts.proccesPreprocessing')
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

                                @foreach($ahok as $key => $ahoks)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$ahoks->From_User}}</td>
                                        <td>{{$ahoks->text}}</td>
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