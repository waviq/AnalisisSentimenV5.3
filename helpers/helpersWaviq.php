<?php

use Illuminate\Support\Str;
use Illuminate\Support\HtmlString;
use Illuminate\Container\Container;
use Illuminate\Contracts\Bus\Dispatcher;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\Auth\Factory as AuthFactory;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Contracts\Cookie\Factory as CookieFactory;
use Illuminate\Database\Eloquent\Factory as EloquentFactory;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;
use Illuminate\Contracts\Broadcasting\Factory as BroadcastFactory;

if (! function_exists('lower')) {

    function lower($string)
    {
        return Str::lower($string);
    }
}

if (! function_exists('normalisasi')) {

    function normalisasi($string)
    {
        $string = preg_replace('/#\S+ */', '', $string);
        $string = preg_replace('/(^|[^@\w])@(\w{1,15})\b/', '', $string);
        $string = preg_replace('~(?i)\b((?:[a-z][\w-]+:(?:/{1,3}|[a-z0-9%])|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:\'".,<>?«»“”‘’]))~', '', $string);
        $string = preg_replace('/rt: "/', '', $string);
        $string = preg_replace('/rt: /', '', $string);
        $string = $result = preg_replace("/[^a-zA-Z0-9 ]/", "", $string);
        $arr_needle = array("bukan ","tak ","tidak ","tanpa ","jangan ","masa ","sllu");
        $arr_replace = array("bukan-","tak-","tidak-","tanpa-","jangan-","masa-","selalu");
        $string = str_replace($arr_needle, $arr_replace, $string);
        return $string;
    }
}

if (! function_exists('stopword')) {

    function stopword($string)
    {
        $factory = new \Sastrawi\StopWordRemover\StopWordRemoverFactory();
        $stopword = $factory->createStopWordRemover();
        return $stopword->remove($string);

    }
}
if (! function_exists('stemming')) {

    function stemming($string)
    {
        $factory = new \Sastrawi\Stemmer\StemmerFactory();
        $stopword = $factory->createStemmer();
        return $stopword->stem($string);

    }
}

if (! function_exists('addStemming')) {

    function addStemming($string)
    {
        $stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();

        $dictionary = $stemmerFactory->createDefaultDictionary();
        $dictionary->addWordsFromTextFile(__DIR__.'/my-dictionary.txt');
        $dictionary->add('internet');
        $dictionary->remove('desa');

    }
}



