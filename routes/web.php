<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', function () {
    return Twitter::getFollowers(['screen_name' => 'AgusYudhoyono', 'count' => 20, 'format' => 'json']);
});

Route::get('stemmer', function(){

    require_once __DIR__ . '/../vendor/autoload.php';

    $stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
    $stemmer  = $stemmerFactory->createStemmer();

// stem
    $sentence = 'Perekonomian Indonesia sedang dalam pertumbuhan yang membanggakan';
    $output   = $stemmer->stem($sentence);

    return $output;
});