<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="{{url(action('WordSentimentController@getWordPositif'))}}" class="dropdown-toggle">
                <i class="ti-panel"></i>
                <p>Positif</p>
            </a>
        <li>
        <li>
            <a href="{{url(action('WordSentimentController@getWordNegatif'))}}" class="dropdown-toggle">
                <i class="ti-panel"></i>
                <p>Negatif</p>
            </a>
        </li>



    </ul>

</div>