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
                                <th>No</th>
                                <th>From User</th>
                                <th>Text</th>
                                </thead>
                                <tbody>

                                @foreach($ahok as $key => $ahoks)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$ahoks->From_User}}</td>
                                        @if(empty(normalisasi($ahoks->Text)))
                                            <td>null</td>
                                        @else
                                            <td>{{normalisasi($ahoks->Text)}}</td>
                                        @endif

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection