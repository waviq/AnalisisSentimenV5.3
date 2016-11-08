<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="{{url(action('AnisController@data'))}}" class="dropdown-toggle">
                <i class="ti-panel"></i>
                <p>Original Data</p>
            </a>
        <li>
        <li>
            <a href="{{url(action('AnisController@postCaseFolding'))}}" class="dropdown-toggle ">
                <i class="ti-panel"></i>
                <p>Casefolding</p>
            </a>
        <li>
            <a href="{{url(action('AnisController@postNormalisasi'))}}" class="dropdown-toggle">
                <i class="ti-panel"></i>
                <p>Normalisasi</p>
            </a>
        </li>
        <li>
            <a href="{{url(action('AnisController@postStopword'))}}" class="dropdown-toggle">
                <i class="ti-panel"></i>
                <p>Stopword</p>
            </a>
        </li>
        <li>
            <a href="{{url(action('AnisController@postStemming'))}}" class="dropdown-toggle">
                <i class="ti-panel"></i>
                <p>Stemming</p>
            </a>
        </li>
        {{--<li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="ti-bell"></i>
                <p class="notification">5</p>
                <p>Notifications</p>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#">Notification 1</a></li>
                <li><a href="#">Notification 2</a></li>
                <li><a href="#">Notification 3</a></li>
                <li><a href="#">Notification 4</a></li>
                <li><a href="#">Another notification</a></li>
            </ul>
        </li>--}}

    </ul>

</div>