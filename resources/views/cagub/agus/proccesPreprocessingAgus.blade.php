<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="{{url(action('AgusController@data'))}}" class="dropdown-toggle">
                <i class="ti-panel"></i>
                <p>Original Data</p>
            </a>
        </li>
        <li>
            <a href="{{url(action('AgusController@postCaseFolding'))}}" class="dropdown-toggle">
                <i class="ti-panel"></i>
                <p>Casefolding</p>
            </a>
        </li>
        <li>
            <a href="{{url(action('AgusController@postNormalisasi'))}}" class="dropdown-toggle">
                <i class="ti-panel"></i>
                <p>Normalisasi</p>
            </a>
        </li>
        <li>
            <a href="{{url(action('AgusController@postStopword'))}}" class="dropdown-toggle">
                <i class="ti-panel"></i>
                <p>Stopword</p>
            </a>
        </li>
        <li>
            <a href="{{url(action('AgusController@postStemming'))}}" class="dropdown-toggle">
                <i class="ti-panel"></i>
                <p>Stemming</p>
            </a>
        </li>

    </ul>

</div>