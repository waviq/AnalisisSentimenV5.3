<?php

namespace App\Http\Controllers;

use App\Ahok;
use App\Caseholding;
use App\CaseholdingAhok;
use App\Http\Requests;
use App\NormalisasiAhok;
use App\Providers\HelperServiceProvider;
use App\StatusProcces;
use App\StemmingAhok;
use App\StopwordAhok;
use App\Word;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;

class AhokController extends Controller
{
    public function index()
    {
        return view('cagub.ahok.index');
    }

    public function data()
    {

        $ahok = Ahok::paginate(30);
        //dd($ahok);
        return view('cagub.ahok.data', compact('ahok'));
    }

    public function postCaseFolding()
    {
        $ahok = Ahok::all();
        CaseholdingAhok::truncate();

        foreach ($ahok as $key => $ahoks){
            $saveAhok = new CaseholdingAhok();
            $saveAhok->id = $key+1;
            $saveAhok->From_User = $ahoks->From_User;
            $saveAhok->text = lower($ahoks->Text);
            $saveAhok->save();
        }

        $status = StatusProcces::where('id',1)->first();
        $status->status = 1;
        $status->save();

        return redirect(url(action('AhokController@caseFolding')));
    }
    public function caseFolding()
    {
        $ahokLower = CaseholdingAhok::paginate(30);

        return view('cagub.ahok.casefolding', compact('ahokLower'));
    }

    public function postNormalisasi()
    {
        $ahokCaseholding = CaseholdingAhok::all();
        NormalisasiAhok::truncate();
        foreach ($ahokCaseholding as $key => $ahoks){
            $saveAhok = new NormalisasiAhok();
            $saveAhok->id = $key+1;
            $saveAhok->From_User = $ahoks->From_User;
            $saveAhok->text = iconv(mb_detect_encoding(normalisasi($ahoks->text), mb_detect_order(), true), "UTF-8", normalisasi($ahoks->text));
            //$saveAhok->text = iconv(mb_detect_encoding(normalisasi($ahoks->text), mb_detect_order(), true), "UTF-8", normalisasi($ahoks->text));
            $saveAhok->save();
        }
        $status = StatusProcces::where('id',2)->first();
        $status->status = 1;
        $status->save();

        return redirect(url(action('AhokController@normalisasi')));
    }
    public function normalisasi()
    {
        $ahok = NormalisasiAhok::paginate(30);
        return view('cagub.ahok.normalisasi', compact('ahok'));
    }

    public function postStopword(){

        $ahokStopword = NormalisasiAhok::all();
        StopwordAhok::truncate();

        foreach ($ahokStopword as $key => $ahoks){
            $saveAhok = new StopwordAhok();
            $saveAhok->id = $key+1;
            $saveAhok->From_User = $ahoks->From_User;
            $saveAhok->text = stopword($ahoks->text);
            $saveAhok->save();
        }

        return redirect(url(action('AhokController@stopword')));
    }
    public function stopword(){
        $ahok = StopwordAhok::paginate(30);
        return view('cagub.ahok.stopword', compact('ahok'));
    }

    public function postStemming(){

        $ahokStopword = StopwordAhok::all();
        StemmingAhok::truncate();

        foreach ($ahokStopword as $key => $ahoks){
            $saveAhok = new StemmingAhok();
            $saveAhok->id = $key+1;
            $saveAhok->From_User = $ahoks->From_User;
            $saveAhok->text = stemming($ahoks->text);
            $saveAhok->save();
        }
        return redirect(url(action('AhokController@getStemming')));
    }

    public function getStemming(){
        $ahok = StemmingAhok::paginate(30);
        return view('cagub.ahok.stemming', compact('ahok'));
    }

}
