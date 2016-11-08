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


use App\WordPositif;

Route::get('/','HomeController@index');
Route::get('stemming',function(){

});

Route::get('testGet', function(){
    return view('test.test');
});

Route::get('sentimen', function (){
     return view('sentimen.test');
});
Route::post('sentimen', function (){
    $input = \Illuminate\Support\Facades\Input::get('text');

    $search = explode(' ',$input);
    $data = WordPositif::whereIn('positif',$search)->get()->count();
    dd($data);


    /*$searchValues = preg_split('/\s+/', $input);

    $word = \App\WordPositif::where(function ($q)use($searchValues){
       foreach ($searchValues as $value){
           $q->orWhere('positif','like',"%{$value}%");
       }
    })->get();
    dd($word);*/

});

Route::post('test', function(){
    //$str = "MAMPU, MENERIMA, ACTION, AKTIFKAN, ACTIVE, ADD, TAMBAHAN, ADORABLE, KEUNTUNGAN,TAMBAHAN";
    $input = \Illuminate\Support\Facades\Input::get('text');

    dd(normalisasi($input));


    /*//Ubah array word kamus
    $input = strtolower($input);
    $ab = "bukan ,tak ,tidak ,tanpa ,jangan" ;
    $input = explode(',',$ab);
    $input = str_replace(' ','-',$input);
    dd($input);

    $input = str_replace(' ','-',$input);
    $input = explode("\n",$input);
    $input = array_unique($input);

    $input = implode("\n",$input);
    dd($input);*/


});
Route::get('ahok','AhokController@index');
Route::get('agus','AgusController@index');
Route::get('anis','AnisController@index');

Route::get('preprocessing','HomeController@preprocessing');
Route::get('classification','ClassificationController@index');

Route::get('classification/sentiment/ahok','ClassificationController@getSentimentAhok');
Route::get('classification/sentiment/ahok/post','ClassificationController@postAhokSentiment');

Route::get('classification/sentiment/agus','ClassificationController@getSentimentAgus');
Route::get('classification/sentiment/agus/post','ClassificationController@postAgusSentiment');

Route::get('classification/sentiment/anis','ClassificationController@getSentimentAnis');
Route::get('classification/sentiment/anis/post','ClassificationController@postAnisSentiment');

Route::get('tester','TesterController@index');
Route::post('tester/normalisasi','TesterController@normalisasi');
Route::post('tester/stemming','TesterController@stemming');
Route::post('tester/sentiment','TesterController@sentimen');






Route::get('preprocessing/ahok/data', 'AhokController@data');
Route::get('preprocessing/ahok/casefolding/post', 'AhokController@postCaseFolding');
Route::get('preprocessing/ahok/casefolding', 'AhokController@caseFolding');
Route::get('preprocessing/ahok/normalisasi/post', 'AhokController@postNormalisasi');
Route::get('preprocessing/ahok/normalisasi', 'AhokController@normalisasi');
Route::get('preprocessing/ahok/stopword/post', 'AhokController@postStopword');
Route::get('preprocessing/ahok/stopword', 'AhokController@stopword');
Route::get('preprocessing/ahok/stemming/post', 'AhokController@postStemming');
Route::get('preprocessing/ahok/stemming', 'AhokController@getStemming');


Route::get('preprocessing/agus/data', 'AgusController@data');
Route::get('preprocessing/agus/casefolding/post', 'AgusController@postCaseFolding');
Route::get('preprocessing/agus/casefolding', 'AgusController@caseFolding');
Route::get('preprocessing/agus/normalisasi/post', 'AgusController@postNormalisasi');
Route::get('preprocessing/agus/normalisasi', 'AgusController@normalisasi');
Route::get('preprocessing/agus/stopword/post', 'AgusController@postStopword');
Route::get('preprocessing/agus/stopword', 'AgusController@stopword');
Route::get('preprocessing/agus/stemming/post', 'AgusController@postStemming');
Route::get('preprocessing/agus/stemming', 'AgusController@getStemming');

Route::get('preprocessing/anis/data', 'AnisController@data');
Route::get('preprocessing/anis/casefolding/post', 'AnisController@postCaseFolding');
Route::get('preprocessing/anis/casefolding', 'AnisController@caseFolding');
Route::get('preprocessing/anis/normalisasi/post', 'AnisController@postNormalisasi');
Route::get('preprocessing/anis/normalisasi', 'AnisController@normalisasi');
Route::get('preprocessing/anis/stopword/post', 'AnisController@postStopword');
Route::get('preprocessing/anis/stopword', 'AnisController@stopword');
Route::get('preprocessing/anis/stemming/post', 'AnisController@postStemming');
Route::get('preprocessing/anis/stemming', 'AnisController@getStemming');

Route::post('sentimen/ahok','AhokController@postSentimen');

Route::get('word/positif','WordSentimentController@getWordPositif');
Route::post('word/positif/word','WordSentimentController@postWordPositif');
Route::delete('word/positif/{id}','WordSentimentController@hapus');
Route::post('word/positif','WordSentimentController@searchPositif');

Route::get('word/negatif','WordSentimentController@getWordNegatif');
Route::post('word/negatif/word','WordSentimentController@postWordNegatif');
Route::delete('word/negatif/{id}','WordSentimentController@hapusNegatif');
Route::post('word/negatif','WordSentimentController@searchNegatif');

Route::get('word','WordSentimentController@index');
Route::get('/twitter', function () {
    return Twitter::getFollowers(['screen_name' => 'AgusYudhoyono', 'count' => 20, 'format' => 'json']);
});

Route::get('stemmer', function(){

    require_once __DIR__ . '/../vendor/autoload.php';

    $stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
    $stemmer  = $stemmerFactory->createStemmer();


// stem
    $sentence = 'Perekonomian Indonesia sedang dalam pertumbuhan yang membanggakan';
    $output   = $stemmer->stem($sentence);

    $stopword = new \Sastrawi\StopWordRemover\StopWordRemoverFactory();
    $stop = $stopword->createStopWordRemover()->remove($output);

    return $stop;
});

Route::get('lowercase', 'CaseFoldingController@postCaseFolding');