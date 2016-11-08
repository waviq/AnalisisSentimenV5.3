<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Analist Sentimen Media Sosial</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>


    <!-- Bootstrap core CSS     -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>

    <!-- Animation library for notifications   -->
    <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{asset('assets/css/paper-dashboard.css')}}" rel="stylesheet"/>

    <link href="{{asset('assets/css/sweetalert.css')}}" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/custom.css')}}" rel="stylesheet"/>

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

        <!--
            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Analis Sentiment
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="{{url(action('HomeController@index'))}}">
                        <i class="fa fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href="{{url(action('HomeController@preprocessing'))}}">
                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                        <p>Preprocessing</p>
                    </a>
                </li>

                <li>
                    <a href="{{url(action('ClassificationController@index'))}}">
                        <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                        <p>Classification</p>
                    </a>
                </li>
                <li>
                    <a href="{{url(action('WordSentimentController@index'))}}">
                        <i class="ti-text"></i>
                        <p>Daftar Kata</p>
                    </a>
                </li>
                <li>
                    <a href="{{url(action('TesterController@index'))}}">
                        <i class="fa fa-check"></i>
                        <p>Tester</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    @yield('title')
                </div>
                @yield('procces')
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    @yield('content')

                    @yield('profile')

                </div>


            </div>
        </div>
    </div>

</div>

</body>

<!--   Core JS Files   -->
<script src="{{asset('assets/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{asset('assets/js/bootstrap-checkbox-radio.js')}}"></script>

<!--  Charts Plugin -->
<script src="{{asset('assets/js/chartist.min.js')}}"></script>

<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/bootstrap-notify.js')}}"></script>
<script src="{{asset('assets/js/sweetalert.min.js')}}"></script>
@include('sweet::alert')
<!--  Google Maps Plugin    -->
{{--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>--}}

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="{{asset('assets/js/paper-dashboard.js')}}"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('assets/js/demo.js')}}"></script>

</html>
